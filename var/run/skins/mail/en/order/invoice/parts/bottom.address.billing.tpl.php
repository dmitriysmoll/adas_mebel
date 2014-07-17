<strong style="color: #000;font-size: 20px;font-weight: normal;padding-bottom: 3px;"><?php echo func_htmlspecialchars($this->t('Billing address')); ?></strong>
<ul style="padding-top: 12px;list-style: none;margin: 0;padding-left: 0;">
  <?php $field = isset($this->field) ? $this->field : null; $_foreach_var = $this->getAddressSectionData($this->get('baddress')); if (isset($_foreach_var)) { $this->fieldArraySize=count($_foreach_var); $this->fieldArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->idx => $this->field){ $this->fieldArrayPointer++; ?><li  style="padding-right: 4px;white-space: nowrap;" class="<?php echo func_htmlspecialchars($this->getComplex('field.css_class')); ?> address-field">
    <span style="font-size: 14px;line-height: 20px;padding-top: 8px;color: #333;font-style: italic;"><?php echo func_htmlspecialchars($this->t($this->getComplex('field.title'))); ?>:</span>
    <span style="font-size: 14px;line-height: 20px;padding-top: 8px;color: #000;"><?php echo func_htmlspecialchars($this->getComplex('field.value')); ?></span>
  </li>
<?php } $this->field = $field; ?>
</ul>
<p style="line-height: 18px;padding-top: 0px;margin: 0px;font-size: 14px;">
  <span style="color: #333;font-style: italic;"><?php echo func_htmlspecialchars($this->t('E-mail')); ?></span>:
  <a style="font-size: 14px;color: #000;" href="mailto:<?php echo func_htmlspecialchars($this->getComplex('order.profile.login')); ?>"><?php echo func_htmlspecialchars($this->getComplex('order.profile.login')); ?></a>
</p>
