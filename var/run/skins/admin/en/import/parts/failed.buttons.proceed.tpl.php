<?php if (!($this->isDisplayProceedButton())):
  $this->getWidget(array('jsCode' => 'return false;', 'label' => $this->t('Proceed import'), 'style' => 'main-button disabled'), 'XLite\View\Button\Link')->display();
endif; ?>
<?php if ($this->isDisplayProceedButton()):
  $this->getWidget(array('location' => $this->buildURL('import','proceed'), 'label' => $this->t('Proceed import'), 'style' => 'main-button'), 'XLite\View\Button\Link')->display();
endif; ?>
