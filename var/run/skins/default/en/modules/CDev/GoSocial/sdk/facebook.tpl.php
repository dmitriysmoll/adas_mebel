<div id="fb-root"></div>
<script type="text/javascript">
//<![CDATA[
(function(d){
  var js, id = 'facebook-jssdk';
  if (d.getElementById(id)) {
    return;
  }
  js = d.createElement('script');
  js.id = id;
  js.async = true;
  js.src = "<?php echo $this->getSDKUrl(); ?>";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));
//]]>
</script>
