<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * Todolists View
 */
class todolistViewtodolists extends JView
{
	/**
	 * Todolists view display method
	 * @return void
	 */
	
	
	
	function display($tpl = null) 
	{
		// Get data from the model
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');
		
		$state = $this->get('State');
		$this->state		= $this->get('State');
		$this->sortDirection = $state->get('list.direction');
		$this->sortColumn = $state->get('list.ordering');
		
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Assign data to the view
		$this->items = $items;
		$this->pagination = $pagination;

		
		$this->addToolBar();
		
		// Display the template
		parent::display($tpl);
	}
	
	protected function addToolBar()
	{
		JToolBarHelper::title(JText::_('COM_TODOLIST_MANAGER_TODOLISTS'),'todolist');
		JToolBarHelper::deleteListX('', 'todolists.delete');
		JToolBarHelper::editListX('todolist.edit');
		JToolBarHelper::preferences('com_todolist');
		JToolBarHelper::addNewX('todolist.add');
	}
}
