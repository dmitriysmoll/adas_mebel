<?php $this->getWidget(array(), '\XLite\View\Form\ItemsList\Order\Recent', 'orders_form')->display(); ?>
  <?php $this->getWidget(array(), '\XLite\View\ItemsList\Model\Order\Admin\Recent')->display(); ?>
<?php $this->getWidget(array('end' => '1'), null, 'orders_form')->display(); ?>
