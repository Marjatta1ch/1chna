<?php
/***************************************************************************
 *                            lang_admin_album.php [Russian]
 *                              -------------------
 *     begin                : Monday, 12.04.2006
 *     copyright            : 2006 modelizm.net.ru
 *     email                : tankmod@yandex.ru
 *     translated           : tankmod, tankmod@yandex.ru, modelizm.net.ru
 *     ICQ                  : 270180730
 *
 *     $Id: lang_admin_album.php,v 1.0.6 2003/03/05 00:21:55 ngoctu Exp $
 *
 ****************************************************************************/

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

// phpBB2 Plus 1.53 Final Language File Build 

//--- Album Category Hierarchy : begin
//--- version : 1.10
include($phpbb_root_path.'language/lang_russian/lang_hierarchy_album.' . $phpEx);
//--- Album Category Hierarchy : end

//
// Configuration
//
$lang['Album_config'] = '������������ �������';
$lang['Album_config_explain'] = '�� ������ �������� �������� ��������� ������ ����������� �����';
$lang['Album_config_updated'] = '������������ ������� ������� ���������';
$lang['Click_return_album_config'] = '������� %s�����%s ��� �������� �� �������� ���������� ��������';
$lang['Max_pics'] = '�������� ���������� � ��������� (-1 = �����.)';
$lang['User_pics_limit'] = '����������� ���������� �� ������������ (-1 = �����.)';
$lang['Moderator_pics_limit'] = '����������� ���������� �� ���������� (-1 = �����.)';
$lang['Pics_Approval'] = '�������� ����������';
$lang['Rows_per_page'] = '����� ����� � ������ ����';
$lang['Cols_per_page'] = '����� ������� � ������ ����';
$lang['Thumbnail_quality'] = '�������� ������ (1-100)';
$lang['Thumbnail_cache'] = '��� ������';
$lang['Manual_thumbnail'] = '������ ������';
$lang['GD_version'] = '�������������� ��� ������ GD';
$lang['Pic_Desc_Max_Length'] = '�������� ����/����.����� (����)';
$lang['Hotlink_prevent'] = '����������� ������� ������';
$lang['Hotlink_allowed'] = '���������� ������� (���������� �������)';
$lang['Personal_gallery'] = '��������� ��������� ������ ������';
$lang['Personal_gallery_limit'] = '����������� ���������� � ������ ������� (-1 = �����.)';
$lang['Personal_gallery_view'] = '��� ����� ������������� ������ �����';
$lang['Rate_system'] = '�������� ������� ������';
$lang['Rate_Scale'] ='����� ������';
$lang['Comment_system'] = '�������� ������� ������������';
$lang['Thumbnail_Settings'] = '��������� �������';
$lang['Extra_Settings'] = '�������������';
$lang['Default_Sort_Method'] = '����� ����������';
$lang['Default_Sort_Order'] = '������� ����������';
$lang['Fullpic_Popup'] = '���������� ���������� � ����� ����';


// Personal Gallery Page
$lang['Personal_Galleries'] = '������ �������';
$lang['Album_personal_gallery_title'] = '������ �������';
$lang['Album_personal_gallery_explain'] = '�� ���� �������� �� ������ ������� ����� ������ ����� ����� �� �������� � �������� ������ �������. ��� ��������� ������ ������ ��� ���������� "�������." ��� "���������� ��������� ������ �����" ��� "��� ����� ������������� ������ �����" � ������������ �������';
$lang['Album_personal_successfully'] = '��������� ������� ���������';
$lang['Click_return_album_personal'] = '������� %s�����%s ��� �������� � �������� ��������� ������ �������';

//
// Categories
//
$lang['Album_Categories_Title'] = '���������� ����������� �������';
$lang['Album_Categories_Explain'] = '����� �� ������ �������� ���������: ��������, �������������, �������, ����������� � �.�.';
$lang['Category_Permissions'] = '���������� ���������';
$lang['Category_Title'] = '��������� ���������';
$lang['Category_Desc'] = '�������� ���������';
$lang['View_level'] = '������� ���������';
$lang['Upload_level'] = '������� �������';
$lang['Rate_level'] = '������� ������';
$lang['Comment_level'] = '������� �����������';
$lang['Edit_level'] = '������������� �������';
$lang['Delete_level'] = '������� �������';
$lang['New_category_created'] = '����� ��������� ������� �������';
$lang['Click_return_album_category'] = '������� %s�����%s ��� �������� � ������ ���������';
$lang['Category_updated'] = '��������� ���� ������� ���������';
$lang['Delete_Category'] = '������� ���������';
$lang['Delete_Category_Explain'] = '����� ���� �������� ��� ������� ��������� � �������, ��� ����������� ����������';
$lang['Delete_all_pics'] = '������� ��� ����������';
$lang['Category_deleted'] = '��������� ���� ������� �������';
$lang['Category_changed_order'] = '������� ��������� ������� �������';

//
// Permissions
//
$lang['Album_Auth_Title'] = '���������� �������';
$lang['Album_Auth_Explain'] = '����� �� ������ ������� ������, ������� ����� ������������ ��� ������ ������������� ��������� ��� ������ ������ �������';
$lang['Select_a_Category'] = '�������� ���������';
$lang['Look_up_Category'] = '��������� ���������';
$lang['Album_Auth_successfully'] = '������� ���������';
$lang['Click_return_album_auth'] = '������� %s�����%s ��� �������� �� �������� ����������';

$lang['Upload'] = '��������';
$lang['Rate'] = '�������';
$lang['Comment'] = '�����������';

//
// Clear Cache
//
$lang['Clear_Cache'] = '�������� ���';
$lang['Album_clear_cache_confirm'] = '���� �� ����������� ������� ���� ������, �� �� ������ �������� ��� ��� ����� ��������� �������� � ������������ ��� �� �����������.<br /><br /> �������� ��� ������?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />��� ��� ������� ������<br />&nbsp;';
?>
