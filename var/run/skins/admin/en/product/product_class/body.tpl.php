<?php $this->getWidget(array(), 'XLite\View\Form\Product\Modify\ProductClass', 'update_product_class_form')->display(); ?>
<div class="dialog-block product-class clearfix">
  <div class="product-class-text">
    <?php if ($this->get('product')->getProductClass()){?>
      <?php echo func_htmlspecialchars($this->t('Product class')); ?>: <span class="dark"><?php echo func_htmlspecialchars($this->getComplex('product.productClass')->getName()); ?></span>
    <?php }else{ ?>
      <?php echo func_htmlspecialchars($this->t('No product class assigned')); ?>
    <?php }?>
    <?php $this->getWidget(array('label' => $this->t('Change')), '\XLite\View\Button\Submit')->display(); ?>
  </div>
  <div class="product-class-select">
    <?php echo func_htmlspecialchars($this->t('Product class')); ?>:
    <?php $this->getWidget(array('fieldName' => 'productClass', 'fieldOnly' => 'true', 'value' => $this->get('product')->getProductClass()), '\XLite\View\FormField\Select\ProductClassWithNew')->display(); ?>
    <input type="text" size="30" name="newProductClass" value="" placeholder="<?php echo func_htmlspecialchars($this->t('Name, e.g. Apparel')); ?>" />
    <?php $this->getWidget(array('label' => $this->t('Save changes')), '\XLite\View\Button\Submit')->display(); ?>
  </div>
  <a href="<?php echo func_htmlspecialchars($this->buildURL('product_classes')); ?>"><?php echo func_htmlspecialchars($this->t('Manage product classes')); ?></a>
  <?php if (!($this->get('product')->getProductClass())){?>
    <div class="clearfix"></div>
  <div class="no-product-class">
    <p><?php echo func_htmlspecialchars($this->t('If you have multiple products sharing the same set of attributes, it makes sence to make them to be of the same product type and create the attributes on the product type level.')); ?></p>
  </div>
  <?php }?>
</div>
<?php $this->getWidget(array('end' => '1'), null, 'update_product_class_form')->display(); ?>
