<?php if ($this->get('product')->getJavascript()): ?><script  type="text/javascript">
$(document).ready(
  function() {
    $('form[name="add_to_cart"]').submit(
      function() {
        <?php echo func_htmlspecialchars($this->get('product')->getJavascript()); ?>
      }
    );
  }
);
</script><?php endif; ?>
