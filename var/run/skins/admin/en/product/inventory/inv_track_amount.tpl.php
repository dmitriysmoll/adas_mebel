<tr>
  <td><?php echo func_htmlspecialchars($this->t('Quantity in stock')); ?></td>
  <td>
    <input type="text" name="<?php echo func_htmlspecialchars($this->getNamePostedData('amount')); ?>" size="18" value="<?php echo func_htmlspecialchars($this->get('inventory')->getAmount()); ?>" />
  </td>
</tr>
