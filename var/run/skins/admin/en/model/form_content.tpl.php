<?php $file = isset($this->file) ? $this->file : null; $_foreach_var = array('header','content','footer'); if (isset($_foreach_var)) { $this->fileArraySize=count($_foreach_var); $this->fileArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->file){ $this->fileArrayPointer++; ?><?php $this->display($this->getDir().'/'.$this->getFormTemplate($this->get('file'))); ?>
<?php } $this->file = $file; ?>