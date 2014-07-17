<div class="method">
  <strong><?php echo func_htmlspecialchars($this->t('Shipping method')); ?>:</strong>
  <?php if ($this->getShippingModifier()&&$this->get('shippingModifier')->getMethod()){?><?php echo func_htmlspecialchars($this->get('/if')); ?>
    <span><?php echo $this->getComplex('shippingModifier.method')->getName(); ?> (<?php echo func_htmlspecialchars($this->formatPrice($this->getShippingCost(),$this->get('order')->getCurrency())); ?>)</span>
  <?php }elseif ($this->get('order')->getShippingMethodName()){?>
    <span><?php echo $this->t($this->get('order')->getShippingMethodName()); ?> (<?php echo func_htmlspecialchars($this->formatPrice($this->getShippingCost(),$this->get('order')->getCurrency())); ?>)</span>
  <?php }else{ ?>
    <span><?php echo func_htmlspecialchars($this->t('n/a')); ?></span>
  <?php }?>
</div>
