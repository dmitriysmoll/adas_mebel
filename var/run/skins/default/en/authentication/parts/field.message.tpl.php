<?php if (!($this->get('valid'))): ?><tr >
    <td>&nbsp;</td>
    <td class="error-message">
      <?php echo func_htmlspecialchars($this->t('Invalid login or password')); ?>
      <a href="<?php echo func_htmlspecialchars($this->buildURL('recover_password')); ?>"><?php echo func_htmlspecialchars($this->t('Forgot password')); ?>?</a>
    </td>
</tr><?php endif; ?>
