<div class="minicart-box">

  <div class="cart-tray">
    <div class="tray-area">

      <div class="centered-tray-box">
        <div class="tray-status"><?php echo $this->t('_X_ items',array('count'=>$this->get('cart')->countQuantity())); ?></div>
      </div>
    </div>
  </div>

  <?php $this->displayViewListContent('add2cart_popup.minicart.ext'); ?>

</div>
