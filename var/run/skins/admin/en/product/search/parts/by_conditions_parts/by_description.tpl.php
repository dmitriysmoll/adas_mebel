<li>
  <input type="checkbox" name="by_descr" id="by-descr" value="Y" <?php if ($this->getCondition('by_descr')) { echo 'checked="checked"'; } ?> />
  <label for="by-descr"><?php echo func_htmlspecialchars($this->t('Description')); ?></label>
</li>
