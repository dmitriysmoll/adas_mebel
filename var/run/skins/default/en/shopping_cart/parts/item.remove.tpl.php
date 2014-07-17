<td class="item-remove delete-from-list">
  <?php $this->getWidget(array('item' => $this->get('item')), '\XLite\View\Form\Cart\Item\Delete', 'itemRemove'.$this->get('item')->getItemId())->display(); ?>
    <div><?php $this->getWidget(array('label' => 'Delete item', 'style' => 'remove', 'jsCode' => 'return jQuery(this).closest(\'form\').submit();'), '\XLite\View\Button\Image')->display(); ?></div>
  <?php $this->getWidget(array('end' => '1'), null, 'itemRemove'.$this->get('item')->getItemId())->display(); ?>
</td>
