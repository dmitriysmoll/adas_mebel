<?php if ($this->getPageData()): ?><ul  class="list">

  <?php $order = isset($this->order) ? $this->order : null; $_foreach_var = $this->getPageData(); if (isset($_foreach_var)) { $this->orderArraySize=count($_foreach_var); $this->orderArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->order){ $this->orderArrayPointer++; ?><li  class="order-<?php echo func_htmlspecialchars($this->getComplex('order.order_id')); ?>">

    <div class="order-body-item">

      <div class="title">

        <ul class="order-spec-wrapper-list">
        <li class="order-spec-wrapper">
          <ul class="order-spec">
            <li class="order-switcher"><i data-interval="0" data-toggle="collapse" id="order-<?php echo func_htmlspecialchars($this->getComplex('order.orderId')); ?>-action" data-target="#order-<?php echo func_htmlspecialchars($this->getComplex('order.orderId')); ?>" class="fa fa-plus-square-o"></i></li>
            <li class="order-number"><a href="<?php echo func_htmlspecialchars($this->buildURL('order','',array('order_number'=>$this->get('order')->getOrderNumber()))); ?>">#<?php echo func_htmlspecialchars($this->get('order')->getOrderNumber()); ?></a></li>
            <li class="date"><?php echo func_htmlspecialchars($this->formatTime($this->getComplex('order.date'))); ?></li>
            <li class="order-break-line"></li>
            <li class="order-total"><span class="order-spec-label total-label"><?php echo func_htmlspecialchars($this->t('Total')); ?>:</span><span class="order-spec-value total-value"><?php echo func_htmlspecialchars($this->formatPrice($this->get('order')->getTotal(),$this->get('order')->getCurrency())); ?></span></li>
            <li class="order-items-count"><span class="order-spec-label order-items-count-label"><?php echo func_htmlspecialchars($this->t('Items')); ?>:</span><span class="order-spec-value order-items-count-value"><?php echo func_htmlspecialchars($this->get('order')->countQuantity()); ?></span></li>
          </ul>
        </li>

        <li class="order-part-wrapper">

        <div class="order-statuses payment-<?php echo func_htmlspecialchars($this->getComplex('order.paymentStatus.code')); ?> shipping-<?php echo func_htmlspecialchars($this->getComplex('order.shippingStatus.code')); ?>">
          <ul class="statuses">
            <li class="order-payment-status">
            <?php $this->getWidget(array('order' => $this->get('order'), 'useWrapper' => 'true'), '\XLite\View\OrderStatus\Payment')->display(); ?>
            </li>
            <li class="order-shipping-status">
            <?php $this->getWidget(array('order' => $this->get('order'), 'useWrapper' => 'true'), '\XLite\View\OrderStatus\Shipping')->display(); ?>
            </li>
          </ul>
        </div>

        <div class="order-spec-separator"></div>

        <div class="order-actions">
          <ul class="actions-list">
            <?php if ($this->showReorder($this->get('order'))): ?><li  class="reorder">
              <?php $this->getWidget(array('label' => 'Re-order', 'location' => $this->buildURL('cart','add_order',array('order_number'=>$this->getComplex('order.orderNumber')))), '\XLite\View\Button\Link')->display(); ?>
            </li><?php endif; ?>
          </ul>
        </div>

        </li>
        </ul>

      </div> 

      <div id="order-<?php echo func_htmlspecialchars($this->getComplex('order.orderId')); ?>" class="order-body-items-list collapse">
        <div class="shipping-method-spec">
          <ul class="shipping-method-name">
            <li class="shipping-method-wrapper">
              <span class="shipping-method-label"><?php echo func_htmlspecialchars($this->t('Shipping method')); ?>:</span><span class="shipping-method-name"><?php echo func_htmlspecialchars($this->get('order')->getShippingMethodName()); ?></span>
            </li>
            <?php if (!($this->getComplex('order.trackingNumbers')->isEmpty())): ?><li  class="tracking-number-wrapper">
              <span class="tracking-number-label"><?php echo func_htmlspecialchars($this->t('Tracking numbers')); ?>:</span>

              <div class="tracking-number-box">
              <?php $_foreach_var = $this->getComplex('order.trackingNumbers'); if (isset($_foreach_var)) { $this->numberArraySize=count($_foreach_var); $this->numberArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->number){ $this->numberArrayPointer++; ?>

              <span class="tracking-item">
              <?php if ($this->get('order')->getTrackingInformationURL($this->getComplex('number.value'))){?>
              <?php if ($this->get('order')->isTrackingInformationForm($this->getComplex('number.value'))){?>
              <form method="<?php echo $this->get('order')->getTrackingInformationMethod($this->getComplex('number.value')); ?>" action="<?php echo func_htmlspecialchars($this->get('order')->getTrackingInformationURL($this->getComplex('number.value'))); ?>" target="_blank" >
              <?php $_foreach_var = $this->get('order')->getTrackingInformationParams($this->getComplex('number.value')); if (isset($_foreach_var)) { $this->valueArraySize=count($_foreach_var); $this->valueArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->name => $this->value){ $this->valueArrayPointer++; ?>
              <input type="hidden" name="<?php echo func_htmlspecialchars($this->get('name')); ?>" value="<?php echo func_htmlspecialchars($this->get('value')); ?>" />
              <?php }?>
              <span><?php echo func_htmlspecialchars($this->getComplex('number.value')); ?> - </span>
              <button type="submit"><?php echo func_htmlspecialchars($this->t('Track package')); ?></button>
              </form>
              <?php }else{ ?>
              <span><?php echo func_htmlspecialchars($this->getComplex('number.value')); ?> - </span>
              <a href="<?php echo func_htmlspecialchars($this->get('order')->getTrackingInformationURL($this->getComplex('number.value'))); ?>" target="_blank"><?php echo func_htmlspecialchars($this->t('Track package')); ?></a>
              <?php }?>
              <?php }else{ ?>
              <?php echo func_htmlspecialchars($this->getComplex('number.value')); ?>
              <?php }?>
              </span><br />

              <?php }?>
              </div>
            </li><?php endif; ?>

          </ul>
        </div>
        <?php $this->getWidget(array('full' => 'true', 'order' => $this->get('order')), '\XLite\View\OrderItemsShort')->display(); ?>
      <div>
    </div>
  </li>
<?php } $this->order = $order; ?>
</ul><?php endif; ?>
