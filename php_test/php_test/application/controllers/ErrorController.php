<?php

require_once 'Zend/Controller/Action.php';

class ErrorController extends Zend_Controller_Action
{
	/**
	 * Handle errors
	 * 
	 * @return void
	 */
	public function errorAction()
	{
		$errors = $this->_getParam('error_handler', false);
		if (!$errors) {
			// Unknown application error
			return $this->render('500');
		}
		
		switch ($errors->type) {
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
				// Page not found (404) error
				$this->render('404');
				break;
			default:
				// Application (500) error
				$this->render('500');
				break;
		}
	}
}

?>