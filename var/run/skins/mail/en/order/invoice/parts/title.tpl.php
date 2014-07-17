<h2 style="font-size: 40px;margin-top: 11px;padding-left: 3px;margin: 18px 0;color: #69a4c9;font-weight: normal;"><?php echo func_htmlspecialchars($this->t('Invoice X',array('id'=>$this->get('order')->getOrderNumber()))); ?></h2>
<div style="color: #333333;font-size: 20px;padding-left: 3px;padding-top: 1px;width: 100%;max-width: 700px;">
  <?php echo func_htmlspecialchars($this->formatTime($this->get('order')->getDate())); ?>
  <span style="float: right; color: #000;font-size: 20px;font-weight: bold;"><?php echo func_htmlspecialchars($this->t('Grand total')); ?>: <?php echo func_htmlspecialchars($this->formatPrice($this->get('order')->getTotal(),$this->get('order')->getCurrency())); ?></span>
</div>
