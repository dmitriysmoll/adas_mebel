<div class="block block-block">
  <?php if ($this->getHead()): ?><h2 ><?php echo func_htmlspecialchars($this->t($this->getHead())); ?></h2><?php endif; ?>
  <div class="content"><?php $this->display($this->getBody()); ?></div>
</div>
