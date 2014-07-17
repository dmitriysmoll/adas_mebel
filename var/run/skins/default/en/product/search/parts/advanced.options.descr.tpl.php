<li><label for="by-descr">
  <input type="checkbox" name="by_descr" id="by-descr" value="Y" <?php if ($this->getChecked('by_descr')) { echo 'checked="checked"'; } ?> />
  <?php echo func_htmlspecialchars($this->t('Description')); ?>
</label></li>
