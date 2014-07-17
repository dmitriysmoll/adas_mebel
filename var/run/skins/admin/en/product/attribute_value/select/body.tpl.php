<div class="<?php echo func_htmlspecialchars($this->getStyle()); ?>">
  <?php $this->display('product/attribute_value/multiple_options.tpl'); ?>
  <ul class="values">
    <?php $attributeValue = isset($this->attributeValue) ? $this->attributeValue : null; $_foreach_var = $this->getAttrValues(); if (isset($_foreach_var)) { $this->attributeValueArraySize=count($_foreach_var); $this->attributeValueArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->id => $this->attributeValue){ $this->attributeValueArrayPointer++; ?><li  class="<?php echo func_htmlspecialchars($this->getValueStyle($this->get('id'))); ?>">
      <div class="value">
        <?php $this->getWidget(array('fieldName' => $this->getName('value',$this->get('id')), 'fieldOnly' => 'true', 'value' => $this->getFieldValue($this->get('attributeValue')), 'attribute' => $this->getAttribute(), 'attributes' => array('placeholder'=>$this->t('Attribute option'))), $this->getWidgetClass())->display(); ?>
        <?php $this->display('product/attribute_value/modifiers.tpl'); ?>
      </div>
      <div class="actions">
        <?php $this->getWidget(array('buttonName' => $this->getName('deleteValue',$this->get('id'))), 'XLite\View\Button\Remove')->display(); ?>
      </div>
    </li>
<?php } $this->attributeValue = $attributeValue; ?>
  </ul>
</div>
