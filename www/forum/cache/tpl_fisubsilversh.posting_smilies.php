<?php

// eXtreme Styles mod cache. Generated on Mon, 06 Jul 2015 14:03:01 -0400 (time=1436205781)

?><script language="javascript" type="text/javascript">
<!--
function emoticon(text) {
	text = ' ' + text + ' ';
	if (opener.document.forms['post'].message.createTextRange && opener.document.forms['post'].message.caretPos) {
		var caretPos = opener.document.forms['post'].message.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		opener.document.forms['post'].message.focus();
	} else {
	opener.document.forms['post'].message.value  += text;
	opener.document.forms['post'].message.focus();
	}
}
//-->
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class="forumline">
<tr>
<th><?php echo isset($this->vars['L_EMOTICONS']) ? $this->vars['L_EMOTICONS'] : $this->lang('L_EMOTICONS'); ?></th>
</tr>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<?php

$smilies_row_count = ( isset($this->_tpldata['smilies_row.']) ) ?  sizeof($this->_tpldata['smilies_row.']) : 0;
for ($smilies_row_i = 0; $smilies_row_i < $smilies_row_count; $smilies_row_i++)
{
 $smilies_row_item = &$this->_tpldata['smilies_row.'][$smilies_row_i];
 $smilies_row_item['S_ROW_COUNT'] = $smilies_row_i;
 $smilies_row_item['S_NUM_ROWS'] = $smilies_row_count;

?>
<tr align="center">
<?php

$smilies_col_count = ( isset($smilies_row_item['smilies_col.']) ) ? sizeof($smilies_row_item['smilies_col.']) : 0;
for ($smilies_col_i = 0; $smilies_col_i < $smilies_col_count; $smilies_col_i++)
{
 $smilies_col_item = &$smilies_row_item['smilies_col.'][$smilies_col_i];
 $smilies_col_item['S_ROW_COUNT'] = $smilies_col_i;
 $smilies_col_item['S_NUM_ROWS'] = $smilies_col_count;

?>
<td>
<a href="javascript:emoticon('<?php echo isset($smilies_col_item['SMILEY_CODE']) ? $smilies_col_item['SMILEY_CODE'] : ''; ?>')"><img src="<?php echo isset($smilies_col_item['SMILEY_IMG']) ? $smilies_col_item['SMILEY_IMG'] : ''; ?>" alt="<?php echo isset($smilies_col_item['SMILEY_DESC']) ? $smilies_col_item['SMILEY_DESC'] : ''; ?>" border="0" title="<?php echo isset($smilies_col_item['SMILEY_DESC']) ? $smilies_col_item['SMILEY_DESC'] : ''; ?>" /></a></td>
<?php

} // END smilies_col

if(isset($smilies_col_item)) { unset($smilies_col_item); } 

?>
</tr>
<?php

} // END smilies_row

if(isset($smilies_row_item)) { unset($smilies_row_item); } 

?>
<?php

$switch_smilies_extra_count = ( isset($this->_tpldata['switch_smilies_extra.']) ) ?  sizeof($this->_tpldata['switch_smilies_extra.']) : 0;
for ($switch_smilies_extra_i = 0; $switch_smilies_extra_i < $switch_smilies_extra_count; $switch_smilies_extra_i++)
{
 $switch_smilies_extra_item = &$this->_tpldata['switch_smilies_extra.'][$switch_smilies_extra_i];
 $switch_smilies_extra_item['S_ROW_COUNT'] = $switch_smilies_extra_i;
 $switch_smilies_extra_item['S_NUM_ROWS'] = $switch_smilies_extra_count;

?>
<tr align="center">
<td class="nav" colspan="<?php echo isset($this->vars['S_SMILIES_COLSPAN']) ? $this->vars['S_SMILIES_COLSPAN'] : $this->lang('S_SMILIES_COLSPAN'); ?>"><a href="<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>" onclick="open_window('<?php echo isset($this->vars['U_MORE_SMILIES']) ? $this->vars['U_MORE_SMILIES'] : $this->lang('U_MORE_SMILIES'); ?>', 250, 300);return false" target="_smilies"><?php echo isset($this->vars['L_MORE_SMILIES']) ? $this->vars['L_MORE_SMILIES'] : $this->lang('L_MORE_SMILIES'); ?></a>
</td>
</tr>
<?php

} // END switch_smilies_extra

if(isset($switch_smilies_extra_item)) { unset($switch_smilies_extra_item); } 

?>
</table>
</td>
</tr>
<tr>
<td class="genmed" align="center"><br />
<a href="javascript:window.close();"><?php echo isset($this->vars['L_CLOSE_WINDOW']) ? $this->vars['L_CLOSE_WINDOW'] : $this->lang('L_CLOSE_WINDOW'); ?></a>
</td>
</tr>
</table>
</td>
</tr>
</table>
