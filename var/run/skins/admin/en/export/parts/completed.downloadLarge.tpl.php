<?php if ($this->getDownloadLargeFiles()): ?><div class="files large" >
  <p><?php echo func_htmlspecialchars($this->t('The following files are too large to be included in the archive')); ?>:</p>
  <ul>
    <?php $file = isset($this->file) ? $this->file : null; $_foreach_var = $this->getDownloadLargeFiles(); if (isset($_foreach_var)) { $this->fileArraySize=count($_foreach_var); $this->fileArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->path => $this->file){ $this->fileArrayPointer++; ?><li  class="file">
      <i class="icon-file-alt"></i>
      <a href="<?php echo func_htmlspecialchars($this->buildURL('export','download',array('path'=>$this->get('path')))); ?>"><?php echo func_htmlspecialchars($this->get('file')->getFilename()); ?></a>
      <span class="size"><?php echo func_htmlspecialchars($this->formatSize($this->get('file')->getSize())); ?></span>
    </li>
<?php } $this->file = $file; ?>
  </ul>
</div><?php endif; ?>
