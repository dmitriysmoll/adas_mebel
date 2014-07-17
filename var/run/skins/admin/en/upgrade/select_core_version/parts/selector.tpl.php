<select name="version">
<?php $data = isset($this->data) ? $this->data : null; $_foreach_var = $this->getCoreVersionsList(); if (isset($_foreach_var)) { $this->dataArraySize=count($_foreach_var); $this->dataArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->version => $this->data){ $this->dataArrayPointer++; ?><option ><?php echo func_htmlspecialchars($this->get('version')); ?></option>
<?php } $this->data = $data; ?>
</select>
