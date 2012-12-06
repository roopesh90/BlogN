<?php

namespace app\extensions\helper;

class Link121 extends \lithium\template\Helper {
//'super_cool' => '<span class="super"><a class="cool" href="{:url}">{:title}</a></span>',
//cool' => '<a class="awesome" href="{:url}">{:title}</a>', 
    public $_strings = array(
	'cool' => '{:url}', 
	'super_cool' => '<span class="super"><a class="cool" href="{:url}">{:title}</a></span>',
	'link_cool' => '<a class="awesome" title="{:descp}" href="{:url}">{:title}</a> ',);

    public function link($title, $url, $options, $descp) {
        $title = $this->escape($title);
	//$descp = $this->escape($descp);
        return $this->_render(__METHOD__, $options['type'], compact('title', 'url', 'descp'));
    }

    public function link1($url,$options){
	return $this->_render(__METHOD__, $options['type'], compact('url'));
    }
}

?>
