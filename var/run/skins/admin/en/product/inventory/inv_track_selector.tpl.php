<tr>
  <td><?php echo func_htmlspecialchars($this->t('Inventory tracking for this product is')); ?></td>
  <td>
    <select name="<?php echo func_htmlspecialchars($this->getNamePostedData('enabled')); ?>">
      <option value="1" <?php if ($this->get('inventory')->getEnabled()=='1') { echo 'selected="selected"'; } ?>><?php echo func_htmlspecialchars($this->t('Enabled')); ?></option>
      <option value="0" <?php if ($this->get('inventory')->getEnabled()=='0') { echo 'selected="selected"'; } ?>><?php echo func_htmlspecialchars($this->t('Disabled')); ?></option>
    </select>
  </td>
</tr>
