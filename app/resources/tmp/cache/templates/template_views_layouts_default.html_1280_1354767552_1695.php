<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>BlogN &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('debug', 'lithium')); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="app">
	<div id="container">
		<div id="header">
			<h1>BlogN</h1>
			<h2>
				Powered by <?php echo $this->html->link('Lithium', 'http://lithify.me/'); ?>.
			</h2>
			<div id="heading">
			<hr/>
			<?php if (!$logintest): ?>
<div id="loginbutton" style="color: Red;"><?php echo $this->html->link('Login','login'); ?></div>
<?php else: ?> 
   <div id="loginbutton" style="color: Blue;"><?php echo $this->html->link('Logout','logout'); ?></div> 
<?php endif; ?>

			<center>
				<strong>
					<?php echo $this->link121->link('Home', 'Posts', array('type' => 'link_cool'), 'Go Home now..'); ?> 
					&nbsp; &nbsp; &nbsp;

					<?php echo $this->link121->link('Add Posts', 'Posts::add', array('type' => 'link_cool'), 'Click to add a Post'); ?> 

					&nbsp; &nbsp; &nbsp;


<!--

					<?php echo $this->link121->link('Delete Posts', 'Posts::delete', array('type' => 'link_cool'), 'Click to delete a Post'); ?> 
					&nbsp; &nbsp; &nbsp;

					<?php echo $this->link121->link('Edit Posts', 'Posts::update', array('type' => 'link_cool'), 'Click to edit a Post'); ?> 

-->
				</strong>
			</center>
			<hr/>
			</div>
		</div>
		<div id="content">
			<?php echo $this->content(); ?>
		</div>
	</div>

</body>
</html>
