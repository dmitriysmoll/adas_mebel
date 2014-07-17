<?php if ($this->hasField('country_code')): ?><li class="country" >
  <?php $this->getWidget(array('fieldName' => 'destination_country', 'value' => $this->getCountryCode(), 'stateSelectorId' => 'destination-state', 'stateInputId' => 'destination-custom-state', 'label' => $this->t('Country'), 'required' => 'true'), '\XLite\View\FormField\Select\Country')->display(); ?>
</li><?php endif; ?>
