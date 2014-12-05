<?php

/**
 * @version     1.0.0
 * @package     com_prova
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      David <info@davidfrassi.it> - http://www.davidfrassi.it
 */
// No direct access
defined ( '_JEXEC' ) or die ();

jimport ( 'joomla.application.component.view' );

/**
 * View to edit
 */
class todolistViewtodolist extends JView {
	
	/**
	 * Display the view
	 */
	public function display($tpl = null) {
		$app = JFactory::getApplication ();
		$user = JFactory::getUser ();
		
		$this->state = $this->get ( 'State' );
		$this->item = $this->get ( 'Data' );
		$this->form = $this->get ( 'Form' );
		$this->params = $app->getParams ( 'com_todolist' );
		
		if (count ( $errors = $this->get ( 'Errors' ) )) {
			JError::raiseError ( 500, implode ( "\n", $errors ) );
			return false;
		}
		
		if (! $this->item->id) {
			JError::raiseError ( 404, JText::_ ( 'Item not found' ) );
			return false;
		}
		
		parent::display ( $tpl );
	}
}
