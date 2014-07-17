<?php $_foreach_var = $this->getAttributesWidgets(); if (isset($_foreach_var)) { $this->aWidgetArraySize=count($_foreach_var); $this->aWidgetArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->aWidget){ $this->aWidgetArrayPointer++; ?>
  <?php echo func_htmlspecialchars($this->get('aWidget')->display()); ?>
<?php }?>
