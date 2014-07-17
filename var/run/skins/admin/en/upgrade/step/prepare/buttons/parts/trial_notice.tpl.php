<?php if ($this->displayTrialNotice()): ?><div  class="update-trial-notice">
  <?php echo $this->t('You can install these updates after purchasing and activating your X-Cart 5 license key',array('URL'=>$this->getPurchaseURL())); ?>
</div><?php endif; ?>
