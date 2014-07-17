<tr>
  <td class="email-label"><label for="login-email"><?php echo func_htmlspecialchars($this->t('Email')); ?>:</label></td>
  <td class="email-field field">
    <?php $this->getWidget(array('value' => $this->get('login'), 'required' => 'true', 'fieldName' => 'login', 'label' => $this->t('Email'), 'fieldOnly' => 'true', 'fieldId' => 'login-email'), 'XLite\View\FormField\Input\Text\Email')->display(); ?>
  </td>
</tr>
