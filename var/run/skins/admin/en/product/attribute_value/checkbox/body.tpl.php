<div class="<?php echo func_htmlspecialchars($this->getStyle()); ?>">
  <?php $this->display('product/attribute_value/multiple_options.tpl'); ?>
  <div class="single-option">
    <?php $this->getWidget(array('fieldName' => $this->getName(), 'fieldOnly' => 'true', 'value' => $this->getSelectValue()), '\XLite\View\FormField\Select\YesNoEmpty')->display(); ?>
  </div>
  <ul class="multiple-options">
    <?php $attributeValue = isset($this->attributeValue) ? $this->attributeValue : null; $_foreach_var = $this->getAttrValues(); if (isset($_foreach_var)) { $this->attributeValueArraySize=count($_foreach_var); $this->attributeValueArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->id => $this->attributeValue){ $this->attributeValueArrayPointer++; ?><li  class="clearfix line value">
      <div class="value">
        <?php $this->getWidget(array('fieldOnly' => 'true', 'value' => $this->getLabel($this->get('id')), 'attributes' => array('readonly'=>'readonly'), 'wrapperClass' => 'attribute-value-checkbox'), '\XLite\View\FormField\Input\Text')->display(); ?>
        <?php $this->display('product/attribute_value/modifiers.tpl'); ?>
      </div>
    </li>
<?php } $this->attributeValue = $attributeValue; ?>
  </ul>
</div>
