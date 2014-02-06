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

	$ad_width = $types[$adtype]['width'];
	$ad_height = $types[$adtype]['height'];

	$type = 'idol_bts_site_chats';

?>

<!--<script>
    if (typeof window.ad_rnum === 'undefined') {
        window.ad_rnum = Math.random() * 1000000000000000000;
    }
    // var adSsid = fw_config();
    var adSsid = '<?php echo $type; ?>',
    	ad_width  = <?php echo $ad_width; ?>,
    	ad_height = <?php echo $ad_height; ?>;


    ad_script = '<script src="http://FDM_AI.v.fwmrm.net/ad/g/1?nw=116457&amp;pvrn=' + ad_rnum + '&amp;csid=idol_behindthescenes_dropdown_logo&amp;resp=ad;;ptgt=s&amp;envp=g_js&amp;slid=btslogo-header&amp;w=' + ad_width + 'amp;h=' + ad_height + '"></scr' + 'ipt>';

    document.write(ad_script);
</script>
<noscript>
    <iframe src="http://FDM_AI.v.fwmrm.net/ad/g/1?nw=116457&amp;pvrn=123456789&amp;csid={{ adCsid.default }}&amp;resp=ad;;ptgt=s&amp;envp=g_iframe&amp;slid={{ type }}&amp;w=<?php echo $ad_width; ?>&amp;h=<?php echo $ad_height; ?>" width="<?php echo $ad_width; ?>" height="<?php echo $ad_height; ?>" border="0" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>
</noscript>-->

<!--
<span id="<?php echo $type; ?>">
        <span id="<?php echo $ad_width; ?>x<?php echo $ad_height; ?>slot" class="_fwph">
            <form id="_fw_form_<?php echo $ad_width; ?>x<?php echo $ad_height; ?>slot" style="display:none">
                <input type="hidden" name="_fw_input_<?php echo $ad_width; ?>x<?php echo $ad_height; ?>slot" id="_fw_input_<?php echo $ad_width; ?>x<?php echo $ad_height; ?>slot" value="w=<?php echo $ad_width; ?>&amp;h=<?php echo $ad_height; ?>&amp;envp=g_js&amp;sflg=-nrpl;" />
            </form>
            <span id="_fw_container_<?php echo $ad_width; ?>x<?php echo $ad_height; ?>slot" class="_fwac"></span>
        </span>
    </span>
-->


<script>
function fw_config () {
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    },
        adSsid = {"desktop":"idol_home_site","mobile":"idol_home_mobile"},
        siteSection = '';

    if( typeof adSsid.mobile !== 'undefined' && isMobile.any() ) {
        siteSection =  adSsid.mobile;
    } else if ( typeof adSsid.desktop !== 'undefined' ) {
        siteSection =  adSsid.desktop;
    } else {
        siteSection =  adSsid;
    };

    return  {
        siteSection: siteSection
    }
}
</script>

<?php if ($adtype == 'lrec'): ?>

<div class="ad-lrec" style="text-align: center;">
    <span id="lrec">
        <span id="728x90slot" class="_fwph">
            <form id="_fw_form_728x90slot" style="display:none">
                <input type="hidden" name="_fw_input_728x90slot" id="_fw_input_728x90slot" value="w=728&amp;h=90&amp;envp=g_js&amp;sflg=-nrpl;">
            </form>
            <span id="_fw_container_728x90slot" class="_fwac"><span style="display:inline-block; vertical-align:top; margin:0px 0px 0px 0px;"><iframe id="_fw_frame_728x90slot" width="728" height="90" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
