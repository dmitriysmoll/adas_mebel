<div class="estimator">

  <?php if ($this->isShippingEstimate()){?>

    <ul>
      <li>
        <span><?php echo func_htmlspecialchars($this->t('Shipping')); ?>:</span>
        <?php echo $this->getComplex('modifier.method')->getName(); ?> (<?php echo func_htmlspecialchars($this->getShippingCost()); ?>)
      </li>
      <li>
        <span><?php echo func_htmlspecialchars($this->t('Estimated for')); ?>:</span>
        <?php echo func_htmlspecialchars($this->getEstimateAddress()); ?>
      </li>
    </ul>

    <div class="link">
      <a href="<?php echo func_htmlspecialchars($this->buildURL('shipping_estimate')); ?>" class="estimate"><?php echo func_htmlspecialchars($this->t('Change method')); ?></a>
    </div>

  <?php }else{ ?>

    <?php $this->getWidget(array(), '\XLite\View\Form\Cart\ShippingEstimator\Open', 'shippingEstimator')->display(); ?>
      <div class="buttons">
        <?php $this->getWidget(array('label' => 'Estimate shipping cost', 'style' => 'estimate'), '\XLite\View\Button\Submit')->display(); ?>
      </div>
    <?php $this->getWidget(array('end' => '1'), null, 'shippingEstimator')->display(); ?>

  <?php }?>

</div>
