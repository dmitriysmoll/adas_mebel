<?php if ($this->isDisplayAdd2CartButton()): ?><div  class="add-to-cart-button">
  <?php if (!($this->getComplex('product.inventory')->isOutOfStock())):
  $this->getWidget(array('label' => 'Add to cart', 'style' => 'regular-main-button add2cart add-to-cart productid-'.$this->getComplex('product.product_id')), '\XLite\View\Button\Submit')->display();
endif; ?>
</div><?php endif; ?>
