<li class="url-copy-to-local input-field">
  <label for="url-copy-to-local">
    <?php $this->getWidget(array('value' => 'Y', 'isChecked' => 'false', 'attributes' => array('disabled'=>'disabled'), 'fieldName' => 'url_copy_to_local', 'fieldOnly' => 'true'), '\XLite\View\FormField\Input\Checkbox')->display(); ?>
    <span class="label"><?php echo func_htmlspecialchars($this->t('Copy file to local server')); ?></span>
  </label>
</li>
