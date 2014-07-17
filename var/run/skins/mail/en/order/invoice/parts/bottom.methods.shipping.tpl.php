<div style="position: absolute;bottom: 20px;font-size: 15px;">
  <strong style="color: #000;font-size: 20px;padding-bottom: 6px;display: block;font-weight: normal;"><?php echo func_htmlspecialchars($this->t('Shipping method')); ?></strong>
  <?php if ($this->getShippingModifier()&&$this->get('shippingModifier')->getMethod()){?>
    <?php echo $this->getComplex('shippingModifier.method')->getName(); ?>
  <?php }elseif ($this->get('order')->getShippingMethodName()){?>
    <?php echo $this->t($this->get('order')->getShippingMethodName()); ?>
  <?php }else{ ?>
    <?php echo func_htmlspecialchars($this->t('n/a')); ?>
  <?php }?>
</div>
