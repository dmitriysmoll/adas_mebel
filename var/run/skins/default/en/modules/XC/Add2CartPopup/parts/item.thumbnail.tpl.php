<div class="item-thumbnail">
  <?php $this->getWidget(array('image' => $this->get('product')->getImage(), 'maxWidth' => $this->getIconWidth(), 'maxHeight' => $this->getIconHeight(), 'alt' => $this->getComplex('product.name'), 'className' => 'photo'), '\XLite\View\Image')->display(); ?>
</div>
