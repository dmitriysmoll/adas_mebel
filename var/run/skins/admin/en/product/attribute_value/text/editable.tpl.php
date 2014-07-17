<label class="inline-checkbox editable-checkbox">
  <input type="hidden" name="<?php echo func_htmlspecialchars($this->getName('editable')); ?>" value="0" />
  <input type="checkbox" name="<?php echo func_htmlspecialchars($this->getName('editable')); ?>"<?php if ($this->isEditable()){?> checked="checked"<?php }?> />
  <span><?php echo func_htmlspecialchars($this->t('editable')); ?></span>
</label>
