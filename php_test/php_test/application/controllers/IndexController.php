<?php

require_once 'Zend/Controller/Action.php';

require_once 'Zend/Auth.php';

class IndexController extends Zend_Controller_Action
{
    /**
     * indexAction
     *
     * @return void
     */
    public function indexAction() 
    {
		$this->render('welcome');	
    }
}
