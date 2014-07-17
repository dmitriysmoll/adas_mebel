<?php $this->getWidget(array('className' => 'estimator'), '\XLite\View\Form\Cart\ShippingEstimator\Destination', 'destination')->display(); ?>

  <ul class="form">
    <?php $this->displayViewListContent('shippingEstimator.address'); ?>
  </ul>

  <?php if ($this->isEstimate()): ?><div  class="buttons">
    <?php $this->getWidget(array('label' => 'Apply destination'), '\XLite\View\Button\Submit')->display(); ?>
  </div><?php endif; ?>

  <?php if (!($this->isEstimate())): ?><div  class="buttons main">
    <?php $this->getWidget(array('label' => 'Apply destination'), '\XLite\View\Button\Submit')->display(); ?>
  </div><?php endif; ?>

<?php $this->getWidget(array('end' => '1'), null, 'destination')->display(); ?>
