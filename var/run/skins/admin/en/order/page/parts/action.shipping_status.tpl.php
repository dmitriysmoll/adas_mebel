<div class="status shipping-status">
  <?php $this->getWidget(array('label' => 'Shipping status', 'fieldName' => 'shippingStatus', 'order' => $this->get('order')), '\XLite\View\FormField\Select\OrderStatus\Shipping')->display(); ?>
</div>
