<?php

/**
 * @file
 * Default theme implementation to display sponsored content.
 *
 * Available variables:
 * - $image: Block image.
 * - $content: Block content.
 * - $block: Block object.
 *
 * @see template_preprocess()
 * @see template_preprocess_xsponsorship_content()
 */
?>
<?php if ($image): ?>
  <div class="block-image">
    <?php print $image ?>
  </div>
<?php endif; ?>

<?php if ($content): ?>
  <div class="block-body">
    <?php print $content ?>
  </div>
<?php endif; ?>
