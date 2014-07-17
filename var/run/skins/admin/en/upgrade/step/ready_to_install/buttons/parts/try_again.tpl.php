<?php if (!($this->isNextStepAvailable())):
  $this->getWidget(array('label' => $this->t('Check again'), 'style' => 'main-button', 'location' => $this->buildURL('upgrade','check_integrity')), '\XLite\View\Button\Link')->display();
endif; ?>
