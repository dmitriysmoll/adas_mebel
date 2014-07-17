<?php if ($this->get('product')->isAvailable()):
  $this->getWidget(array('product' => $this->get('product'), 'className' => 'add-to-cart'), '\XLite\View\Form\Product\AddToCart', 'add_to_cart_'.$this->getComplex('product.product_id'))->display();
endif; ?>
  <?php $this->getWidget(array('style' => 'product-add2cart', 'label' => 'Add to cart'), '\XLite\View\Button\Submit')->display(); ?>
<?php $this->getWidget(array('end' => '1'), null, 'add_to_cart_'.$this->getComplex('product.product_id'))->display(); ?>
