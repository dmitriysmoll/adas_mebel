<input<?php echo $this->getAttributesCode(); ?>/>
<p />
<input type="checkbox" name="<?php echo func_htmlspecialchars($this->getNamePostedData('autogenerateCleanURL')); ?>" value="1" <?php if (!($this->getValue())) { echo 'checked="checked"'; } ?> id="autogenerateFlag" />
<label for="autogenerateFlag" class="note"><?php echo func_htmlspecialchars($this->t('Autogenerate Clean URL')); ?></label>
