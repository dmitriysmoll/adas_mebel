<td class="item-qty">
  <?php if ($this->get('item')->canChangeAmount()){?>
    <?php $this->getWidget(array('item' => $this->get('item'), 'className' => 'update-quantity', 'validationEngine' => '1'), '\XLite\View\Form\Cart\Item\Update', 'updateItem'.$this->get('item')->getItemId())->display(); ?>
      <div>
        <?php $this->getWidget(array('product' => $this->get('item')->getProduct(), 'fieldValue' => $this->get('item')->getAmount(), 'isCartPage' => '1', 'orderItem' => $this->get('item')), '\XLite\View\Product\QuantityBox')->display(); ?>
      </div>
    <?php $this->getWidget(array('end' => '1'), null, 'updateItem'.$this->get('item')->getItemId())->display(); ?>
  <?php }else{ ?>
    <span class="non-valid-qty"><?php echo func_htmlspecialchars($this->get('item')->getAmount()); ?></span>
  <?php }?>
</td>
