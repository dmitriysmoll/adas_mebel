<div class="status payment-status">
  <?php $this->getWidget(array('label' => 'Payment status', 'fieldName' => 'paymentStatus', 'order' => $this->get('order')), '\XLite\View\FormField\Select\OrderStatus\Payment')->display(); ?>
</div>
