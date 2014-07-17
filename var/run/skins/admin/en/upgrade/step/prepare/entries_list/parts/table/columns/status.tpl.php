<?php if ($this->get('entry')->isEnabled()){?>
  <td class="status">&nbsp;</td>
<?php }else{ ?>
  <?php if ($this->get('entry')->isInstalled()): ?><td  class="status disabled"><?php echo func_htmlspecialchars($this->t('Now disabled')); ?></td><?php endif; ?>
  <?php if (!($this->get('entry')->isInstalled())): ?><td  class="status not-installed"><?php echo func_htmlspecialchars($this->t('Will be installed')); ?></td><?php endif; ?>
<?php }?>
