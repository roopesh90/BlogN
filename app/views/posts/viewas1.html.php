<h3> <b>View as 1....</b> </h3>

<article>
<h1><?=$this->html->link($post->title,'/posts/viewedit/'.$post->_id); ?></h1>
    <p><?=$post->body ?></p>
	<sup>
    <b>&nbsp; &nbsp; Created:&nbsp; </b><?=$this->html->link($post->timestamp,
						'/posts/viewas1/'.$post->_id); ?></sup>
    </article>
