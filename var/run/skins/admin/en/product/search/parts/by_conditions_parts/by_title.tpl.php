<li>
  <input type="checkbox" name="by_title" id="by-title" value="Y" <?php if ($this->getCondition('by_title')) { echo 'checked="checked"'; } ?> />
  <label for="by-title"><?php echo func_htmlspecialchars($this->t('Name')); ?></label>
</li>
