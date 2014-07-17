<li><label for="by-sku">
  <input type="checkbox" name="by_sku" id="by-sku" value="Y" <?php if ($this->getChecked('by_sku')) { echo 'checked="checked"'; } ?> />
  <?php echo func_htmlspecialchars($this->t('SKU')); ?>
</label></li>
