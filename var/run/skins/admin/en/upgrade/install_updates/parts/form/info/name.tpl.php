<?php if ($this->isModule($this->get('entry'))): ?><li class="name" ><?php echo func_htmlspecialchars($this->get('entry')->getName()); ?></li><?php endif; ?>
<?php if (!($this->isModule($this->get('entry')))): ?><li class="name core" ><?php echo func_htmlspecialchars($this->get('entry')->getName()); ?></li><?php endif; ?>
