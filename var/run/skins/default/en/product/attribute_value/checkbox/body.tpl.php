<label<?php if ($this->getComplex('attrValues.1.defaultValue')){?> class="checked"<?php }?>>
  <div>
    <input type="hidden" name="<?php echo func_htmlspecialchars($this->getName()); ?>" value="<?php echo func_htmlspecialchars($this->getComplex('attrValues.0.id')); ?>" />
    <input type="checkbox" name="<?php echo func_htmlspecialchars($this->getName()); ?>" data-attribute-id="<?php echo func_htmlspecialchars($this->getComplex('attribute.id')); ?>" value="<?php echo func_htmlspecialchars($this->getComplex('attrValues.1.id')); ?>" <?php if ($this->isCheckedValue()) { echo 'checked="checked"'; } ?> data-unchecked="<?php echo func_htmlspecialchars($this->getComplex('attrValues.0.id')); ?>" />
  </div>
  <?php echo func_htmlspecialchars($this->getTitle()); ?><?php echo $this->getModifierTitle(); ?>
</label>
