<div class="btn-dropdown btn-group">
  <button <?php if ($this->hasName()){?> name="<?php echo func_htmlspecialchars($this->getName()); ?>"<?php }?><?php if ($this->hasValue()){?> value="<?php echo func_htmlspecialchars($this->getValue()); ?>"<?php }?> type="button" class="main btn btn-default<?php if ($this->getStyle()){?> <?php echo func_htmlspecialchars($this->getStyle()); ?><?php }?>">
    <span><?php echo func_htmlspecialchars($this->t($this->getButtonLabel())); ?></span>
  </button>

  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only"></span>
  </button>

<?php if ($this->getAdditionalButtons()){?>
<ul class="dropdown-menu" role="menu">
  <?php $button = isset($this->button) ? $this->button : null; $_foreach_var = $this->getAdditionalButtons(); if (isset($_foreach_var)) { $this->buttonArraySize=count($_foreach_var); $this->buttonArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->button){ $this->buttonArrayPointer++; ?><li ><?php echo $this->get('button')->display(); ?></li>
<?php } $this->button = $button; ?>
</ul>
<?php }?>
</div>
