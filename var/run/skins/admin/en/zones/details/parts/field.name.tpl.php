<?php $this->getWidget(array('fieldName' => 'zone_name', 'label' => $this->t('Zone name'), 'value' => $this->get('zone')->getZoneName(), 'required' => 'true', 'wrapperClass' => 'zone-name'), '\XLite\View\FormField\Input\Text')->display(); ?>