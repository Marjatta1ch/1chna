<?php
/***************************************************************************
 *                          lang_hierarchy_album.php [Russian]
 *                          ------------------------
 *     begin                : Wednesday, May 12, 2004
 *     copyright            : (C) 2004 IdleVoid
 *     email                : idlevoid@slater.dk
 *
 *     version              : 1.0.2 12/08/2004
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

//
// Album Hierarchy Index Table
//
$lang ['Last_Comments'] = '��������� �����������';
$lang ['No_Comment_Info'] = '��� ������������';
$lang ['No_Pictures_In_Cat'] = '��� ����������� � ���������';
$lang ['Total_Pics'] = '����� �����������';
$lang ['Total_Comments'] = '����� ������������';
$lang ['Last_Index_Thumbnail'] = '��������� �����������';
$lang ['One_Sub_Total_Pics'] = ' (%d �����������)';
$lang ['Multiple_Sub_Total_Pics'] = ' (%d �����������)';
$lang ['Album_sub_categories'] = '������������';
$lang ['No_Public_Galleries'] = '��� ����� �������';
$lang ['One_new_picture'] = '%d ����� �����������';
$lang ['Multiple_new_pictures'] = '%d ����� �����������';
//
// Personal Album Hierarchy Index Table
//
$lang ['Personal_Categories'] = '������ �������';
$lang ['Personal_Cat_Admin'] = '����� ��������� ������ �������';
$lang ['Recent_Personal_Pics'] = '��������� ����������� � ������ ������� %s';
//
// Album Moderator Control Panel
//
$lang ['Modcp_check_all'] = '������� ���';
$lang ['Modcp_uncheck_all'] = '�������� �����';
$lang ['Modcp_inverse_selection'] = '������������� �����';

$lang ['Show_selected_pic_view_mode'] = '�������� ������ ��������� ��������� ������ �������';
$lang ['Show_all_pic_view_mode'] = '�������� ��� ����������� � ������ �������';

//
// Access language strings
//
$lang ['Album_Can_Manage_Categories'] = '�� <b>������</b> %s���������%s ����������� � �������';
$lang ['No_Personal_Category_admin'] = '�� �� ������ ��������� ����������� � �������';

// Upload message
$lang ['No_valid_category_selected'] = '�� ������� ���������� ��������� �������';

//
// The picture list of a member (album_mod/album_memberlist.php)
//
$lang ['Pic_Cat'] = '���������';
$lang['Picture_List_Of_User'] = '��� ����������� %s';
$lang ['Member_Picture_List_Explain'] = '�� ������ ������������� ������ �����������, ����������� ������� ��������������, ��������� ������ � �� ��������';
//--- version 1.3.0
$lang ['Comment_List_Of_User'] = '��� ����������� %s';
$lang ['Rating_List_Of_User'] = '��� ������ %s';
$lang ['Show_All_Pictures_Of_user'] = '�������� ��� ����������� %s';
$lang ['Show_All_Comments_Of_user'] = '�������� ��� ����������� %s';
$lang ['Show_All_Ratings_Of_user'] = '�������� ��� ������ %s';

$lang ['Not_commented'] = '<i>�� ����������������</i>';

/***************************************************************************
 * Album Hierarchy Administration                                          *
 ***************************************************************************/
//
// Configuration
//
$lang ['Album_config_notice'] = '���� �� ������ �����-���� ��������� � ������� ���������� � ����� ���������� �� ������ �������, � ��� ����� ��������� ������������� �� ���������� ���������. <br /> ������� <b>�� ���������</b>��������� �������������';
$lang ['Save_sucessfully_confimation'] = ' %s ��� ������� ��������';

$lang ['Show_Recent_In_Subcats'] = '�������� ��������� ����������� � �������������';
$lang ['Show_Recent_Instead_of_NoPics'] = '�������� ��������� �����������, ���� ��� ����������� ��� ������';

$lang ['Album_Index_Settings'] = '��������� ������ �������';
$lang ['Show_Index_Subcats'] = '�������� ������������ � �������';
$lang ['Show_Index_Thumb'] = '�������� ������ � ������� ���������';
$lang ['Show_Index_Pics'] = '�������� ���������� ����������� � ������� ��������� � �������';
$lang ['Show_Index_Comments'] = '�������� ���������� ������������ � ������� ��������� � �������';
$lang ['Show_Index_Total_Pics'] = '�������� �������� ���������� ����������� ��� ������� ��������� � ���� ������������ � �������';
$lang ['Show_Index_Total_Comments'] = '�������� �������� ���������� ������������ ��� ������� ��������� � ���� ������������ � �������';
$lang ['Show_Index_Last_Comment'] = '�������� ��������� ����������� ��� ������� ��������� � ���� ������������ � �������';
$lang ['Show_Index_Last_Pic'] = '�������� ���������� � ��������� ������������ ��� ������� ��������� � ���� ������������ � �������';
$lang ['Line_Break_Subcats'] = '�������� ������ ������������ �� ����� �����';

