<?php
/***************************************************************************
 *  	        lang_extend_topic_calendar.php [�������]
 *		------------------------------
 *	������				: 28/09/2003
 *	��������			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	������				: 1.0.0 - 28/09/2003
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
	$lang['Lang_extend_topic_calendar'] = '���������';
}

$lang['Calendar'] = '���������';
$lang['Calendar_scheduler'] = '�����������';
$lang['Calendar_event'] = '����������� �������';
$lang['Calendar_from_to'] = '� %s �� %s (�������)';
$lang['Calendar_time'] = '%s';
$lang['Calendar_duration'] = '�';

$lang['Calendar_settings'] = '��������� ���������';
$lang['Calendar_week_start'] = '������ ���� ������';
$lang['Calendar_header_cells'] = '����� ����� ��� ����������� � ���������<br />(0 ����� �� ������������)';
$lang['Calendar_title_length'] = '����� �������� � ����������� �������';
$lang['Calendar_text_length'] = '����� ������ ������������ � ������� ������';
$lang['Calendar_display_open'] = '���������� ��������� ��������';
$lang['Calendar_nb_row'] = '���������� ������� � ���� � �������� ������';
$lang['Calendar_birthday'] = '���������� ��� �������� � ���������';
$lang['Calendar_forum'] = '���������� �������� ������ ��� ��������� ���� � ������������';

$lang['Sorry_auth_cal'] = '��������, �� ������ %s ����� ��������� ������� � ���� ������.';
$lang['Date_error'] = '���� %d, ����� %d, ��� %d �������� ����';

$lang['Event_time'] = '���� �������';
$lang['Minutes'] = '�����';
$lang['Today'] = '�������';
$lang['All_events'] = '��� �������';

$lang['Rules_calendar_can'] = '�� <b>������</b> ��������� ����������� ������� � ���� ������';
$lang['Rules_calendar_cannot'] = '�� <b>�� ������</b> ��������� ����������� ������� � ���� ������';
$lang['birthday_header'] = '� ��� �������� !';
$lang['birthday'] = '<b>%s</b> ������� �������� �� !';
?>
