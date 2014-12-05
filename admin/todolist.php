<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import joomla controller library
jimport('joomla.application.component.controller');

// require helper file
JLoader::register('todolistHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'todolist.php');


// Get an instance of the controller prefixed by Todolist
$controller = JController::getInstance('todolist');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
