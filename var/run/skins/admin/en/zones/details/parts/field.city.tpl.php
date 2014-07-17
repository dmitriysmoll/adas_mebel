<?php if ($this->isCityMasksEditEnabled()):
  $this->getWidget(array('value' => $this->get('zone')->getZoneCities(1), 'label' => 'City masks', 'rows' => '5', 'cols' => '70', 'fieldName' => 'zone_cities', 'help' => $this->t('Zone city masks help')), '\XLite\View\FormField\Textarea\Simple')->display();
endif; ?>
