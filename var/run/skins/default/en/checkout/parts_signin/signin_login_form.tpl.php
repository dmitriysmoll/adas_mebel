<?php $this->getWidget(array(), '\XLite\View\Form\Login\Customer\Main', 'login_form')->display(); ?>
<table class="login-form">
  <?php $this->displayViewListContent('checkout.signin.form'); ?>
</table>
<?php $this->getWidget(array('end' => '1'), null, 'login_form')->display(); ?>
