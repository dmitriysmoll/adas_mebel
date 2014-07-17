<select id="<?php echo func_htmlspecialchars($this->getFieldId()); ?>" name="<?php echo func_htmlspecialchars($this->getName()); ?>"<?php echo $this->getAttributesCode(); ?>>
  <option value=""><?php echo func_htmlspecialchars($this->t('Select one')); ?></option>
  <option value="-1" <?php if ($this->getValue()==-1) { echo 'selected="selected"'; } ?>><?php echo func_htmlspecialchars($this->t('Other')); ?></option>
  <?php $state = isset($this->state) ? $this->state : null; $_foreach_var = $this->getOptions(); if (isset($_foreach_var)) { $this->stateArraySize=count($_foreach_var); $this->stateArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->state){ $this->stateArrayPointer++; ?><option  value="<?php echo str_replace('"', '&quot;',$this->getComplex('state.state_id')); ?>" <?php if ($this->getComplex('state.state_id')==$this->getValue()) { echo 'selected="selected"'; } ?>><?php echo $this->getComplex('state.state'); ?></option>
<?php } $this->state = $state; ?>
</select>
