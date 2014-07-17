<tr>
  <td colspan="2">&nbsp;</td>
  <td class="buttons">
    <?php $this->getWidget(array(), '\XLite\View\Button\Submit')->display(); ?>
    <a href="<?php echo func_htmlspecialchars($this->buildURL('login')); ?>" class="back-login log-in" data-login="<?php echo func_htmlspecialchars($this->get('email')); ?>"><?php echo func_htmlspecialchars($this->t('Back to Login form')); ?></a>
  </td>
</tr>
