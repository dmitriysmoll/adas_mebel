<?php if ($this->get('order')->getShippingStatus()): ?><td class="shipping-status" >
  <br />
  <strong><?php echo func_htmlspecialchars($this->t('Shipping status')); ?>:</strong>
  <?php echo $this->getComplex('order.shippingStatus')->getCustomerName(); ?>
</td><?php endif; ?>
