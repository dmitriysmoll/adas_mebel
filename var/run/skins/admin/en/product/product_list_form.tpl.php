<?php if ($this->isSearchVisible()):
  $this->getWidget(array(), '\XLite\View\SearchPanel\Product\Admin\Main')->display();
endif; ?>


<?php $this->getWidget(array(), '\XLite\View\Form\ItemsList\Product\Main', 'products_form')->display(); ?>

  
  <?php $this->getWidget(array(), '\XLite\View\ItemsList\Model\Product\Admin\Search')->display(); ?>


<?php $this->getWidget(array('end' => '1'), null, 'products_form')->display(); ?>
