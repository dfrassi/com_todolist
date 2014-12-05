<?php
/**
 * @version     1.0.0
 * @package     com_prova
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      David <info@davidfrassi.it> - http://www.davidfrassi.it
 */

// No direct access.
defined('_JEXEC') or die;

//jimport('joomla.application.component.modelform');
jimport('joomla.event.dispatcher');

/**
 * Prova model.
 */
class todolistModeltodolist extends JModel
{

	var $_item = null;

	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @since	1.6
	 */
	protected function populateState()
	{
		
		$app = JFactory::getApplication('com_todolist');
		$id = JRequest::getInt('id');
		$id = str_pad($id, 6, "0", STR_PAD_LEFT);
		$this->setState('todolist.id', $id);
		$params = $app->getParams();
		$this->setState('params', $params);

	}


	/**
	 * Method to get an ojbect.
	 *
	 * @param	integer	The id of the object to get.
	 *
	 * @return	mixed	Object on success, false on failure.
	 */
	public function &getData($id = null)
	{
		if ($this->_item === null)
		{
			$this->_item = false;

			if (empty($id)) {
				$id = $this->getState('todolist.id');
			}

			// Get a level row instance.
			$table = $this->getTable();

			// Attempt to load the row.
			if ($table->load($id))
			{
				// Check published state.
				if ($published = $this->getState('filter.published'))
				{
					if ($table->state != $published) {
						return $this->_item;
					}
				}

				// Convert the JTable to a clean JObject.
				$properties = $table->getProperties(1);
				$this->_item = JArrayHelper::toObject($properties, 'JObject');
			} elseif ($error = $table->getError()) {
				$this->setError($error);
			}
		}

		return $this->_item;
	}

	public function getTable($type = 'todolist', $prefix = 'todolistTable', $config = array())
	{
		$this->addTablePath(JPATH_COMPONENT_ADMINISTRATOR.'/tables');
		return JTable::getInstance($type, $prefix, $config);
	}
}
