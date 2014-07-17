<?php if ($this->get('noSuchUser')): ?><tr >
  <td colspan="2">&nbsp;</td>
  <td class="error-message"><?php echo func_htmlspecialchars($this->t('No such user')); ?>: <?php echo func_htmlspecialchars($this->get('email')); ?></td>
</tr><?php endif; ?>
