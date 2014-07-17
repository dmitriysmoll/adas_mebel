<tr>
  <td class="option-name title-category"><?php echo func_htmlspecialchars($this->t('Category')); ?>:</td>
  <td><?php $this->getWidget(array('fieldName' => 'categoryId', 'selectedCategoryIds' => array($this->getCondition('categoryId')), 'allOption' => '1'), '\XLite\View\CategorySelect')->display(); ?></td>
</tr>
