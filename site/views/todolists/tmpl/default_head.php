<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?><tr>
	<th width="5">
		<?php echo JText::_('COM_TODOLIST_TODOLIST_HEADING_ID'); ?>
	</th>
	<th width="20">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>			
	<th>
		<?php echo JHTML::_('grid.sort', 'TITOLO', 'titolo', $this->sortDirection, $this->sortColumn ); ?>
	</th>
	<th>
			<?php echo JHTML::_('grid.sort', 'DESCRIZIONE', 'descrizione', $this->sortDirection, $this->sortColumn ); ?>
	
	</th>
	<th>
			<?php echo JHTML::_('grid.sort', 'DATA', 'data', $this->sortDirection, $this->sortColumn ); ?>
	
	</th>
</tr>

