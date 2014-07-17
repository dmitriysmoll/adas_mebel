<script type="text/javascript">
var _gaq = _gaq || [];
<?php $_foreach_var = $this->getGaqOptions(); if (isset($_foreach_var)) { $this->rowArraySize=count($_foreach_var); $this->rowArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->row){ $this->rowArrayPointer++; ?>
_gaq.push([<?php echo $this->get('row'); ?>]);
<?php }?>
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
</script>
