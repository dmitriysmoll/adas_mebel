<?php if ($this->isSameAddressVisible()): ?><li class="same-address"  >
  <input type="hidden" name="same_address" value="0" />
  <input id="same_address" type="checkbox" name="same_address" value="1" <?php if ($this->isSameAddress()) { echo 'checked="checked"'; } ?> />
  <label for="same_address"><?php echo func_htmlspecialchars($this->t('The same as shipping')); ?></label>
</li><?php endif; ?>
