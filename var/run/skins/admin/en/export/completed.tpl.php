<div class="dialog-block export-box export-completed">

  <div class="header clearfix">
    <h2><?php echo func_htmlspecialchars($this->t('Export completed')); ?></h2>
  </div>

  <div class="content">
    <?php $this->getWidget(array('completedContext' => 'true'), 'XLite\View\Export\Download')->display(); ?>
  </div>

</div>
