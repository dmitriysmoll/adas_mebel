<div class="search-product-form">

  <?php $this->getWidget(array(), '\XLite\View\Form\Product\Search\Customer\Main', 'simple_products_search')->display(); ?>

  <div class="search-form">

    <table class="search-form-main-part">

      <tr>
        <?php $this->displayViewListContent('products.search.conditions.substring'); ?>
      </tr>

      <tr class="including-options-list">

        <td>

          <ul class="search-including-options">
            <?php $this->displayViewListContent('products.search.conditions.phrase'); ?>
          </ul>

        </td>

        <td class="less-search-options-cell hidden-xs hidden-sm">
          <a href="javascript:void(0);" onclick="javascript:core.toggleText(this,'<?php echo func_htmlspecialchars($this->t('Less search options')); ?>','#advanced_search_options');"><?php echo func_htmlspecialchars($this->t('More search options')); ?></a>
        </td>

    </table>

    <table id="advanced_search_options" class="advanced-search-options">
      <?php $this->displayViewListContent('products.search.conditions.advanced'); ?>
    </table>
    
    <table class="search-form-main-part visible-xs visible-sm">
        <tr>
           <?php $this->displayViewListContent('products.search.conditions-responsive.substring'); ?>
        </tr>
        <tr>
          <td class="less-search-options-cell">
            <a href="javascript:void(0);" onclick="javascript:core.toggleText(this,'<?php echo func_htmlspecialchars($this->t('Less search options')); ?>','#advanced_search_options');"><?php echo func_htmlspecialchars($this->t('More search options')); ?></a>
          </td>  
        </tr>
    </table>

  </div> 
  
  
  
  
  
  

  <?php $this->getWidget(array('end' => '1'), null, 'simple_products_search')->display(); ?>

</div>

<?php if ($this->isDisplayRequired(array('search','search'))):
  $this->getWidget(array(), '\XLite\View\ItemsList\Product\Customer\Search')->display();
endif; ?>
