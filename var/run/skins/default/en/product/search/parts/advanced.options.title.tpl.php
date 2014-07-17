<li><label for="by-title">
  <input type="checkbox" name="by_title" id="by-title" value="Y" <?php if ($this->getChecked('by_title')) { echo 'checked="checked"'; } ?> />
  <?php echo func_htmlspecialchars($this->t('Title')); ?>
</label></li>
