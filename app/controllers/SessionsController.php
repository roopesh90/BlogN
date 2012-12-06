<?php
namespace app\controllers;

use lithium\security\Auth;

class SessionsController extends \lithium\action\Controller {

    public function add() {
	$logintest = false;
//if (Auth::check('default', $this->request)) {
	if ($this->request->data && Auth::check('default', $this->request)) {
	//$success = true;
           return $this->redirect('Posts');
        }
	
    	return compact('logintest');
        // Handle failed authentication attempts
    }

	public function delete() {
	$success = false;
        if (Auth::clear('default')){
		$success = true;
	}
	//return compact('success');
	
       return $this->redirect('Posts');
    }

}

?>
