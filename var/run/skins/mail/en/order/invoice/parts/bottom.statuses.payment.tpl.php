<?php if ($this->get('order')->getPaymentStatus()): ?><td class="payment-status" >
  <br />
  <strong><?php echo func_htmlspecialchars($this->t('Payment status')); ?>:</strong>
  <?php echo $this->getComplex('order.paymentStatus')->getCustomerName(); ?>
</td><?php endif; ?>
