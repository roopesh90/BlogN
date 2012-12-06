<?php


namespace app\controllers;

use lithium\security\Auth;
use app\models\Posts;

class PostsController extends \lithium\action\Controller {

    public function index($id=null) {
	$logintest = false;
	if (Auth::check('default')){
	$logintest = true;
	}
	$posts = Posts::all();
	
	/*
	//delete
	if(!is_null($id)){
		//$post=Posts::find('first', array('conditions' =>array('_id'=>$id)));
		$posts = Posts::remove(array('_id' => $id), array("justOne" => true));
		//echo "<h1>a sdasdkajsdkansdkansdnnasdkjanskdnkajsn</h1>";
	   }
	*/


        return compact('posts', 'logintest');
        //return array('foo' => 'bar', 'title' => 'Posts');
    }

    public function add() {
        if (!Auth::check('default')) {
            return $this->redirect('Sessions::add');
        }

	else{
    	$success = false;

	if ($this->request->data) {
		$post = Posts::create($this->request->data);
		if ($success = $post->save()){
			$success = true;
			return $this->redirect('posts');
		}
	}

    	return compact('success');
    }
}


    public function delete($id=null) {
    	if (!Auth::check('default')) {
            return $this->redirect('Sessions::add');
        }
	else{
		
		$success = false;
		if(!is_null($id)){
			//$post=Posts::find('first', array('conditions' =>array('_id'=>$id)));
			$posts = Posts::remove(array('_id' => $id), array("justOne" => true));
			//echo "<h1>a sdasdkajsdkansdkansdnnasdkjanskdnkajsn</h1>";
		
		
		}
	}
	return $this->redirect('posts');
    	//return compact('success');
    }


    public function update() {
    	$success = false;
//$radioactive->remove(array('type' => 94), array("justOne" => true));
	if ($this->request->data) {
		
		$success = Posts::update($this->request->data);
		//$success = $post->delete();
	}

    	return compact('success');
    }


    public function viewas1($id=null) {
	   // we are going to view a page.
	   if(!is_null($id)){
		$post=Posts::find('first', array('conditions' =>array('_id'=>$id)));
	   }
        return compact('post');
    }


    public function viewedit($id=null) {
	if (!Auth::check('default')) {
            return $this->redirect('Sessions::add');
        }
        
	else{
		$success = false;

		if(!is_null($id)){
			$post=Posts::find('first', array('conditions' =>array('_id'=>$id)));
		}

		if ($this->request->data){      
		    $success = $post->save($this->request->data);
		    Posts::remove(array('title' => ''));      
		}
	}
        

	  // elseif($this->request->data) {
		
		//$success = Posts::update($this->request->data);
		//$success = $post->delete();

    	//return compact('success');
	  // }
		
        return compact('post','success');
    }



}

?>
