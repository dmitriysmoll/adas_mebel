<tr class="payment-status">
  <td class="title"><?php echo func_htmlspecialchars($this->t('Payment status')); ?>:</td>
  <td height="10">
    <?php $this->getWidget(array('fieldOnly' => 'true', 'fieldName' => 'status', 'value' => $this->getCondition('paymentStatus'), 'allOption' => '1'), '\XLite\View\FormField\Select\OrderStatus\Payment')->display(); ?>
  </td>
  <td>&nbsp;</td>
</tr>
