<div style="position: absolute;bottom: 20px;font-size: 15px;">
  <strong style="color: #000;font-size: 20px;padding-bottom: 6px;display: block;font-weight: normal;"><?php echo func_htmlspecialchars($this->t('Payment method')); ?></strong>
  <?php if ($this->get('order')->getVisiblePaymentMethods()){?>
    <?php $_foreach_var = $this->get('order')->getVisiblePaymentMethods(); if (isset($_foreach_var)) { $this->mArraySize=count($_foreach_var); $this->mArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->m){ $this->mArrayPointer++; ?>
      <?php echo $this->get('m')->getTitle(); ?><br />
    <?php }?>
  <?php }elseif ($this->get('order')->getPaymentMethodName()){?>
    <?php echo $this->t($this->get('order')->getPaymentMethodName()); ?><br />
  <?php }else{ ?>
    <?php echo func_htmlspecialchars($this->t('n/a')); ?><br />
  <?php }?>
</div>
