<li>
  <input type="radio" name="including" id="including-all" value="all" <?php if ($this->getChecked('including','all')) { echo 'checked="checked"'; } ?> />
  <label for="including-all"><?php echo func_htmlspecialchars($this->t('All words')); ?><label/>
</li>
