<?php $this->getWidget(array('className' => 'add-offline-method validationEngine'), 'XLite\View\Form\Payment\Method\Admin\AddOfflineMethod', 'add_offline_method')->display(); ?>

  <ul class="table">
    <li><?php $this->getWidget(array('fieldName' => 'name', 'label' => $this->t('Name'), 'required' => 'true'), 'XLite\View\FormField\Input\Text')->display(); ?></li>
    <li><?php $this->getWidget(array('fieldName' => 'instruction', 'label' => $this->t('Payment instructions'), 'help' => $this->t('These instructions will appear below the order invoice on the page which customers see after they confirm their order.')), 'XLite\View\FormField\Textarea\Simple')->display(); ?></li>
    <li><?php $this->getWidget(array('fieldName' => 'description', 'label' => $this->t('Description'), 'help' => $this->t('Here you can define how your payment methods will look in customer area.')), 'XLite\View\FormField\Textarea\Simple')->display(); ?></li>
  </ul>

  <?php $this->getWidget(array('label' => $this->t('Add'), 'style' => 'action'), 'XLite\View\Button\Submit')->display(); ?>

<?php $this->getWidget(array('end' => '1'), null, 'add_offline_method')->display(); ?>
