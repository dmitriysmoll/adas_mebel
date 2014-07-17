<li>
  <input type="radio" name="including" id="including-any" value="any" <?php if ($this->getChecked('including','any')) { echo 'checked="checked"'; } ?> />
  <label for="including-any"><?php echo func_htmlspecialchars($this->t('Any word')); ?></label>
</li>
