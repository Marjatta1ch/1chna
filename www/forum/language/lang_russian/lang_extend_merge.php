<?php
/***************************************************************************
 *			lang_extend_merge.php [Russian]
 *			-------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.1 - 21/10/2003
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
        $lang['Lang_extend_merge'] = '����������� ���';
}

$lang['Refresh'] = '��������';
$lang['Merge_topics'] = '���������� ����';
$lang['Merge_title'] = '����� �������� ����';
$lang['Merge_title_explain'] = '��� ����� ��������� �������� ����. �������� ���� ������, ���� �� ������ �������� �������� ���� ����������';
$lang['Merge_topic_from'] = '���� ��� �����������';
$lang['Merge_topic_from_explain'] = '��� ���� ����� ���������� � ������. �� ������ ������ id ����, ������ ����(URL), �� ������ �� ��������� � ���� ����.';
$lang['Merge_topic_to'] = '���� ����������';
$lang['Merge_topic_to_explain'] = '��� ���� ������� ��� ��������� �������������� ����. �� ������ ������ id ����, ������ ����(URL), �� ������ �� ��������� � ���� ����.';
$lang['Merge_from_not_found'] = '���� ��� ����������� �� ���� �������.';
$lang['Merge_to_not_found'] = '���� ���������� �� ���� �������';
$lang['Merge_topics_equals'] = '�� �� ������ ���������� ���� � �� �� ����.';
$lang['Merge_from_not_authorized'] = '�� �� ������������ ��� ��������� ���.';
$lang['Merge_to_not_authorized'] =  '�� �� ������������ ��� ��������� ���.';
$lang['Merge_poll_from'] = '� �������������� ���� �������� �����. �� ����� ����� ��������� � ���� ����������.';
$lang['Merge_poll_from_and_to'] = '���� ���������� ��� ����� �����. ����� �������������� ���� ����� �����';
$lang['Merge_confirm_process'] = '�� �������, ��� ������ ���������� <br />"<b>%s</b>"<br />to<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = '���� ���� ������� ����������.';

?>
