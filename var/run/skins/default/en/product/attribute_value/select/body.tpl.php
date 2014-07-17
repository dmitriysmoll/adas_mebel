<span class="title"><?php echo func_htmlspecialchars($this->getComplex('attribute.name')); ?></span>
<select class="form-control" name="<?php echo func_htmlspecialchars($this->getName()); ?>" data-attribute-id="<?php echo func_htmlspecialchars($this->getComplex('attribute.id')); ?>">
  <?php $v = isset($this->v) ? $this->v : null; $_foreach_var = $this->getAttrValue(); if (isset($_foreach_var)) { $this->vArraySize=count($_foreach_var); $this->vArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->v){ $this->vArrayPointer++; ?><option  <?php if ($this->isSelectedValue($this->get('v'))) { echo 'selected="selected"'; } ?> value="<?php echo func_htmlspecialchars($this->getComplex('v.id')); ?>"><?php echo func_htmlspecialchars($this->getOptionTitle($this->get('v'))); ?><?php echo $this->getModifierTitle($this->get('v')); ?></option>
<?php } $this->v = $v; ?>
</select>
