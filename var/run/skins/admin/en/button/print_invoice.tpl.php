<button type="button"<?php if ($this->getClass()){?> class="<?php echo func_htmlspecialchars($this->getClass()); ?>"<?php }?>>
<?php echo func_htmlspecialchars($this->displayCommentedData($this->getURLParams())); ?>
<?php if ($this->getParam('icon-style')){?>
  <i class="button-icon <?php echo func_htmlspecialchars($this->getParam('icon-style')); ?>"></i>
<?php }?>
<span><?php echo func_htmlspecialchars($this->t($this->getButtonLabel())); ?></span>
<div id="iframe-placeholder" class="iframe-placeholder"></div>
</button>
