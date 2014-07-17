<?php if ($this->isNextStepAvailable()):
  $this->getWidget(array('label' => $this->t('Install updates'), 'style' => 'main-button'), '\XLite\View\Button\Submit')->display();
endif; ?>
