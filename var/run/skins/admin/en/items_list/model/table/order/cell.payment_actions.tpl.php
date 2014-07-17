<?php if ($this->hasPaymentActions($this->get('entity'))): ?><div  class="payment-actions">
  <?php $this->getWidget(array('order' => $this->get('entity'), 'unitsFilter' => $this->getTransactionsFilter()), '\XLite\View\Order\Details\Admin\PaymentActions')->display(); ?>
</div><?php endif; ?>
