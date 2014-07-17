<?php if ($this->hasField('zipcode')): ?><li class="zipcode" >
  <?php $this->getWidget(array('fieldName' => 'destination_zipcode', 'value' => $this->getZipcode(), 'label' => $this->t('Zip code'), 'required' => 'true'), '\XLite\View\FormField\Input\Text')->display(); ?>
</li><?php endif; ?>
