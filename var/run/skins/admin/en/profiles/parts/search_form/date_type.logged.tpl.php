<li class="date-type-l">
  <input type="radio" name="<?php echo func_htmlspecialchars($this->get('fieldName')); ?>" value="L" id="date_type_l" <?php if ($this->isDateTypeSelected('L')) { echo 'checked="checked"'; } ?> />
  <label for="date_type_l"><?php echo func_htmlspecialchars($this->t('Last logged in')); ?></label>
</li>
