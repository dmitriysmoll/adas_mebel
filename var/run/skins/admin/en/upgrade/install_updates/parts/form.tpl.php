<form action="<?php echo func_htmlspecialchars($this->buildURL()); ?>" method="post">

  <input type="hidden" name="target" value="upgrade">
  
  <?php $this->getWidget(array(), '\XLite\View\FormField\Input\FormId')->display(); ?>

  <div class="update-module-list-frame">

    <div class="upgrade-button">
      <?php if ($this->isDisplayRequired(array('upgrade'))):
  $this->getWidget(array(), '\XLite\View\Upgrade\SelectCoreVersion\Button')->display();
endif; ?>
    </div>

    <ul class="update-module-list">

      <?php $entry = isset($this->entry) ? $this->entry : null; $_foreach_var = $this->getUpgradeEntries(); if (isset($_foreach_var)) { $this->entryArraySize=count($_foreach_var); $this->entryArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->entry){ $this->entryArrayPointer++; ?><li class="update-module-info" >
        <?php $this->displayInheritedViewListContent('sections.form', array('entry' => $this->get('entry'))); ?>
      </li>
<?php } $this->entry = $entry; ?>

    </ul>

    <div class="clear"></div>

    <?php $this->getWidget(array('label' => $this->t('Install updates'), 'style' => 'center main-button'), '\XLite\View\Button\Submit')->display(); ?>

  </div>

</form>
