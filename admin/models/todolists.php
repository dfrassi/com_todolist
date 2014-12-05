<?php

// No direct access to this file
defined ( '_JEXEC' ) or die ( 'Restricted access' );

// import the Joomla modellist library
jimport ( 'joomla.application.component.modellist' );

/**
 * Todolists Model
 */
class todolistModeltodolists extends JModelList {
	
	public function __construct($config = array()) {
		
		if (empty ( $config ['filter_fields'] )) {
			$config ['filter_fields'] = array (
					'id',
					'titolo',
					'descrizione',
					'data'
			);
		}
		parent::__construct ( $config );
	}
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return string SQL query
	 */
	protected function getListQuery() {
		// Create a new query object.
		$db = JFactory::getDBO ();
		$query = $db->getQuery ( true );
		$search = $this->getState('filter.search');
		$search_escape = $db->quote( '%'.$db->escape( $search, true ).'%', false );
		
		if (!empty($search)){
			$query->where("titolo like ".$search_escape);
		}
		// Select some fields
		$query->select ( '*' );
		
		// From the todo table
		$query->from ( '#__todolist' );
		
		$query->order($this->getState('list.ordering', 'titolo').' '.$this->getState('list.direction', 'ASC'));
		
		
		
		return $query;
	}
	
	protected function populateState($ordering = null, $direction = null)
	{
		parent::populateState();
		
		$search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		
		// Get list limit
		$app = JFactory::getApplication();
		$itemid = JRequest::getInt('Itemid', 0);
		$limit = $app->getUserStateFromRequest('com_todolist.todolists.list' . $itemid . '.limit', 'limit', 10, 'uint');
		$this->setState('list.limit', $limit);
	
	}
	
	
}
