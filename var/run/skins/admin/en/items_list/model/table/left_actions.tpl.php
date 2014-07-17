<?php $tpl = isset($this->tpl) ? $this->tpl : null; $_foreach_var = $this->getLeftActions(); if (isset($_foreach_var)) { $this->tplArraySize=count($_foreach_var); $this->tplArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->i => $this->tpl){ $this->tplArrayPointer++; ?><div  class="<?php echo func_htmlspecialchars($this->getActionCellClass($this->get('i'),$this->get('tpl'))); ?>"><?php $this->display($this->get('tpl')); ?></div>
<?php } $this->tpl = $tpl; ?>
<div class="separator"></div>
