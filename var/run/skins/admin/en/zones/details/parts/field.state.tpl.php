<?php $this->getWidget(array('fieldName' => 'zone_states', 'label' => 'States', 'labelFrom' => 'All states', 'labelTo' => 'Selected states', 'value' => $this->get('zone')->getZoneStates(), 'wrapperClass' => 'zone-states'), '\XLite\View\FormField\Listbox\State')->display(); ?>