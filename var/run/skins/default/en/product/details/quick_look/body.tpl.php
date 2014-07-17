<div class="product-quicklook">
  <?php $this->getWidget(array('product' => $this->get('product'), 'className' => 'product-details box-product', 'validationEngine' => '1'), '\XLite\View\Form\Product\AddToCart', 'add_to_cart')->display(); ?>
    <?php $this->displayViewListContent('product.details.quicklook'); ?>
  <?php $this->getWidget(array('end' => '1'), null, 'add_to_cart')->display(); ?>

  <?php $this->displayViewListContent('product.details.quicklook.rotator'); ?>
</div>
