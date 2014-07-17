<?php $this->getWidget(array(), 'XLite\View\Form\Order\Operations', 'operations')->display(); ?>
  <?php $this->displayViewListContent('order.operations'); ?>
  <?php $this->getWidget(array(), 'XLite\View\StickyPanel\Order\Admin\Info')->display(); ?>
<?php $this->getWidget(array('end' => '1'), null, 'operations')->display(); ?>
