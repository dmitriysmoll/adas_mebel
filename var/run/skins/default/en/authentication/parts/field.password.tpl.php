<tr>
  <td class="password-label"><label for="login-password"><?php echo func_htmlspecialchars($this->t('Password')); ?>:</label></td>
  <td class="password-field field">
    <?php $this->getWidget(array('required' => 'true', 'fieldName' => 'password', 'label' => $this->t('Password'), 'fieldOnly' => 'true', 'fieldId' => 'login-password'), 'XLite\View\FormField\Input\Password')->display(); ?>
  </td>
</tr>
