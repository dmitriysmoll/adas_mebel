<strong class="title"><?php echo func_htmlspecialchars($this->t('Billing address')); ?></strong>
<ul class="address-section billing-address-section">
  <?php $field = isset($this->field) ? $this->field : null; $_foreach_var = $this->getAddressSectionData($this->get('baddress')); if (isset($_foreach_var)) { $this->fieldArraySize=count($_foreach_var); $this->fieldArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->idx => $this->field){ $this->fieldArrayPointer++; ?><li  class="<?php echo func_htmlspecialchars($this->getComplex('field.css_class')); ?> address-field">
    <span class="address-title"><?php echo func_htmlspecialchars($this->t($this->getComplex('field.title'))); ?>:</span>
    <span class="address-field"><?php echo func_htmlspecialchars($this->getComplex('field.value')); ?></span>
    <span class="address-comma">,</span>
  </li>
<?php } $this->field = $field; ?>
</ul>
<p class="email"><?php echo func_htmlspecialchars($this->t('E-mail')); ?>: <a href="mailto:<?php echo func_htmlspecialchars($this->getComplex('order.profile.login')); ?>"><?php echo func_htmlspecialchars($this->getComplex('order.profile.login')); ?></a></p>
