<div class="dialog-block export-box export-begin">

  <div class="header clearfix">
    <h2><?php echo func_htmlspecialchars($this->t('Export in CSV')); ?></h2>
  </div>

  <div class="content">
    <?php $this->getWidget(array(), 'XLite\View\Form\Export', 'exportform')->display(); ?>
      <div class="subcontent clearfix">
        <?php $this->displayViewListContent('export.begin.content'); ?>
      </div>
      <div class="buttons">
        <?php $this->displayViewListContent('export.begin.buttons'); ?>
      </div>
    <?php $this->getWidget(array(), null, 'exportform')->display(); ?>
  </div>

</div>

<?php $this->getWidget(array(), 'XLite\View\Export\Download')->display(); ?>
