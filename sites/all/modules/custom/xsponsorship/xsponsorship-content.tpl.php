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

<?php
/**
* {% set types = {
*     'mrec': {'width': '300', 'height': '250'},
*     'lrec': {'width': '728', 'height': '90'},
*     'lrec-small': {'width': '300', 'height': '50'},
*     'small-banner': {'width': '972', 'height': '92'},
*     'big-banner': {'width': '1336', 'height': '120'},
*     'full-banner': {'width': '728', 'height': '90'}
* }%}
* 
* {%   set ad_width = types[type]['width'] %}
* {%   set ad_height = types[type]['height'] %}
*/

	$types = array(
		'mrec' => array(
			'width' => '300',
			'height' => '250',
		),
		'lrec' => array(
			'width' => '300',
			'height' => '250',	
		),
	);

	$ad_width = $types[$content]['width'];
	$ad_height = $types[$content]['height'];

	$type = 'idol_bts_site_chats';

?>

<script>
    if (typeof window.ad_rnum === 'undefined') {
        window.ad_rnum = Math.random() * 1000000000000000000;
    }
    // var adSsid = fw_config();
    var adSsid = <?php echo $type; ?>,
    	ad_width  = <?php echo $ad_width; ?>,
    	ad_height = <?php echo $ad_height; ?>;


    ad_script = '<script src="http://FDM_AI.v.fwmrm.net/ad/g/1?nw=116457&amp;pvrn=' + ad_rnum + '&amp;csid=' + adSsid + '&amp;resp=ad;;ptgt=s&amp;envp=g_js&amp;slid=' + adSsid + '&amp;w=' + ad_width + 'amp;h=' + ad_height + '"></scr' + 'ipt>';
    //document.getElementById('{{ type }}').innerHTML = ad_script;
    document.write(ad_script);
</script>
<noscript>
    <iframe src="http://FDM_AI.v.fwmrm.net/ad/g/1?nw=116457&amp;pvrn=123456789&amp;csid={{ adCsid.default }}&amp;resp=ad;;ptgt=s&amp;envp=g_iframe&amp;slid={{ type }}&amp;w=<?php echo $ad_width; ?>&amp;h=<?php echo $ad_height; ?>" width="<?php echo $ad_width; ?>" height="<?php echo $ad_height; ?>" border="0" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>
</noscript>

<?php if ($content): ?>
  <div class="block-body">
    <?php print $content ?>
  </div>
<?php endif; ?>
