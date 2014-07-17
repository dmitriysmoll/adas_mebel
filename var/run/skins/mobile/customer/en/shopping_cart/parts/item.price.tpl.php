<div class="price-row">

  <span class="price-parts product-price-value">
    <?php $this->getWidget(array('surcharge' => $this->get('item')->getNetPrice(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?>
  </span>
  <span class="price-parts multi">
    &times;
  </span>

</div>
