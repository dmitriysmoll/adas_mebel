<?php $this->getWidget(array(), 'XLite\View\Form\Product\Modify\Inventory', 'update_inventory_form')->display(); ?>

<table class="product-modify-inventory">
  <?php $this->displayViewListContent('product.inventory.parts'); ?>
</table>

<?php $this->getWidget(array('end' => '1'), null, 'update_inventory_form')->display(); ?>
