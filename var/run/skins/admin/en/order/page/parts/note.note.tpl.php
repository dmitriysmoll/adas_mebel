<div class="admin-note">
  <?php $this->getWidget(array('label' => 'Order note', 'fieldName' => 'adminNotes', 'value' => $this->get('order')->getAdminNotes()), '\XLite\View\FormField\Textarea\Simple')->display(); ?>
</div>
