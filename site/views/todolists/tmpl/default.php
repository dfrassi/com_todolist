<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

// load tooltip behavior
JHtml::_('behavior.tooltip');
$search = $this->escape($this->state->get('filter.search'));
?>
<form action="<?php echo JRoute::_('index.php?option=com_todolist'); ?>" method="post" name="adminForm">


 <div style="padding:10px;">
            <label for="filter_search"><?php echo JText::_('JSEARCH_FILTER_LABEL'); ?></label>
            <input type="text" name="filter_search" id="filter_search" value="<?php echo $search; ?>" 
               title="<?php echo JText::_('COM_TODOLIST_RICERCA'); ?>" />
            <button type="submit"><?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?></button>
            <button type="button" onclick="document.id('filter_search').value='';this.form.submit();">
               <?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>
            </button>
</div>



	<table class="category">
		<thead><?php echo $this->loadTemplate('head');?></thead>
		<tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
		<tbody><?php echo $this->loadTemplate('body');?></tbody>
	</table>
	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		 <input type="hidden" name="filter_order" value="<?php echo $this->sortColumn; ?>" />
        <input type="hidden" name="filter_order_Dir" value="<?php echo $this->sortDirection; ?>" />
      
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
