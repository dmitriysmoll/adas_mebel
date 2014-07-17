<?php if ($this->getAttributeGroup()){?>
<li><h3><?php echo func_htmlspecialchars($this->getTitle()); ?></h3>
  <ul>
<?php }?>
<?php $a = isset($this->a) ? $this->a : null; $_foreach_var = $this->getAttrList(); if (isset($_foreach_var)) { $this->aArraySize=count($_foreach_var); $this->aArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->a){ $this->aArrayPointer++; ?><li >
  <div><strong><?php echo func_htmlspecialchars($this->getComplex('a.name')); ?></strong></div>
  <span class="<?php echo func_htmlspecialchars($this->getComplex('a.class')); ?>"><?php echo $this->flexyModifierCall('nl2br', $this->getComplex('a.value')); ?></span>
</li>
<?php } $this->a = $a; ?>
<?php if ($this->getAttributeGroup()){?>
  </ul>
</li>
<?php }?>
