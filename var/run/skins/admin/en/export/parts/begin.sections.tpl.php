<div class="parts">
  <h3><?php echo func_htmlspecialchars($this->t('What to export')); ?></h3>
  <ul class="clearfix sections">
    <?php $section = isset($this->section) ? $this->section : null; $_foreach_var = $this->getSections(); if (isset($_foreach_var)) { $this->sectionArraySize=count($_foreach_var); $this->sectionArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->i => $this->section){ $this->sectionArrayPointer++; ?><li >
      <input type="checkbox" name="section[]" value="<?php echo func_htmlspecialchars($this->get('i')); ?>" id="section<?php echo func_htmlspecialchars($this->formatClassNameToString($this->get('i'))); ?>"<?php if ($this->isSectionSelected($this->get('i'))){?>checked="checked"<?php }?><?php if ($this->isSectionDisabled($this->get('i'))){?> disabled="disabled"<?php }?> />
      <label for="section<?php echo func_htmlspecialchars($this->formatClassNameToString($this->get('i'))); ?>"<?php if ($this->isSectionDisabled($this->get('i'))){?> class="disabled"<?php }?>><?php echo func_htmlspecialchars($this->t($this->get('section'))); ?></label>
    </li>
<?php } $this->section = $section; ?>
  </ul>
</div>
