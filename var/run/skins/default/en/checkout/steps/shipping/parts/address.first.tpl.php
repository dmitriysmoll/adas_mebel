<?php if ($this->isShippingEnabled()){?>
  <?php $this->getWidget(array(), 'XLite\View\Checkout\ShippingAddress')->display(); ?>
<?php }else{ ?>
  <?php $this->getWidget(array(), 'XLite\View\Checkout\BillingAddress')->display(); ?>
<?php }?>
