<h2 class="invoice"><?php echo func_htmlspecialchars($this->t('Invoice X',array('id'=>$this->get('order')->getOrderNumber()))); ?></h2>
<div class="subhead">
  <?php echo func_htmlspecialchars($this->formatTime($this->get('order')->getDate())); ?>
  <span><?php echo func_htmlspecialchars($this->t('Grand total')); ?>: <?php echo func_htmlspecialchars($this->formatPrice($this->get('order')->getTotal(),$this->get('order')->getCurrency())); ?></span>
</div>
