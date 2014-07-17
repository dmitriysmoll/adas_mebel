<span class="input-field-wrapper <?php echo func_htmlspecialchars($this->getWrapperClass()); ?>">
<?php echo func_htmlspecialchars($this->displayCommentedData($this->getCommentedData())); ?>
<input type="hidden" name="<?php echo func_htmlspecialchars($this->getName()); ?>" value="" />
<input<?php echo $this->getAttributesCode(); ?> />
<div class="widget" title="<?php echo func_htmlspecialchars($this->t($this->getWidgetTitle())); ?>" data-enable-label="<?php echo func_htmlspecialchars($this->t($this->getEnableLabel())); ?>" data-disable-label="<?php echo func_htmlspecialchars($this->t($this->getDisableLabel())); ?>">
<i class="fa fa-power-off"></i>
</div>
</span>
