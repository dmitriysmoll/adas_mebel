<div class="<?php echo func_htmlspecialchars($this->getStyle()); ?>">
  <?php $this->display('product/attribute_value/text/editable.tpl'); ?>
  <?php $this->getWidget(array('fieldName' => $this->getName(), 'maxHeight' => '100', 'rows' => '3', 'fieldOnly' => 'true', 'value' => $this->getComplex('attrValue.value')), '\XLite\View\FormField\Textarea\Simple')->display(); ?>
</div>
