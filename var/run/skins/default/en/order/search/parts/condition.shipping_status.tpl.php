<tr class="shipping-status">
  <td class="title"><?php echo func_htmlspecialchars($this->t('Shipping status')); ?>:</td>
  <td height="10">
    <?php $this->getWidget(array('fieldOnly' => 'true', 'fieldName' => 'status', 'value' => $this->getCondition('shippingStatus'), 'allOption' => '1'), '\XLite\View\FormField\Select\OrderStatus\Shipping')->display(); ?>
  </td>
  <td>&nbsp;</td>
</tr>
