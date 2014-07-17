<tr>
  <td><?php echo func_htmlspecialchars($this->t('Low limit notification for this product is')); ?></td>
  <td>
    <select name="<?php echo func_htmlspecialchars($this->getNamePostedData('lowLimitEnabled')); ?>">
      <option value="1" <?php if ($this->get('inventory')->getLowLimitEnabled()=='1') { echo 'selected="selected"'; } ?>><?php echo func_htmlspecialchars($this->t('Enabled')); ?></option>
      <option value="0" <?php if ($this->get('inventory')->getLowLimitEnabled()=='0') { echo 'selected="selected"'; } ?>><?php echo func_htmlspecialchars($this->t('Disabled')); ?></option>
    </select>
  </td>
</tr>
