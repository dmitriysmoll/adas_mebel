<?php if (!($this->getComplex('product.inventory')->isOutOfStock())):
  $this->getWidget(array('style' => 'add-to-cart product-add2cart productid-'.$this->getComplex('product.product_id'), 'label' => 'Add to cart', 'jsCode' => 'return false;'), '\XLite\View\Button\Image')->display();
endif; ?>
<?php if ($this->getComplex('product.inventory')->isOutOfStock()):
  $this->getWidget(array('style' => 'out-of-stock', 'label' => 'Out of stock', 'jsCode' => 'return false;'), '\XLite\View\Button\Image')->display();
endif; ?>
