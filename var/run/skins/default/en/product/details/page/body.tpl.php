<div class="product-details product-info-<?php echo func_htmlspecialchars($this->get('product')->getProductId()); ?> box-product">
  <?php $this->getWidget(array('product' => $this->get('product'), 'className' => 'product-details', 'validationEngine' => '1'), '\XLite\View\Form\Product\AddToCart', 'add_to_cart')->display(); ?>
    <?php $this->displayViewListContent('product.details.page'); ?>
  <?php $this->getWidget(array('end' => '1'), null, 'add_to_cart')->display(); ?>
</div>
