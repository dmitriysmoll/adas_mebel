<tr class="date">
  <td class="title"><?php echo func_htmlspecialchars($this->t('Date range')); ?>:</td>
  <td>

    <?php $this->getWidget(array('field' => 'startDate', 'value' => $this->getCondition('startDate')), '\XLite\View\DatePicker')->display(); ?>
    &ndash;
    <?php $this->getWidget(array('field' => 'endDate', 'value' => $this->getCondition('endDate')), '\XLite\View\DatePicker')->display(); ?>

    <br />



  </td>
</tr>
