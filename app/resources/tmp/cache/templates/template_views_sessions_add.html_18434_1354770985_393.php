    <h2>Login</h2>
<?php echo $this->form->create(null); ?>
    <?php echo $this->form->field('username'); ?>
    <?php echo $this->form->field('password', array('type' => 'password')); ?>
    <?php echo $this->form->submit('Log in'); ?>
<?php echo $this->form->end(); ?>

    <?php if (!$logintest): ?>
<p style="color: Red;">Login Unsuccessful</p>
<?php else: ?> 
   <p style="color: Blue;">Login Successful</p> 
<?php endif; ?>


