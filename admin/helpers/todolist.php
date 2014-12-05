<?php

// No direct access to this file
defined('_JEXEC') or die;

/**
 * todolist component helper.
 */
abstract class todolistHelper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(JText::_('COM_TODOLIST_SUBMENU_MESSAGES'), 'index.php?option=com_todolist', $submenu == 'todolist');
		// set some global property
		$document = JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-todolist {background-image: url(../media/com_todolist/images/tux-48x48.png);}');
		
	}
	
}
