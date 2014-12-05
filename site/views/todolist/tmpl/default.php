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
            <br><?php echo 'Titolo'; ?>: <b><?php echo $this->item->titolo; ?></b>
            <br><?php echo 'Descrizione'; ?>: <b><?php echo $this->item->descrizione; ?></b>
            <br><?php echo 'Data'; ?>: <?php echo $this->item->data; ?>
    </div>
<?php endif; ?>