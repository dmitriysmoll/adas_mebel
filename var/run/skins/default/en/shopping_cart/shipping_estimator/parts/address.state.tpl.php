<?php if ($this->hasField('state_id')): ?><li class="state" >
  <?php $this->getWidget(array('fieldName' => 'destination_state', 'value' => $this->getState(), 'style' => 'field-required', 'label' => $this->t('State'), 'required' => 'true'), '\XLite\View\FormField\Select\State')->display(); ?>
</li><?php endif; ?>

<?php if ($this->hasField('state_id')): ?><li class="state" >
  <?php $this->getWidget(array('fieldName' => 'destination_custom_state', 'value' => $this->getOtherState(), 'label' => $this->t('State')), '\XLite\View\FormField\Input\Text')->display(); ?>
</li><?php endif; ?>
