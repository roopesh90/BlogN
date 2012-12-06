<h4> Edit Posts </h4>
<p>Enter the Post Title ( Very first occurance gets edited..)</p>
<?php echo $this->form->create(); ?>
    <?php echo $this->form->field('title'); ?>
    <?php echo $this->form->field('title'); ?>
    <?php echo $this->form->submit('Edit Post'); ?>
<?php echo $this->form->end(); ?>

<?php if ($success): ?>
    <p>Post Successfully Edited</p>
<?php endif; ?>
