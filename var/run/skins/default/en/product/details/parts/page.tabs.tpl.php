<?php if ($this->getTabs()): ?><div  class="product-details-tabs">

  <div class="tabs">
    <ul class="tabs primary">
      <?php $tab = isset($this->tab) ? $this->tab : null; $_foreach_var = $this->getTabs(); if (isset($_foreach_var)) { $this->tabArraySize=count($_foreach_var); $this->tabArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->index => $this->tab){ $this->tabArrayPointer++; ?><li  class="<?php echo func_htmlspecialchars($this->getTabClass($this->get('tab'))); ?>">
        <span id="link-<?php echo $this->getComplex('tab.id'); ?>"><?php echo func_htmlspecialchars($this->t($this->getComplex('tab.name'))); ?></span>
      </li>
<?php } $this->tab = $tab; ?>
    </ul>
  </div>

  <?php $tab = isset($this->tab) ? $this->tab : null; $_foreach_var = $this->getTabs(); if (isset($_foreach_var)) { $this->tabArraySize=count($_foreach_var); $this->tabArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->tab){ $this->tabArrayPointer++; ?><div  id="<?php echo $this->getComplex('tab.id'); ?>" class="tab-container" style="<?php echo func_htmlspecialchars($this->getTabStyle($this->get('tab'))); ?>">
    <a name="<?php echo $this->getComplex('tab.id'); ?>"></a>
    <?php if ($this->getComplex('tab.template')){?>
      <?php $this->display($this->getComplex('tab.template')); ?>

    <?php }else{ ?>
      <?php if ($this->getComplex('tab.widget')){?>
        <?php $this->getWidget(array('product' => $this->get('product')), $this->getComplex('tab.widget'))->display(); ?>

      <?php }else{ ?>
        <?php if ($this->getComplex('tab.list')){?>
          <?php $this->displayViewListContent($this->getComplex('tab.list'), array('product' => $this->get('product'))); ?>
        <?php }else{ ?>
          <?php if ($this->getComplex('tab.widgetObject')){?>
            <?php echo $this->getComplex('tab.widgetObject')->display(); ?>
          <?php }?>
        <?php }?>
      <?php }?>
    <?php }?>
  </div>
<?php } $this->tab = $tab; ?>

</div><?php endif; ?>