$lang ['Show_Personal_Gallery_Link'] = '�������� ������ ������� � ������� ������������� �������� � ������������';

$lang ['Album_Personal_Auth_Explain'] = '����� �� ������ �������, ����� ������ (�) ������������� ����� ���� ����������� ��� <b>����</b> ������ ��������� ������� ��� ������ ����� ������� ������ � ���';

$lang ['Album_debug_mode'] = '�������� ����� ������� ��������.<br><span class="gensmall">��� ���������� ����� �������������� ���������� �� �������� � ��������� ��������������� ���������.<br>����������� ��� ����� <b>������</b> ��� ������� �������.</span>';

$lang ['New_Pic_Check_Interval'] = '�����, � ������� �������� ����� ����������, ��� ����������� �������� �����.<br><span class="gensmall"><b>������</b>: &lt;�����&gt;&lt;���&gt; ��� ��� �������� H, D, W ��� M. (����, ���, ������ ��� ������).<br>�������� 12H = 12 �����, 12D = 12 ����, 12W = 12 ������, 12M = 12 �������.<br>���� ��� �� ������, ������� ���������� <b>���</b> �� ���������.</span>';
$lang ['New_Pic_Check_Interval_Desc'] = '<span class="gensmall">H = ����, D = ���, W = ������, � = ������</span>';
$lang ['Enable_Show_All_Pics'] = '�������� ������������ ������� ������ ������������� ������� (��� ����������� ��� ������ ��������� ���������).<br/>����� ����������� � <b>���</b>, �� ���������� ������ ��������� ���������.';
$lang ['Enable_Index_Supercells'] = '�������� ���������� ������ � �������.<br><span class="gensmall">�������� ������� ��������� ������� ���� �� �������, ����� ��������� ��� ������� �����������.</span>';

// Sorting
$lang ['Album_Category_Sorting'] = '���������� ��������� �������';
$lang ['Album_Category_Sorting_Id'] = '������������� (ID)';
$lang ['Album_Category_Sorting_Name'] = '���';
$lang ['Album_Category_Sorting_Order'] = '������� c��������� (�������� �� ���������)';
$lang ['Album_Category_Sorting_Direction'] = '����������� ���������� (��������� ������ ��� �������������� (ID) � �����)';
$lang ['Album_Category_Sorting_Asc'] = '�����������';
$lang ['Album_Category_Sorting_Desc'] = '��������';

// Upload 
$lang ['Upload_Settings'] = '��������� ��������';

// Personal Gallery
$lang ['Album_Personal_Settings'] = '��������� ��������� ������ �������';
$lang ['Show_Personal_Sub_Cats'] = '�������� ������ ������������ � �������';
$lang ['Personal_Gallery_MOD'] = '��������� ������������� ������ ������� ����������';
$lang ['Personal_Sub_Cat_Limit'] = '������������ ���������� ������������ (-1 = ��������������)';
$lang ['User_Can_Create_Personal_SubCats'] = '������������ ����� ��������� ������������ � ����������� ������ �������';

$lang ['Click_return_personal_gallery_index'] = '������� %s�����%s ��� �������� � ������� �������� ������ �������';

$lang ['Show_Recent_In_Personal_Subcats'] = '�������� ��������� ����������� � ������ �������������';
$lang ['Show_Recent_Instead_of_Personal_NoPics'] = '�������� ��������� ����������� ��� ��������� ����������� � ������ �������';

//
// Categories
//
$lang ['Personal_Root_Gallery'] = '�������� ��������� ������ �������';
$lang ['Parent_Category'] = '������������ ��������� (��� ���� ���������)';
$lang ['Child_Category_Moved'] = '��������� ��������� �������� �����������������. �������� ��������� ���� ���������� � <B>%s</B> ���������.';
$lang ['No_Self_Refering_Cat'] = '�� �� ������ ���������� ������������ ��������� ������ ����';
$lang ['Can_Not_Change_Main_Parent'] = '�� �� ������ �������� �� ������������ ������� ��������� ����� ������ �������';

//
// ACP - Javascript text
//
$lang ['acp_ask_save_changes'] = '�� ������������� ������ ��������� ���������? (OK = ��, ������ = ���)';
$lang ['acp_nothing_to_save'] = '������ ���������!';
$lang ['acp_settings_changed_ask_save'] = '�� �������� ��������� ���������. �� ������ �� ���������? (OK = ��, ������ = ���)';

?>
