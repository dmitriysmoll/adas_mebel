<li>
  <input type="radio" name="including" id="including-phrase" value="phrase" <?php if ($this->getChecked('including','phrase')) { echo 'checked="checked"'; } ?> />
  <label for="including-phrase"><?php echo func_htmlspecialchars($this->t('Exact phrase')); ?></label>
</li>
