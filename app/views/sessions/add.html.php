    <h2>Login</h2>
<?=$this->form->create(null); ?>
    <?=$this->form->field('username'); ?>
    <?=$this->form->field('password', array('type' => 'password')); ?>
    <?=$this->form->submit('Log in'); ?>
<?=$this->form->end(); ?>

    <?php if (!$logintest): ?>
<p style="color: Red;">Login Unsuccessful</p>
<?php else: ?> 
   <p style="color: Blue;">Login Successful</p> 
<?php endif; ?>


