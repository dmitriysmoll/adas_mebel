<?php if ($this->isUpgradeEntryAvailable()):
  $this->getWidget(array('moduleId' => $this->getModuleId(), 'label' => $this->t('Install add-on'), 'style' => 'submit-button main-button', 'disabled' => 'true'), '\XLite\View\Button\Addon\SelectInstallationType')->display();
endif; ?>
