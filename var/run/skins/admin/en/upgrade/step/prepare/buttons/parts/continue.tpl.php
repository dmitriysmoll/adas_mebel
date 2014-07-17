<?php if ($this->isNextStepAvailable()):
  $this->getWidget(array('style' => 'main-button', 'label' => $this->t('Continue')), '\XLite\View\Button\Submit')->display();
endif; ?>
