<?php if ($this->isEstimate()): ?><div  class="estimate-methods">
  <h3><?php echo func_htmlspecialchars($this->t('Choose shipping method')); ?></h3>

  <?php $this->getWidget(array(), '\XLite\View\Form\Cart\ShippingEstimator\Change', 'change')->display(); ?>

    <?php if ($this->get('modifier')->getRates()){?>
      <?php $this->getWidget(array(), '\XLite\View\ShippingList')->display(); ?>

      <div class="buttons main">
        <?php $this->getWidget(array('label' => 'Save'), '\XLite\View\Button\Submit')->display(); ?>
      </div>
    <?php }else{ ?>
      <p class="error"><?php echo func_htmlspecialchars($this->t('Shipping methods are not available')); ?></p>
    <?php }?>

  <?php $this->getWidget(array('end' => '1'), null, 'change')->display(); ?>

</div><?php endif; ?>
