<?php

// eXtreme Styles mod cache. Generated on Sat, 10 Dec 2011 09:31:03 -0500 (time=1323527463)

?>/***************************************************************************
 *						def_tree_def.php
 *						----------------
 *	begin			: 12/11/2003
 *	copyright		: Ptirhiik
 *	email			: admin@rpgnet-fr.com
 *
 *	version			: 1.0.0 - 12/11/2003
 *
 *	last update		: <?php echo isset($this->vars['TIME']) ? $this->vars['TIME'] : $this->lang('TIME'); ?> by <?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?>
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
	exit;
}

//--------------------------------------------------------------------------------------------------
//
// $tree : designed to get all the hierarchy
// ------
//
//	indexes :
//		- id : full designation : ie Root, f3, c20
//		- idx : rank order
//
//	$tree['keys'][id]			=> idx,
//	$tree['type'][idx]			=> type of the row, can be 'c' for categories or 'f' for forums,
//	$tree['id'][idx]			=> value of the row id : cat_id for cats, forum_id for forums,
//	$tree['data'][idx]			=> db table row,
//	$tree['main'][idx]			=> parent id,
//	$tree['sub'][id]			=> array of sub-level ids,
//--------------------------------------------------------------------------------------------------

$tree = array(
			'keys'	=> array(<?php echo isset($this->vars['KEYS']) ? $this->vars['KEYS'] : $this->lang('KEYS'); ?>),
			'type'	=> array(<?php echo isset($this->vars['TYPES']) ? $this->vars['TYPES'] : $this->lang('TYPES'); ?>),
			'id'	=> array(<?php echo isset($this->vars['IDS']) ? $this->vars['IDS'] : $this->lang('IDS'); ?>),
			'data'	=> array(
				<?php

$data_count = ( isset($this->_tpldata['data.']) ) ?  sizeof($this->_tpldata['data.']) : 0;
for ($data_i = 0; $data_i < $data_count; $data_i++)
{
 $data_item = &$this->_tpldata['data.'][$data_i];
 $data_item['S_ROW_COUNT'] = $data_i;
 $data_item['S_NUM_ROWS'] = $data_count;

?>
				array(
					<?php

$field_count = ( isset($data_item['field.']) ) ? sizeof($data_item['field.']) : 0;
for ($field_i = 0; $field_i < $field_count; $field_i++)
{
 $field_item = &$data_item['field.'][$field_i];
 $field_item['S_ROW_COUNT'] = $field_i;
 $field_item['S_NUM_ROWS'] = $field_count;

?>
					'<?php echo isset($field_item['FIELD_NAME']) ? $field_item['FIELD_NAME'] : ''; ?>'	=> '<?php echo isset($field_item['FIELD_VALUE']) ? $field_item['FIELD_VALUE'] : ''; ?>',
					<?php

} // END field

if(isset($field_item)) { unset($field_item); } 

?>
				),
				<?php

} // END data

if(isset($data_item)) { unset($data_item); } 

?>
			),
			'main'	=> array(<?php echo isset($this->vars['MAINS']) ? $this->vars['MAINS'] : $this->lang('MAINS'); ?>),
			'sub'	=> array(
				<?php

$sub_count = ( isset($this->_tpldata['sub.']) ) ?  sizeof($this->_tpldata['sub.']) : 0;
for ($sub_i = 0; $sub_i < $sub_count; $sub_i++)
{
 $sub_item = &$this->_tpldata['sub.'][$sub_i];
 $sub_item['S_ROW_COUNT'] = $sub_i;
 $sub_item['S_NUM_ROWS'] = $sub_count;

?>
				'<?php echo isset($sub_item['THIS']) ? $sub_item['THIS'] : ''; ?>'	=> array(<?php echo isset($sub_item['SUBS']) ? $sub_item['SUBS'] : ''; ?>),
				<?php

} // END sub

if(isset($sub_item)) { unset($sub_item); } 

?>
			),
			'mods'	=> array(
				<?php

$mods_count = ( isset($this->_tpldata['mods.']) ) ?  sizeof($this->_tpldata['mods.']) : 0;
for ($mods_i = 0; $mods_i < $mods_count; $mods_i++)
{
 $mods_item = &$this->_tpldata['mods.'][$mods_i];
 $mods_item['S_ROW_COUNT'] = $mods_i;
 $mods_item['S_NUM_ROWS'] = $mods_count;

?>
				<?php echo isset($mods_item['IDX']) ? $mods_item['IDX'] : ''; ?> => array(
					'user_id'		=> array(<?php echo isset($mods_item['USER_IDS']) ? $mods_item['USER_IDS'] : ''; ?>),
					'username'		=> array(<?php echo isset($mods_item['USERNAMES']) ? $mods_item['USERNAMES'] : ''; ?>),
					'group_id'		=> array(<?php echo isset($mods_item['GROUP_IDS']) ? $mods_item['GROUP_IDS'] : ''; ?>),
					'group_name'	=> array(<?php echo isset($mods_item['GROUP_NAMES']) ? $mods_item['GROUP_NAMES'] : ''; ?>),
				),
				<?php

} // END mods

if(isset($mods_item)) { unset($mods_item); } 

?>
			),
);