<div class="or"><?php echo func_htmlspecialchars($this->t('or')); ?></div>

<?php $this->getWidget(array('label' => 'Import language from CSV file', 'object' => 'language', 'fileObject' => 'file'), '\XLite\View\Button\FileSelector')->display(); ?>

<?php if ($this->isImportActive()):
  $this->getWidget(array(), '\XLite\View\Button\ImportLanguage')->display();
endif; ?>
