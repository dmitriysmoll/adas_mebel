<?php if ($this->get('head')): ?><h1 ><?php echo func_htmlspecialchars($this->t($this->get('head'))); ?></h1><?php endif; ?>

<?php if ($this->getTabberPages()): ?><div class="tabbed-content-wrapper" >
  <div class="tabs-container">
    <div class="page-tabs clearfix">

      <ul>
        <?php $tabPage = isset($this->tabPage) ? $this->tabPage : null; $_foreach_var = $this->getTabberPages(); if (isset($_foreach_var)) { $this->tabPageArraySize=count($_foreach_var); $this->tabPageArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->tabPage){ $this->tabPageArrayPointer++; ?><li  class="tab<?php if ($this->getComplex('tabPage.selected')){?>-current<?php }?>">
          <a href="<?php echo func_htmlspecialchars($this->getComplex('tabPage.url')); ?>"><?php echo func_htmlspecialchars($this->t($this->getComplex('tabPage.title'))); ?></a>
        </li>
<?php } $this->tabPage = $tabPage; ?>
      </ul>

      <div class="list-after-tabs">
        <?php $this->displayViewListContent('page.tabs.after'); ?>
      </div>

    </div>
    <div class="clear"></div>

    <div class="tab-content">
      <?php $this->display($this->getParam('body')); ?>
    </div>

  </div>
</div><?php endif; ?>
