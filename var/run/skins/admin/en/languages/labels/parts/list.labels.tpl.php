<?php if ($this->isSearchVisible()):
  $this->getWidget(array(), 'XLite\View\SearchPanel\Label\Main')->display();
endif; ?>

<?php $this->getWidget(array(), '\XLite\View\Form\Translations\Labels', 'labels_form')->display(); ?>
  <?php $this->getWidget(array(), '\XLite\View\ItemsList\Model\Translation\Labels')->display(); ?>
<?php $this->getWidget(array('end' => '1'), null, 'labels_form')->display(); ?>