<script language="javascript" type="text/javascript" id="_fw_container_js_728x90slot">//<!-- 
  (function(){
    var fw_scope_window = window;
    var fw_scope = document;
    var fw_content = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\n<html>\n<head>\n\t<title>Advertisement</title>\n\t<scr" + "ipt type=\"text/javascr" + "ipt\">window._fw_page_url = \"http://local.americanidol.com/\";</scr" + "ipt>\n</head>\n<body style=\"margin:0px;background-color:transparent;\"><scr" + "ipt src=\"http://ad.doubleclick.net/adj/N4390.httpOX2602/B7971448.75;sz=728x90;pc=[TPAS_ID];click=http://1c6e2.v.fwmrm.net/ad/l/1?s=b042\&n=116450%3B116450\&t=1391664290878279001\&f=\&r=116450\&adid=3597986\&reid=2476377\&arid=0\&auid=\&cn=defaultClick\&et=c\&_cc=\&tpos=\&sr=0\&cr=;ord=2058770077?\" type=\"text/javascr" + "ipt\" language=\"javascr" + "ipt\"></scr" + "ipt>\n</body>\n</html>";
    var targetFrame = fw_scope.getElementById("_fw_frame_728x90slot");
    var targetFrameDoc = (targetFrame.contentWindow) ? targetFrame.contentWindow : (targetFrame.contentDocument.document) ? targetFrame.contentDocument.document : targetFrame.contentDocument;
    var writeContent = function(doc, content) {
      var timeout = 0;
      if(navigator.userAgent.match(/MSIE/) || navigator.userAgent.match(/Opera/)){
        timeout = 7500;
      } else if(navigator.userAgent.match(/Gecko\//)) {
        timeout = 30000;
      }
      targetFrameDoc.document.open();
      targetFrameDoc.document.write(fw_content);
      if (timeout>0) { setTimeout(function(){if (!!targetFrameDoc.document) targetFrameDoc.document.close()}, timeout); }
      else if (!timeout) { targetFrameDoc.document.close(); }
    }
    var hasNoSandbox = false;
    if ('' == "never"){
    	hasNoSandbox = true;
    }
    else if ('' == "always"){
    	hasNoSandbox = false;
    }
    else{
    	hasNoSandbox = fw_content.indexOf("<!-"+"-nosandbox-"+"->") >= 0 || fw_content.indexOf("<!-"+"-noecho-"+"->") >= 0 || !!'';
    }
    var slotContentKey = "_fw_slot_content_728x90slot";
    var proxyHtml = window._fw_xd_proxy ? window._fw_xd_proxy : "/_fw_xd_frame.html";
    if(hasNoSandbox) {
      try {
        if(!navigator.userAgent.match(/Gecko\//)) { 
					writeContent(targetFrameDoc, fw_content, 7500);
				} else {
					targetFrame.onload = function(){
						writeContent(targetFrameDoc, fw_content, 7500);
					};
				}
      } catch (e) {
        fw_scope_window[slotContentKey] = fw_content;
        targetFrame.src = proxyHtml + "?slid=728x90slot&domain=" + document.domain;
      }
    } else {
      fw_scope_window[slotContentKey] = fw_content;
      try {
        targetFrameDoc.document.write('<script> window.name = parent["' + slotContentKey + '"] + "<!--" + Math.random() + "-->"; window.location.replace("http://m2.feiwei.tv/g/lib/template/sandbox.html");<\/script>');
      } catch(e) {
        if((/MSIE 6/i.test(navigator.userAgent) && document.domain == fw_scope_window.location.hostname) ||
            navigator.userAgent.match(/Gecko\//)) {
        } else {
          targetFrame.src = proxyHtml + "?sandbox&slid=728x90slot&domain=" + document.domain;
        }
      }
    }
  })();
// --></script>
</span>
<img src="http://1c6e2.v.fwmrm.net/ad/l/1?metr=0&amp;s=b042&amp;n=116450%3B116450&amp;t=1391664290878279001&amp;f=&amp;r=116450&amp;adid=3597986&amp;reid=2476377&amp;arid=0&amp;auid=&amp;cn=defaultImpression&amp;et=i&amp;_cc=3597986,2476377,,,1391664290,1&amp;tpos=&amp;init=1&amp;cr=" border="0" width="1" height="1" style="border:0;height:1px;width:1px;position:absolute;top:0;left:0;z-index:999;background-color:transparent;background-image:none;padding:0;margin:0;FILTER:Alpha(Opacity=0);"></span>
        </span>
    </span>
</div>

<?php elseif ($adtype == 'mrec'): ?>

<div class="ad-mrec">
    <span id="mrec">
        <span id="300x250slot" class="_fwph">
            <form id="_fw_form_300x250slot" style="display:none">
                <input type="hidden" name="_fw_input_300x250slot" id="_fw_input_300x250slot" value="w=300&amp;h=250&amp;envp=g_js&amp;sflg=-nrpl;">
            </form>
            <span id="_fw_container_300x250slot" class="_fwac"><span style="display:inline-block; vertical-align:top; margin:0px 0px 0px 0px;"><iframe id="_fw_frame_300x250slot" width="300" height="250" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
<script language="javascript" type="text/javascript" id="_fw_container_js_300x250slot">//<!-- 
  (function(){
    var fw_scope_window = window;
    var fw_scope = document;
    var fw_content = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\n<html>\n<head>\n\t<title>Advertisement</title>\n\t<scr" + "ipt type=\"text/javascr" + "ipt\">window._fw_page_url = \"http://local.americanidol.com/\";</scr" + "ipt>\n</head>\n<body style=\"margin:0px;background-color:transparent;\"><scr" + "ipt src=\"http://ad.doubleclick.net/adj/N3016.americanidol.com/B8003512.106317824;sz=300x250;click=http://1c6e2.v.fwmrm.net/ad/l/1?s=b042\&n=116450%3B116450\&t=1391664290878279001\&f=\&r=116450\&adid=3788758\&reid=2560598\&arid=0\&auid=\&cn=defaultClick\&et=c\&_cc=\&tpos=\&sr=0\&cr=;ord=727786533?\" type=\"text/javascr" + "ipt\" language=\"javascr" + "ipt\"></scr" + "ipt>\n</body>\n</html>";
    var targetFrame = fw_scope.getElementById("_fw_frame_300x250slot");
    var targetFrameDoc = (targetFrame.contentWindow) ? targetFrame.contentWindow : (targetFrame.contentDocument.document) ? targetFrame.contentDocument.document : targetFrame.contentDocument;
    var writeContent = function(doc, content) {
      var timeout = 0;
      if(navigator.userAgent.match(/MSIE/) || navigator.userAgent.match(/Opera/)){
        timeout = 7500;
      } else if(navigator.userAgent.match(/Gecko\//)) {
        timeout = 30000;
      }
      targetFrameDoc.document.open();
      targetFrameDoc.document.write(fw_content);
      if (timeout>0) { setTimeout(function(){if (!!targetFrameDoc.document) targetFrameDoc.document.close()}, timeout); }
      else if (!timeout) { targetFrameDoc.document.close(); }
    }
    var hasNoSandbox = false;
    if ('' == "never"){
    	hasNoSandbox = true;
    }
    else if ('' == "always"){
    	hasNoSandbox = false;
    }
    else{
    	hasNoSandbox = fw_content.indexOf("<!-"+"-nosandbox-"+"->") >= 0 || fw_content.indexOf("<!-"+"-noecho-"+"->") >= 0 || !!'';
    }
    var slotContentKey = "_fw_slot_content_300x250slot";
    var proxyHtml = window._fw_xd_proxy ? window._fw_xd_proxy : "/_fw_xd_frame.html";
    if(hasNoSandbox) {
      try {
        if(!navigator.userAgent.match(/Gecko\//)) { 
					writeContent(targetFrameDoc, fw_content, 7500);
				} else {
					targetFrame.onload = function(){
						writeContent(targetFrameDoc, fw_content, 7500);
					};
				}
      } catch (e) {
        fw_scope_window[slotContentKey] = fw_content;
        targetFrame.src = proxyHtml + "?slid=300x250slot&domain=" + document.domain;
      }
    } else {
      fw_scope_window[slotContentKey] = fw_content;
      try {
        targetFrameDoc.document.write('<script> window.name = parent["' + slotContentKey + '"] + "<!--" + Math.random() + "-->"; window.location.replace("http://m2.feiwei.tv/g/lib/template/sandbox.html");<\/script>');
      } catch(e) {
        if((/MSIE 6/i.test(navigator.userAgent) && document.domain == fw_scope_window.location.hostname) ||
            navigator.userAgent.match(/Gecko\//)) {
        } else {
          targetFrame.src = proxyHtml + "?sandbox&slid=300x250slot&domain=" + document.domain;
        }
      }
    }
  })();
// --></script>
</span>
<img src="http://1c6e2.v.fwmrm.net/ad/l/1?metr=0&amp;s=b042&amp;n=116450%3B116450&amp;t=1391664290878279001&amp;f=&amp;r=116450&amp;adid=3788758&amp;reid=2560598&amp;arid=0&amp;auid=&amp;cn=defaultImpression&amp;et=i&amp;_cc=3788758,2560598,,,1391664290,1&amp;tpos=&amp;init=1&amp;cr=" border="0" width="1" height="1" style="border:0;height:1px;width:1px;position:absolute;top:0;left:0;z-index:999;background-color:transparent;background-image:none;padding:0;margin:0;FILTER:Alpha(Opacity=0);"></span>
        </span>
    </span>
</div>

<?php endif; ?>

