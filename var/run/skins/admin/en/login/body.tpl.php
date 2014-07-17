<div class="login-box-wrapper">
  <div class="login-box">

    <h2><?php echo func_htmlspecialchars($this->t('Please identify yourself')); ?></h2>

    <?php if ($this->get('additional_note')): ?><div class="additional-note" >
      <?php echo str_replace('"', '&quot;',$this->get('additional_note')); ?>
    </div><?php endif; ?>

    <form id="login_form" action="<?php echo func_htmlspecialchars($this->buildURL('login')); ?>" method="post" name="login_form">
      <input type="hidden" name="target" value="login" />
      <input type="hidden" name="action" value="login" />
      <?php $this->getWidget(array(), '\XLite\View\FormField\Input\FormId')->display(); ?>

      <table>
      <tr>
        <th><?php echo func_htmlspecialchars($this->t('Email')); ?>:</th>
        <td><input type="text" name="login" value="<?php echo str_replace('"', '&quot;',$this->get('login')); ?>" size="32" maxlength="128" /></td>
      </tr>
      <tr>
        <th><?php echo func_htmlspecialchars($this->t('Password')); ?>:</th>
        <td><input type="password" name="password" value="<?php echo str_replace('"', '&quot;',$this->get('password')); ?>" size="32" maxlength="128" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          <?php $this->getWidget(array('label' => 'Log in', 'style' => 'main-button'), '\XLite\View\Button\Submit')->display(); ?>
          <div class="forgot-password">
            <a href="<?php echo func_htmlspecialchars($this->buildURL('recover_password')); ?>"><?php echo func_htmlspecialchars($this->t('Forgot password?')); ?></a>
          </div>
        </td>
      </tr>
      </table>
    </form>

  </div>
</div>
