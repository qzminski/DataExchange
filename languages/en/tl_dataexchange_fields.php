<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright © 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Stefan Lindecke 2012
 * @author     Stefan Lindecke <stefan@chektrion.de>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['dcaField']   = array('DCA Field', 'Select if this field should be retrieved from DCA config.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['label']      = array('Label', 'Here you can set/override the field label');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['fieldQuery'] = array('Custom query', 'Enter an SQL query if you want to manually retrieve this field value.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['enabled']    = array('Export', 'Check here to include this field in the export.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['useFilter']  = array('Apply field filters', 'If the DCA list has a filter for this field, the result set is filtered based on its value.');


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['new']        = array('Add field', 'Add a new field to this configuration.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['edit']       = array('Edit field', 'Edit field ID %s');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['editheader'] = array('Edit configuration', 'Edit the configuration settings');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['copy']       = array('Copy field', 'Copy field ID %s');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['cut']        = array('Cut field', 'Cut field ID %s');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['delete']     = array('Delete field', 'Delete field ID %s');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['toggle']     = array('Toggle visibility');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['show']       = array('Show details', 'Show details of field ID %s');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['pasteafter'] = array('Paste on top', 'Paste after field ID %s');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['pastenew']   = array('Add new at the top', 'Add new after field ID %s');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['field_legend']  = 'Field settings';
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['config_legend'] = 'Configuration';

