<?php $this->getWidget(array('className' => $this->getContainerClass()), $this->getFormClass(), 'search_form')->display(); ?>

  <?php $this->displayNestedViewListContent('before'); ?>

  <div class="search-conditions-box">

    <?php echo func_htmlspecialchars($this->displayCommentedData($this->getSearchPanelParams())); ?>

    <ul class="search-conditions clear clearfix">
      <?php $_foreach_var = $this->getConditions(); if (isset($_foreach_var)) { $this->conditionArraySize=count($_foreach_var); $this->conditionArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->name => $this->condition){ $this->conditionArrayPointer++; ?>
        <li class="<?php echo func_htmlspecialchars($this->get('name')); ?>-condition"><?php echo func_htmlspecialchars($this->get('condition')->display()); ?></li>
      <?php }?>
      <li class="actions">
        <?php $_foreach_var = $this->getActions(); if (isset($_foreach_var)) { $this->actionArraySize=count($_foreach_var); $this->actionArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->name => $this->action){ $this->actionArrayPointer++; ?>
          <?php echo func_htmlspecialchars($this->get('action')->display()); ?>
        <?php }?>
        <?php $this->displayNestedViewListContent('actions'); ?>
      </li>
      <?php $this->displayNestedViewListContent('conditions'); ?>
    </ul>

    <?php if ($this->getHiddenConditions()): ?><span  class="search-conditions-hr">
      <hr noshade class="line1 search-conditions-hidden">
      <hr noshade class="line2 search-conditions-hidden">
    </span><?php endif; ?>

    <?php if ($this->getHiddenConditions()): ?><ul  class="search-conditions-hidden clear clearfix">
      <?php $_foreach_var = $this->getHiddenConditions(); if (isset($_foreach_var)) { $this->conditionArraySize=count($_foreach_var); $this->conditionArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->name => $this->condition){ $this->conditionArrayPointer++; ?>
        <li class="<?php echo func_htmlspecialchars($this->get('name')); ?>-condition"><?php echo func_htmlspecialchars($this->get('condition')->display()); ?></li>
      <?php }?>
      <?php $this->displayNestedViewListContent('hiddenConditions'); ?>
    </ul><?php endif; ?>

    <?php if ($this->getHiddenConditions()): ?><div  class="arrow"></div><?php endif; ?>

  </div>

  <?php $this->displayNestedViewListContent('after'); ?>

<?php $this->getWidget(array('end' => '1'), null, 'search_form')->display(); ?>
