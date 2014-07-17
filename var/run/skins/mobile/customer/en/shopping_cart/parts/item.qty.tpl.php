<div class="price-row">

  <?php $this->getWidget(array('item' => $this->get('item'), 'className' => 'price-parts update-quantity', 'validationEngine' => '1'), '\XLite\View\Form\Cart\Item\Update', 'updateItem'.$this->get('item')->getItemId())->display(); ?>

  <?php $this->getWidget(array('product' => $this->get('item')->getProduct(), 'fieldValue' => $this->get('item')->getAmount(), 'isCartPage' => '1'), '\XLite\View\Product\QuantityBox')->display(); ?>

  <?php $this->getWidget(array('end' => '1'), null, 'updateItem'.$this->get('item')->getItemId())->display(); ?>

  <div class="price-parts multi">=</div>

</div>
