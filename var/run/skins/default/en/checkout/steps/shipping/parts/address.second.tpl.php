<?php if ($this->isShippingEnabled()):
  $this->getWidget(array(), 'XLite\View\Checkout\BillingAddress')->display();
endif; ?>
