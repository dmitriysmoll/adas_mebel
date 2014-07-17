<div class="tabs2-tabbed-content-wrapper">
  <div class="tabs2-tabs-container">
    <div class="tabs2-page-tabs">

      <ul>
        <?php $tabPage = isset($this->tabPage) ? $this->tabPage : null; $_foreach_var = $this->getTabs(); if (isset($_foreach_var)) { $this->tabPageArraySize=count($_foreach_var); $this->tabPageArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->tabPage){ $this->tabPageArrayPointer++; ?><li  class="tab<?php if ($this->getComplex('tabPage.selected')){?>-current<?php }?>">
          <?php if (!($this->getComplex('tabPage.selected'))): ?><a  href="<?php echo $this->getComplex('tabPage.url'); ?>"><?php echo func_htmlspecialchars($this->t($this->getComplex('tabPage.title'))); ?></a><?php endif; ?>
          <?php if ($this->getComplex('tabPage.selected')): ?><div ><?php echo func_htmlspecialchars($this->t($this->getComplex('tabPage.title'))); ?></div><?php endif; ?>
          <?php if ($this->getComplex('tabPage.selected')): ?><div  class="footer"></div><?php endif; ?>
        </li>
<?php } $this->tabPage = $tabPage; ?>
      </ul>

    </div>
    <div class="clear"></div>

    <div class="tab-content">
      <?php if ($this->isTemplateOnlyTab()):
  $this->display($this->getTabTemplate());
endif; ?>
      <?php if ($this->isWidgetOnlyTab()):
  $this->getWidget(array('widget' => $this->getTabWidget()))->display();
endif; ?>
      <?php if ($this->isFullWidgetTab()):
  $this->getWidget(array('widget' => $this->getTabWidget(), 'template' => $this->getTabTemplate()))->display();
endif; ?>
      <?php if ($this->isCommonTab()):
  $this->display($this->getPageTemplate());
endif; ?>
    </div>

  </div>
</div>
