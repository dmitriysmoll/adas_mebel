<?php $this->getWidget(array(), 'XLite\View\Form\Product\Modify\Attributes', 'update_attributes_form')->display(); ?>

  <div class="dialog-block">
    <?php $this->getWidget(array('personalOnly' => 'true'), 'XLite\View\Product\Details\Admin\Attributes')->display(); ?>
  </div>
  <?php $this->getWidget(array(), '\XLite\View\StickyPanel\Product\Attributes')->display(); ?>

<?php $this->getWidget(array('end' => '1'), null, 'update_attributes_form')->display(); ?>

<?php $this->getWidget(array(), 'XLite\View\Product\Details\Admin\CreateBox')->display(); ?>
