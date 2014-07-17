<label class="inline-checkbox multiple-checkbox">
  <input type="checkbox" tabindex="-1" name="<?php echo func_htmlspecialchars($this->getName('multiple')); ?>"<?php if ($this->isMultiple()){?> checked="checked"<?php }?> />
  <span><?php echo func_htmlspecialchars($this->getMultipleTitle()); ?></span>
</label>
