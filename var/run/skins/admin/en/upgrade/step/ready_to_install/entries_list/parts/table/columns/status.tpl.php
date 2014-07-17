<?php if ($this->get('entry')->isValid()): ?><td  class="status enabled"></td><?php endif; ?>
<?php if (!($this->get('entry')->isValid())): ?><td  class="status disabled"><?php echo func_htmlspecialchars($this->t('Failure')); ?></td><?php endif; ?>
