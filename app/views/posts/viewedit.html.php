
<h3> <b>View and edit posts....</b> </h3>
<!--
<article>
        <h1><?=$this->html->link($post->title,'/posts/view/'.$post->_id); ?></h1>
        <p><?=$post->body; ?></p>
    </article>
-->

<p>Do make necessary changes. &nbsp; A blank field is deleted</p>

<?=$this->form->create(); ?>
    <?=$this->form->field('title',array('value' => $post->title)); ?>
    <?=$this->form->field('body', array('type' => 'textarea','value' => $post->body));?>
<?=$this->form->field('timestamp', array('type' => 'hidden', 'value'=> date('m/d/Y h:i:s a', time())));?>
    <?=$this->form->submit('Edit Post'); ?>
<?=$this->form->end(); ?>

<?php if ($success): ?>
    <p style="color: blue;">Post Successfully Saved</p>
<?php endif; ?>
