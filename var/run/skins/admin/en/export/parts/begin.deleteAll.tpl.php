<?php if (!($this->isCompletedSection())): ?><div class="delete-all" >
  <a href="<?php echo func_htmlspecialchars($this->buildURL('export','deleteFiles')); ?>"><i class="icon-trash"></i> <span><?php echo func_htmlspecialchars($this->t('Delete all files')); ?></span></a>
</div><?php endif; ?>
