<?php

/**
 * Form builder for the add image block form.
 *
 * @see block_add_block_form_validate()
 * @see xsponsorship_add_block_form_submit()
 * @ingroup forms
 */
function xsponsorship_add_block_form() {
  module_load_include('inc', 'block', 'block.admin');
  $form = array();
  $form = block_admin_configure($form, $form_state, 'xsponsorship', NULL);
  unset($form['settings']['body_field']);
//  dpm($form);
  return $form;
}

/**
 * Form submission handler for the add image block form.
 *
 * Saves the new custom image block.
 *
 * @see xsponsorship_add_block_form()
 * @see block_add_block_form_validate()
 */
function xsponsorship_add_block_form_submit($form, &$form_state) {
  $delta = db_insert('xsponsorship')
    ->fields(array(
      'info' => $form_state['values']['info'],
      'type' => $form_state['values']['xsponsorship_type'],
    ))
    ->execute();
  // Store block delta to allow other modules to work with new block.
  $form_state['values']['delta'] = $delta;

  $query = db_insert('block')->fields(array('visibility', 'pages', 'custom', 'title', 'module', 'theme', 'status', 'weight', 'delta', 'cache'));
  foreach (list_themes() as $key => $theme) {
    if ($theme->status) {
      $query->values(array(
        'visibility' => (int) $form_state['values']['visibility'],
        'pages' => trim($form_state['values']['pages']),
        'custom' => (int) $form_state['values']['custom'],
        'title' => $form_state['values']['title'],
        'module' => $form_state['values']['module'],
        'theme' => $theme->name,
        'status' => 0,
        'weight' => 0,
        'delta' => $delta,
        'cache' => DRUPAL_NO_CACHE,
      ));
    }
  }
  $query->execute();

  $query = db_insert('block_role')->fields(array('rid', 'module', 'delta'));
  foreach (array_filter($form_state['values']['roles']) as $rid) {
    $query->values(array(
      'rid' => $rid,
      'module' => $form_state['values']['module'],
      'delta' => $delta,
    ));
  }
  $query->execute();

  // Store regions per theme for this block
  foreach ($form_state['values']['regions'] as $theme => $region) {
    db_merge('block')
      ->key(array('theme' => $theme, 'delta' => $delta, 'module' => $form_state['values']['module']))
      ->fields(array(
        'region' => ($region == BLOCK_REGION_NONE ? '' : $region),
        'pages' => trim($form_state['values']['pages']),
        'status' => (int) ($region != BLOCK_REGION_NONE),
      ))
      ->execute();
  }

  xsponsorship_block_save($delta, $form_state['values']);

  drupal_set_message(t('The advertisement block has been created.'));
  cache_clear_all();
  $form_state['redirect'] = 'admin/structure/block';
}

/**
 * Form builder for the image block deletion form.
 *
 * @param $delta
 *   The unique ID of the block within the context of $module.
 *
 * @see xsponsorship_custom_block_delete_submit()
 */
function xsponsorship_custom_block_delete($form, &$form_state, $delta) {
  $block = block_load('xsponsorship', $delta);
  $custom_block = block_xsponsorship_get($block->delta);
  $form['info'] = array('#type' => 'hidden', '#value' => $custom_block['info'] ? $custom_block['info'] : 'Default info');
  $form['bid'] = array('#type' => 'hidden', '#value' => $block->delta);

  return confirm_form($form, t('Are you sure you want to delete the advertisement block %name?', array('%name' => $custom_block['info'])), 'admin/structure/block', '', t('Delete'), t('Cancel'));
}

/**
 * Form submission handler for the image block deletion form.
 *
 * @see xsponsorship_custom_block_delete()
 */
function xsponsorship_custom_block_delete_submit($form, &$form_state) {
  db_delete('xsponsorship')
    ->condition('bid', $form_state['values']['bid'])
    ->execute();
  db_delete('block')
    ->condition('module', 'xsponsorship')
    ->condition('delta', $form_state['values']['bid'])
    ->execute();
  db_delete('block_role')
    ->condition('module', 'xsponsorship')
    ->condition('delta', $form_state['values']['bid'])
    ->execute();
  
  drupal_set_message(t('The advertisement block %name has been removed.', array('%name' => $form_state['values']['info'])));
  cache_clear_all();
  $form_state['redirect'] = 'admin/structure/block';
  return;
}
