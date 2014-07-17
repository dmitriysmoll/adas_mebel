<div class="tinymce-widget">
<div class="textarea">
<?php echo func_htmlspecialchars($this->displayCommentedData($this->getTinyMCEConfiguration())); ?>
<textarea class="tinymce" <?php echo $this->getAttributesCode(); ?>><?php echo func_htmlspecialchars($this->getValue()); ?></textarea>
</div>
</div>
