
<h3>Blog Roll ....</h3>

 <?php if (!$logintest): ?>
<h5 style="color: Red;"><?=$this->html->link('Do log in to do stuff..','login'); ?></h5>
<?php else: ?> 
   <h5 style="color: Blue;"><?=$this->html->link('Feel free to log out..','logout'); ?></h5> 
<?php endif; ?>

<?php foreach($posts as $post): ?>
<article>
	<h1>	
		<?php if (!$logintest): ?>
		<?=$this->html->link($post->title,'/posts/viewas1/'.$post->_id); ?>
		<?php else: ?> 
		<?=$this->html->link($post->title,'/posts/viewedit/'.$post->_id); ?>
		<?php endif; ?>
	</h1>
	<p><?=$post->body ?></p>
	<sup>
		<b>&nbsp; &nbsp; Created:&nbsp; </b>
		<?=$this->html->link($post->timestamp,'/posts/viewas1/'.$post->_id); ?>
	</sup>
	<br/>
	<div id="button"><b>
	<?=$this->html->link('Edit Post', '/posts/viewedit/'.$post->_id); ?></b>
	</div>
	&nbsp; &nbsp; 
	<div id="button"><b>
	<?=$this->html->link('Delete Post', '/posts/delete/'.$post->_id); ?></b>
	</div>
	<br/>
	
</article>
<?php endforeach; ?>
