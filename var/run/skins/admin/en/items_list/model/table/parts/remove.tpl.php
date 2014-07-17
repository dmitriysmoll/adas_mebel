<?php if ($this->isAllowEntityRemove($this->get('entity'))):
  $this->getWidget(array('buttonName' => $this->getRemoveDataPrefix().'['.$this->get('entity')->getUniqueIdentifier().']'), 'XLite\View\Button\Remove')->display();
endif; ?>
