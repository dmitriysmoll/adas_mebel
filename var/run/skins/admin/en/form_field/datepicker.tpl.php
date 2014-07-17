<span class="date-picker-widget">
  <?php echo func_htmlspecialchars($this->displayCommentedData($this->getDatePickerOptions())); ?>
  <input type="text" id="<?php echo func_htmlspecialchars($this->getFieldId()); ?>" name="<?php echo func_htmlspecialchars($this->getParam('fieldName')); ?>" value="<?php echo func_htmlspecialchars($this->getValueAsString()); ?>" class="date-picker <?php echo func_htmlspecialchars($this->getClassName()); ?>" />
</span>
