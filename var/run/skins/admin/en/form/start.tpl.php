<form<?php $_foreach_var = $this->getFormAttributes(); if (isset($_foreach_var)) { $this->paramValueArraySize=count($_foreach_var); $this->paramValueArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->paramName => $this->paramValue){ $this->paramValueArrayPointer++; ?> <?php echo func_htmlspecialchars($this->get('paramName')); ?>="<?php echo func_htmlspecialchars($this->get('paramValue')); ?>"<?php }?>>
<fieldset>
  <?php $paramValue = isset($this->paramValue) ? $this->paramValue : null; $_foreach_var = $this->getFormParams(); if (isset($_foreach_var)) { $this->paramValueArraySize=count($_foreach_var); $this->paramValueArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->paramName => $this->paramValue){ $this->paramValueArrayPointer++; ?><input  type="hidden" name="<?php echo func_htmlspecialchars($this->get('paramName')); ?>" value="<?php echo func_htmlspecialchars($this->get('paramValue')); ?>" />
<?php } $this->paramValue = $paramValue; ?>
</fieldset>