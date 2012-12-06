<h4> Edit Posts </h4>
<p>Enter the Post Title ( Very first occurance gets edited..)</p>
<?=$this->form->create(); ?>
    <?=$this->form->field('title');?>
    <?=$this->form->field('title');?>
    <?=$this->form->submit('Edit Post'); ?>
<?=$this->form->end(); ?>

<?php if ($success): ?>
    <p>Post Successfully Edited</p>
<?php endif; ?>
