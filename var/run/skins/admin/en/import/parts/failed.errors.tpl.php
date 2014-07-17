<h3><?php echo func_htmlspecialchars($this->getTitle()); ?></h3>
<?php $file = isset($this->file) ? $this->file : null; $_foreach_var = $this->getFiles(); if (isset($_foreach_var)) { $this->fileArraySize=count($_foreach_var); $this->fileArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->file){ $this->fileArrayPointer++; ?><ul  class="errors">
  <li class="title">
    <i class="icon-file-alt"></i> 
    <?php echo func_htmlspecialchars($this->getComplex('file.file')); ?>
    <?php if ($this->getComplex('file.countW')): ?><span  class="count-w"><?php echo func_htmlspecialchars($this->getComplex('file.countW')); ?></span><?php endif; ?>
    <?php if ($this->getComplex('file.countE')): ?><span  class="count-e"><?php echo func_htmlspecialchars($this->getComplex('file.countE')); ?></span><?php endif; ?>
  </li>
  <?php $error = isset($this->error) ? $this->error : null; $_foreach_var = $this->getErrors($this->getComplex('file.file')); if (isset($_foreach_var)) { $this->errorArraySize=count($_foreach_var); $this->errorArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->error){ $this->errorArrayPointer++; ?><li  class="clearfix type-<?php echo func_htmlspecialchars($this->getComplex('error.type')); ?>">
    <div class="message"><?php echo func_htmlspecialchars($this->getErrorMessage($this->get('error'))); ?></div>
    <div class="text"><?php echo func_htmlspecialchars($this->getErrorText($this->get('error'))); ?></div>
  </li>
<?php } $this->error = $error; ?>
</ul>
<?php } $this->file = $file; ?>
<?php if ($this->hasErrors()): ?><div  class="much-errors"><?php echo func_htmlspecialchars($this->t('Critical errors have been detected in the files you are trying to import. Please correct the errors and try again.')); ?></div><?php endif; ?>
<?php if ($this->isBroken()): ?><div  class="much-errors"><?php echo func_htmlspecialchars($this->t('Import has been cancelled.')); ?></div><?php endif; ?>
