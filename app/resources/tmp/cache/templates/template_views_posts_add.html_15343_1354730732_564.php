<h4> Add Posts </h4>
<p>Enter the post Title and its content</p>
<?php echo $this->form->create(); ?>
    <?php echo $this->form->field('title', array('type' => 'text')); ?>
    <?php echo $this->form->field('body', array('type' => 'textarea')); ?>
<?php echo $this->form->field('timestamp', array('type' => 'hidden', 'value'=> date('m/d/Y h:i:s a', time()))); ?>
    <?php echo $this->form->submit('Add Post'); ?>
<?php echo $this->form->end(); ?>

<?php if (!$success): ?>
    <p style="color: red;">Post Unseccessful</p>
<?php else: ?> 
   <p style="color: Blue;">Post Successfully Saved?></p> 
<?php endif; ?>
