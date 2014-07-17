<td class="disable">
  
  <?php if ($this->isModuleToDisable($this->get('entry'))): ?><input  id="toDisable<?php echo func_htmlspecialchars($this->get('entry')->getMarketplaceID()); ?>" type="checkbox" name="toDisable[<?php echo func_htmlspecialchars($this->get('entry')->getMarketplaceID()); ?>]" value="1" disabled="disabled" <?php if (1) { echo 'checked="checked"'; } ?> /><?php endif; ?>
  <?php if ($this->isModuleToDisable($this->get('entry'))): ?><input  id="toDisable<?php echo func_htmlspecialchars($this->get('entry')->getMarketplaceID()); ?>" type="hidden" name="toDisable[<?php echo func_htmlspecialchars($this->get('entry')->getMarketplaceID()); ?>]" value="1" /><?php endif; ?>
  <?php if (!($this->isModuleToDisable($this->get('entry')))): ?><input  id="toDisable<?php echo func_htmlspecialchars($this->get('entry')->getMarketplaceID()); ?>" type="checkbox" name="toDisable[<?php echo func_htmlspecialchars($this->get('entry')->getMarketplaceID()); ?>]" value="1" /><?php endif; ?>
  <label for="toDisable<?php echo func_htmlspecialchars($this->get('entry')->getMarketplaceID()); ?>"><?php echo func_htmlspecialchars($this->t('Disable')); ?></label>
</td>
