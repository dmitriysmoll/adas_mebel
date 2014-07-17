<ul class="extra-fields other-attributes">
  <?php if (!($this->get('product')->getAttrSepTab())): ?><?php $this->displayViewListContent('product.details.common.product-attributes.attributes', array('IF' => '!product.getAttrSepTab()')); ?><?php endif; ?>
</ul>
