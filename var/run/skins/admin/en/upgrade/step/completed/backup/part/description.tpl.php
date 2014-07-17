<div class="upgrade-note upgrade-description">
  <?php echo func_htmlspecialchars($this->t('The upgrade is completed. Please, do not close this page until you check your web site and check that everything works properly')); ?>.
</div>

<?php $this->getWidget(array('style' => 'main-button', 'label' => $this->t('Open storefront'), 'blank' => '1', 'location' => $this->getShopURL()), '\XLite\View\Button\Link')->display(); ?>

<div class="upgrade-note upgrade-description">
  <?php echo func_htmlspecialchars($this->t('If there are some critical errors occured you can do the following')); ?>:
</div>

<?php $this->displayInheritedViewListContent('actions'); ?>
