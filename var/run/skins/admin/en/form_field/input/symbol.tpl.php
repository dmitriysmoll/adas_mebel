<span class="input-field-wrapper <?php echo func_htmlspecialchars($this->getWrapperClass()); ?>">
  <?php echo func_htmlspecialchars($this->displayCommentedData($this->getCommentedData())); ?>
  <input<?php echo $this->getAttributesCode(); ?> />
  <span class="symbol text"><?php echo func_htmlspecialchars($this->t($this->getSymbol())); ?></span>
</span>
