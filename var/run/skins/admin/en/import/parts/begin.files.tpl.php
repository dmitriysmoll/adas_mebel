<div class="parts">
  <h3><?php echo func_htmlspecialchars($this->t('Upload files')); ?></h3>
  <input id="files" type="file" name="files[]" multiple="multiple" />
  <p><?php echo func_htmlspecialchars($this->getUploadFileMessage()); ?></p>
  <a href="<?php echo func_htmlspecialchars($this->getSamplesURL()); ?>" target="_blank"><?php echo func_htmlspecialchars($this->t('Import/Export guide')); ?></a>
</div>
