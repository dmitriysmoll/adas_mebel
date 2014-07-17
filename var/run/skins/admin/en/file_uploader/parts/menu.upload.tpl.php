<li role="presentation" class="dropdown-header"><?php echo func_htmlspecialchars($this->t('Upload')); ?></li>
<li role="presentation">
  <a role="menuitem" tabindex="-1" href="#" class="from-computer">
    <i class="button-icon fa fa-sign-out fa-rotate-270"></i>
    <span><?php echo func_htmlspecialchars($this->t('From computer')); ?></span>
  </a>
  <input type="file" name="uploaded-file"<?php if ($this->hasMultipleSelector()){?> multiple="multiple"<?php }?> />
</li>
<li role="presentation">
  <a role="menuitem" tabindex="-1" href="#" class="via-url">
    <i class="button-icon fa fa-link"></i>
    <span><?php echo func_htmlspecialchars($this->t('Via URL')); ?></span>
  </a>
</li>
<div class="via-url-popup" data-title="<?php echo func_htmlspecialchars($this->t('Upload via URL')); ?>" data-multiple="<?php if ($this->hasMultipleSelector()){?>1<?php }?>">
<?php if ($this->hasMultipleSelector()){?>  
  <textarea name="url" class="form-control urls" placeholder="http://example.com/file1.jpg                                                                     http://example.com/file2.jpg" /></textarea>
<?php }else{ ?>
  <input type="text" name="url" class="form-control url" value="" placeholder="http://example.com/file.jpg" />
<?php }?>
  <div class="checkbox">
    <label><input type="checkbox" name="copy-to-file" value="1" class="copy-to-file" /><?php echo func_htmlspecialchars($this->t('Copy to file system')); ?></label>
  </div>
  <button type="button" class="btn btn-default"><?php echo func_htmlspecialchars($this->t('Upload')); ?></button>  
</div>
