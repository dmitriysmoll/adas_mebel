<div class="<?php echo func_htmlspecialchars($this->getBlockClasses()); ?>">
  <?php if ($this->getHead()): ?><h2 ><?php echo func_htmlspecialchars($this->t($this->getHead())); ?></h2><?php endif; ?>
  <div class="content"><?php $this->display($this->getBody()); ?></div>
</div>
