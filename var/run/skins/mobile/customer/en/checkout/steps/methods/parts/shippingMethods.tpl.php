<?php if ($this->isShippingAvailable()): ?><div class="substep step-shipping-methods" >
  <h3><span class="bullet"><?php echo func_htmlspecialchars($this->getSubstepNumber('shippingMethods')); ?></span><?php echo func_htmlspecialchars($this->t('Delivery methods')); ?></h3>
  <?php $this->getWidget(array(), '\XLite\View\Checkout\ShippingMethodsList')->display(); ?>
</div><?php endif; ?>
