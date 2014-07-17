<?php if ($this->get('entry')->isEnabled()): ?><li class="enabled" ><?php echo func_htmlspecialchars($this->t('enabled')); ?></li><?php endif; ?>
<?php if (!($this->get('entry')->isEnabled())): ?><li class="disabled" ><?php echo func_htmlspecialchars($this->t('now disabled')); ?></li><?php endif; ?>
