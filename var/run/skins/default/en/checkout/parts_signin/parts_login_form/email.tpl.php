<tr><td class="email-field">
  <?php $this->getWidget(array('value' => $this->get('login'), 'required' => 'true', 'fieldName' => 'login', 'placeholder' => $this->t('Email'), 'label' => $this->t('Email'), 'fieldOnly' => 'true', 'fieldId' => 'login-email'), 'XLite\View\FormField\Input\Text\Email')->display(); ?>
</td></tr>
