<?php
class Jay_Blog_IndexController extends Mage_Core_Controller_Front_Action {
	/**
	 * Index action
	 */
	public function indexAction() {
		$this->loadLayout ();
		$this->renderLayout ();
	}
}