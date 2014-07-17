<tr>
  <td><?php echo func_htmlspecialchars($this->t('Low limit quantity')); ?></td>
  <td>
    <input type="text" name="<?php echo func_htmlspecialchars($this->getNamePostedData('lowLimitAmount')); ?>" size="18" value="<?php echo func_htmlspecialchars($this->get('inventory')->getLowLimitAmount()); ?>" />
  </td>
</tr>
