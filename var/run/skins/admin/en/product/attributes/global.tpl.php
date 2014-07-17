<?php $this->getWidget(array(), 'XLite\View\Product\Details\Admin\ProductClass')->display(); ?>

<?php $this->getWidget(array('className' => 'attrs'), 'XLite\View\Form\Product\Modify\Attributes', 'update_attributes_form')->display(); ?>
  <?php if ($this->getComplex('product.productClass')){?>
  <div class="dialog-block attribute-classes">
    <?php $this->getWidget(array('productClass' => $this->getComplex('product.productClass')), 'XLite\View\Product\Details\Admin\Attributes')->display(); ?>
  </div>
  <?php }?>
  <div class="dialog-block">
    <?php $this->getWidget(array(), 'XLite\View\Product\Details\Admin\Attributes')->display(); ?>
  </div>
  <?php $this->getWidget(array(), '\XLite\View\StickyPanel\Product\Attributes')->display(); ?>
<?php $this->getWidget(array('end' => '1'), null, 'update_attributes_form')->display(); ?>

<?php $this->getWidget(array(), 'XLite\View\Product\Details\Admin\CreateBox')->display(); ?>
