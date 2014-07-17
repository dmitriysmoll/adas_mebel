<?php if ($this->isAddressMasksEditEnabled()):
  $this->getWidget(array('value' => $this->get('zone')->getZoneAddresses(1), 'label' => 'Address masks', 'rows' => '5', 'cols' => '70', 'fieldName' => 'zone_addresses', 'help' => $this->t('Zone address masks help')), '\XLite\View\FormField\Textarea\Simple')->display();
endif; ?>
