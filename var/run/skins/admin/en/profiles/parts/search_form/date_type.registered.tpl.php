<li class="date-type-r">
  <input type="radio" name="<?php echo func_htmlspecialchars($this->get('fieldName')); ?>" value="R" id="date_type_r" <?php if ($this->isDateTypeSelected('R')) { echo 'checked="checked"'; } ?> />
  <label for="date_type_r"><?php echo func_htmlspecialchars($this->t('Registered')); ?></label>
</li>
