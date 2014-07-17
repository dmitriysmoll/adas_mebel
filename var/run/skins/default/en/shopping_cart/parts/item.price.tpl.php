<td class="item-price"><?php $this->getWidget(array('surcharge' => $this->get('item')->getNetPrice(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?></td>
<td class="item-multi">&times;</td>
