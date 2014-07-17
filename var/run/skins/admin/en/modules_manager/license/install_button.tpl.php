<?php if (!($this->isUpgradeEntryAvailable())):
  $this->getWidget(array('label' => $this->t('Install add-on'), 'style' => 'submit-button main-button', 'disabled' => 'true'), '\XLite\View\Button\Submit')->display();
endif; ?>
