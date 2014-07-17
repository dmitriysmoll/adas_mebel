<?php $this->getWidget(array('formTarget' => 'recover_password', 'formAction' => 'recover_password', 'className' => 'recovery-form use-inline-error'), 'XLite\View\Form', 'recoveryForm')->display(); ?>

  <table class="recover-password-form">
    <?php $this->displayViewListContent('recover.password.fields'); ?>
  </table>

<?php $this->getWidget(array('end' => '1'), null, 'recoveryForm')->display(); ?>
