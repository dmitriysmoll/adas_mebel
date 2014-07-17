<li>
  <input type="checkbox" name="by_sku" id="by-sku" value="Y" <?php if ($this->getCondition('by_sku')) { echo 'checked="checked"'; } ?> />
  <label for="by-sku"><?php echo func_htmlspecialchars($this->t('SKU')); ?></label>
</li>
