<td style="text-align: left;vertical-align: top;border-width:1px;border-collapse: collapse;border-spacing: 0px;border-style: solid;border-color: #c4c4c4;padding: 10px 20px;vertical-align: top;">
  <strong style="color: #000000;font-size: 18px;font-weight: bold;"><?php echo func_htmlspecialchars($this->get('item')->getName()); ?></strong>
  <?php if ($this->isViewListVisible('invoice.item.name',array('item'=>$this->get('item')))): ?><ul  style="list-style: none;padding-left:0;margin:0;color: #5a5a5a;">
  <?php $this->displayViewListContent('invoice.item.name', array('item' => $this->get('item'))); ?>
  </ul><?php endif; ?>
</td>
