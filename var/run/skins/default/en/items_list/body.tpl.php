<div class="<?php echo func_htmlspecialchars($this->getListCSSClasses()); ?>">
  <?php $this->displayCommentedData($this->getJSData()); ?>

  <?php if ($this->isHeadVisible()): ?><h2  class="items-list-title <?php echo func_htmlspecialchars($this->getListHeadClass()); ?>"><?php echo func_htmlspecialchars($this->getListHead()); ?></h2><?php endif; ?>
  <?php if ($this->isPagerVisible()): ?><div  class="list-pager"><?php $this->get('pager')->display(); ?></div><?php endif; ?>
  <noindex><?php if ($this->isHeaderVisible()): ?><div  class="list-header"><?php $this->displayInheritedViewListContent('header'); ?></div><?php endif; ?></noindex>

  <?php $this->display($this->getPageBodyTemplate()); ?>

  <?php if ($this->isPagerVisible()&&$this->get('pager')->isPagesListVisible()): ?><div class="list-pager list-pager-bottom" ><?php $this->get('pager')->display(); ?></div><?php endif; ?>
  <?php if ($this->isFooterVisible()): ?><div  class="list-footer"><?php $this->displayInheritedViewListContent('footer'); ?></div><?php endif; ?>

  <?php if ($this->isEmptyListTemplateVisible()):
  $this->display($this->getEmptyListTemplate());
endif; ?>
</div>
