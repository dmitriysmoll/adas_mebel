<?php if ($this->get('entry')->isInstalled()): ?><td  class="old-version"><?php echo func_htmlspecialchars($this->get('entry')->getVersionOld()); ?></td><?php endif; ?>
<?php if (!($this->get('entry')->isInstalled())): ?><td  class="old-version">&mdash;</td><?php endif; ?>
