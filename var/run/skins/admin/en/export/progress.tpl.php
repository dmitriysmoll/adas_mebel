<div class="dialog-block export-box export-progress">

  <div class="header clearfix">
    <h2><?php echo func_htmlspecialchars($this->t('Exporting data...')); ?></h2>
  </div>

  <div class="content">
    <?php $this->getWidget(array('formAction' => 'cancel'), 'XLite\View\Form\Export', 'exportform')->display(); ?>
      <div class="subcontent">
        <?php $this->getWidget(array('event' => $this->getEventName()), 'XLite\View\EventTaskProgress')->display(); ?>
        <?php $this->getWidget(array('label' => $this->t('Cancel')), 'XLite\View\Button\Submit')->display(); ?>
        <div class="time"><?php echo func_htmlspecialchars($this->t('About X remain',array('time'=>$this->getTimeLabel()))); ?></div>
      </div>
      <div class="help">
        <i class="icon-info-sign"></i>
        <p>
          <?php if ($this->isBlocking()){?>
            <?php echo func_htmlspecialchars($this->t('The process of export may take much time. You may close the page, the operation will be in progress as background. If the operation takes long enough, we will send you a notification when it is complete.')); ?>
          <?php }else{ ?>
            <?php echo func_htmlspecialchars($this->t('The process of export may take much time. Please do not close this page until the export is complete')); ?>
          <?php }?>
        </p>
      </div>
    <?php $this->getWidget(array(), null, 'exportform')->display(); ?>
  </div>

</div>
