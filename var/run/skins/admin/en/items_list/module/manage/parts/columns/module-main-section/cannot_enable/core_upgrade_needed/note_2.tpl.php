<?php if ($this->isCoreUpgradeAvailable($this->get('module')->getMajorVersion())): ?><div >
  <?php echo func_htmlspecialchars($this->t('Please')); ?> <a href="<?php echo func_htmlspecialchars($this->buildURL('upgrade','',array('version'=>$this->get('module')->getMajorVersion()))); ?>"><?php echo func_htmlspecialchars($this->t('upgrade core')); ?></a>
</div><?php endif; ?>
