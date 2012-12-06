&nbsp 
<h3> <b>Already Posted ....</b> </h3>

<article>
        <h1><?php echo $this->html->link($post->title,'/posts/view/'.$post->_id); ?></h1>
        <p><?php echo $h($post->body); ?></p>
    </article>
