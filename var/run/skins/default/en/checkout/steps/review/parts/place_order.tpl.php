<?php $this->getWidget(array('className' => 'place'), '\XLite\View\Form\Checkout\Place', 'placeOrder')->display(); ?>

  <?php $this->displayViewListContent('checkout.review.selected.placeOrder'); ?>

<?php $this->getWidget(array('end' => '1'), null, 'placeOrder')->display(); ?>
