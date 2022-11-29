<?php
/***************************************************************************
 *		lang_extend_categories_hierarchy.php [Russian]
 *		------------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *  translated          : i_am_d, alexey@phpbb2.ru :: RENATA WEB SYSTEMS :: http://renatasystems.org (C) 2005
 *
 *	version				: 1.0.1 - 10/11/2003
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
/* CONTRIBUTORS
   ���������� �� �������: ������ �������. tankmod@yandex.ru,
*/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_categories_hierarchy'] = '�������� ���������';

	$lang['Category_attachment'] = '����������� �';
	$lang['Category_desc'] = '��������';
	$lang['Category_config_error_fixed'] = '������ � ��������� ��������� ����������';
	$lang['Attach_forum_wrong'] = '�� �� ������ ���������� ����� � ������';
	$lang['Attach_root_wrong'] = '�� �� ������ ���������� ����� � ������ �������';
	$lang['Forum_name_missing'] = '�� �� ������ ��������� ����� ��� ��������';
	$lang['Category_name_missing'] = '�� �� ������ ��������� ��������� ��� ��������';
	$lang['Only_forum_for_topics'] = '���� ����� ���� ������ � �������';
	$lang['Delete_forum_with_attachment_denied'] = '�� �� ������ ������� ������ � �����������';

	$lang['Category_delete'] = '������� ���������';
	$lang['Category_delete_explain'] = '����� ���� �������� ��� ������� ��������� � ����������� ��� ������ � ���������.';

	// forum links type
	$lang['Forum_link_url'] = 'URL ������';
	$lang['Forum_link_url_explain'] = '�� ������ ������� URI � phpBB prog, ��� ������ URL �� ������ ������';
	$lang['Forum_link_internal'] = '������ phpBB';
	$lang['Forum_link_internal_explain'] = '������� ��, ���� �� ���������� ��������� � ����� phpBB';
	$lang['Forum_link_hit_count'] = '�������';
	$lang['Forum_link_hit_count_explain'] = '�������� ��, ���� �� ������ ������� ����� ��������� �� ������';
	$lang['Forum_link_with_attachment_deny'] = '�� �� ������ ������� ����� ��� ������, ���� �� �������� ���������';
	$lang['Forum_link_with_topics_deny'] = '�� �� ������ ������� ����� ��� ������, ���� �� ��� �������� ����';
	$lang['Forum_attached_to_link_denied'] = '�� �� ������ ����������� ����� ��� ��������� � ������';

	$lang['Manage_extend'] = '���������� +';
	$lang['No_subforums'] = '��� ����������';
	$lang['Forum_type'] = '�������� ������ �����';
	$lang['Presets'] = '�����������������';
	$lang['Refresh'] = '��������';
	$lang['Position_after'] = '������� ������ �����';
	$lang['Link_missing'] = '������ ��������';
	$lang['Category_with_topics_deny'] = '� ���� ������ ���� ����. �� �� ������ ������� ��� � ���������.';
	$lang['Recursive_attachment'] = '�� �� ������ ����������� ����� � ������ ���� ���';
	$lang['Forum_with_attachment_denied'] = '�� �� ������ ������� ��������� � �������������� �������� � �����';
	$lang['icon'] = '������';
	$lang['icon_explain'] = '������ ����� ������� ����� ���������� �������. �� ������ ���������� URI ��� $image[] (�������� <i>your_template</i>/<i>your_template</i>.cfg).';
}

$lang['Forum_link'] = '������������� ������';
$lang['Forum_link_visited'] = '������ �������� %d ���';
$lang['Redirect'] = '���������������';
$lang['Redirect_to'] = '����� ��� ������� �� ������������ ����-���������������, �� ������� %s�����% ��� ���������������';

$lang['Use_sub_forum'] = '�������� ������� ��������';
$lang['Hierarchy_setting'] = '��������� �������� ���������';
$lang['Index_packing_explain'] = '�������� ������� ��������';
$lang['Medium'] = '�������';
$lang['Full'] = '������';
$lang['Split_categories'] = '��������� ���������';
$lang['Use_last_topic_title'] = '���������� ��������� ����';
$lang['Last_topic_title_length'] = '����� ��������� ��������� ����';
$lang['Sub_level_links'] = '������ ������� ������';
$lang['Sub_level_links_explain'] = '�������� ��������� � ������ ��� ���������';
$lang['With_pics'] = '�� ��������';
$lang['Display_viewonline'] = '���������� ��� ������';
$lang['Never'] = '�������';
$lang['Root_index_only'] = '������ �� ������� ��������';
$lang['Always'] = '������';
$lang['Subforums'] = '���������';
//-- mod : today at   yesterday at ------------------------------------------------------------------------ 
//-- add 
$lang['Today_at'] = '<b>�������</b> � %s'; // %s is the time
$lang['Yesterday_at'] = '<b>�����</b> � %s'; // %s is the time
//-- end mod : today at   yesterday at ------------------------------------------------------------------------ 

?>
