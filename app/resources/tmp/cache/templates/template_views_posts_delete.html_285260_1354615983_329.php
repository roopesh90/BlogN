<h4> Delete Posts </h4>
<p>Enter the post Title ( Very first occurance gets deleted..)</p>
<?php echo $this->form->create(); ?>
    <?php echo $this->form->field('title'); ?>
    <?php echo $this->form->submit('Delete Post'); ?>
<?php echo $this->form->end(); ?>


<?php if ($success): ?>
    <p style="color: red;">Post Successfully Deleted</p>
<?php endif; ?>
