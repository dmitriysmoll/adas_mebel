<div class="signin-wrapper">

  <div class="signin-anonymous-wrapper">
    <div class="signin-anonymous-title"><?php echo func_htmlspecialchars($this->t('New to our store?',array('our store'=>$this->getStoreName()))); ?></div>
    <div class="signin-anonymous-box"><?php $this->displayViewListContent('signin-anonymous-title'); ?></div>
  </div>
  
  <div class="or-line">
    <div class="line"></div>
    <div class="or-box">
      <div class="or"><?php echo func_htmlspecialchars($this->t('or')); ?></div>
    </div>
  </div>

  <div class="signin-login-wrapper">
    <div class="signin-login-title"><?php echo func_htmlspecialchars($this->t('Existing Customer?')); ?></div>
    <div class="login-box"><?php $this->displayViewListContent('customer.checkout.signin'); ?></div>
  </div>

</div>
