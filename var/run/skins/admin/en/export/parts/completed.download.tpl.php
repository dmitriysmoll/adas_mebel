<div class="files std">
  <h3><?php echo func_htmlspecialchars($this->getBoxTitle()); ?></h3>
  <ul>
    <?php $file = isset($this->file) ? $this->file : null; $_foreach_var = $this->getDownloadFiles(); if (isset($_foreach_var)) { $this->fileArraySize=count($_foreach_var); $this->fileArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->path => $this->file){ $this->fileArrayPointer++; ?><li  class="file">
      <i class="icon-file-alt"></i>
      <a href="<?php echo func_htmlspecialchars($this->buildURL('export','download',array('path'=>$this->get('path')))); ?>"><?php echo func_htmlspecialchars($this->get('file')->getFilename()); ?></a>
      <span class="size"><?php echo func_htmlspecialchars($this->formatSize($this->get('file')->getSize())); ?></span>
    </li>
<?php } $this->file = $file; ?>
    <li class="sum">
      <?php if ($this->isBracketVisible()): ?><div class="bracket" ></div><?php endif; ?>
      <div class="icon"></div>

<div class="pack">
  <h4><?php echo func_htmlspecialchars($this->t('Download all files in a single archive')); ?></h4>
  <p>(<?php echo func_htmlspecialchars($this->t('X, including images and file attachments',array('size'=>$this->formatSize($this->getPackedSize())))); ?>)</p>
  <ul>
    <?php $type = isset($this->type) ? $this->type : null; $_foreach_var = $this->getAllowedPackTypes(); if (isset($_foreach_var)) { $this->typeArraySize=count($_foreach_var); $this->typeArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->type){ $this->typeArrayPointer++; ?><li >
      <?php $this->getWidget(array('location' => $this->buildURL('export','pack',array('type'=>$this->get('type'))), 'label' => $this->get('type')), 'XLite\View\Button\Link')->display(); ?>
    </li>
<?php } $this->type = $type; ?>
  </ul>
</div>


    </li>
  </ul>
</div>
