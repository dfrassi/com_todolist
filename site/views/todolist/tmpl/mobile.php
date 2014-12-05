<?php
/**
 * @version     1.0.0
 * @package     com_prova
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      David <info@davidfrassi.it> - http://www.davidfrassi.it
 */
// no direct access
defined('_JEXEC') or die;
?>
<?php if( $this->item ) : ?>
    <div class="item_fields">
    
    <h1><?php echo JText::_ ( 'Dettaglio Item' ); ?></h1>
           	<p><?php echo 'Id'; ?>: <?php echo $this->item->id; ?>   	   
       </div>
<?php endif; ?>