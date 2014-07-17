<span class="input-field-wrapper <?php echo func_htmlspecialchars($this->getWrapperClass()); ?>">
  <?php echo func_htmlspecialchars($this->displayCommentedData($this->getCommentedData())); ?>
  <input<?php echo $this->getAttributesCode(); ?> />
  <div class="combobox-select"><i class="fa fa-caret-down"></i></div>
</span>
