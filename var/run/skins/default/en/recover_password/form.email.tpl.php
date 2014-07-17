<tr>
  <td class="email-label label"><label for="email"><?php echo func_htmlspecialchars($this->t('Email')); ?></label></td>
  <td class="star"></td>
  <td class="email-field field">
    <?php $this->getWidget(array('value' => $this->get('email'), 'required' => 'true', 'fieldName' => 'email', 'label' => $this->t('Email'), 'fieldOnly' => 'true'), 'XLite\View\FormField\Input\Text\Email')->display(); ?>
  </td>
</tr>
