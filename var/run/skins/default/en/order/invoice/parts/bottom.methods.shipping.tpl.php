<div class="method-box">
  <strong class="method-title"><?php echo func_htmlspecialchars($this->t('Shipping method')); ?></strong>
  <?php if ($this->getShippingModifier()&&$this->get('shippingModifier')->getMethod()){?>
    <?php echo $this->getComplex('shippingModifier.method')->getName(); ?>
  <?php }elseif ($this->get('order')->getShippingMethodName()){?>
    <?php echo $this->t($this->get('order')->getShippingMethodName()); ?>
  <?php }else{ ?>
    <?php echo func_htmlspecialchars($this->t('n/a')); ?>
  <?php }?>

  <?php if (!($this->getComplex('order.trackingNumbers')->isEmpty())): ?><div class="tracking-number-box" >
    <strong class="method-title"><?php echo func_htmlspecialchars($this->t('Tracking numbers')); ?></strong>
    <ul class="tracking-number-list">
      <?php $number = isset($this->number) ? $this->number : null; $_foreach_var = $this->getComplex('order.trackingNumbers'); if (isset($_foreach_var)) { $this->numberArraySize=count($_foreach_var); $this->numberArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->number){ $this->numberArrayPointer++; ?><li ><?php echo func_htmlspecialchars($this->get('number')->getValue()); ?></li>
<?php } $this->number = $number; ?>
    </ul>
  </div><?php endif; ?>
</div>
