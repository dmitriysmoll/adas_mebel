<?php if ($this->isAllowEntitySwitch($this->get('entity'))):
  $this->getWidget(array('idx' => $this->get('idx'), 'entity' => $this->get('entity'), 'column' => $this->get('column'), 'itemsList' => $this->getSelf(), 'fieldName' => $this->getComplex('switcherField.name'), 'fieldParams' => $this->getComplex('switcherField.params')), $this->getComplex('switcherField.class'))->display();
endif; ?>
