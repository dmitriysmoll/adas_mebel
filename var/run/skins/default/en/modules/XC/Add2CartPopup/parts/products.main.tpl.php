<?php if ($this->isProductsListEnabled()): ?><div  class="products-list-box">

  <?php if ($this->isDisplayRequired(array('','add2_cart_popup'))):
  $this->getWidget(array('product' => $this->get('product')), '\XLite\Module\XC\Add2CartPopup\View\Products')->display();
endif; ?>

  <?php $this->displayViewListContent('add2cart_popup.products.ext'); ?>

</div><?php endif; ?>
