<?php $this->displayViewListContent('customer.signin'); ?>

<?php $this->getWidget(array(), '\XLite\View\Form\Login\Customer\Main', 'login_form')->display(); ?>

<table class="login-form">
  <?php $this->displayViewListContent('customer.signin.popup.fields'); ?>
</table>

<?php $this->getWidget(array('end' => '1'), null, 'login_form')->display(); ?>

<?php $this->displayViewListContent('customer.signin.after'); ?>
