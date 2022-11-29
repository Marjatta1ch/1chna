<?php
/***************************************************************************
 *                          lang_main_album.php [Russian]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
 *     translated           : tankmod, tankmod@yandex.ru, modelizm.net.ru
 *
 *     $Id: lang_main_album.php,v 1.0.6 2003/03/05 20:12:38 ngoctu Exp $
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

//--- Album Category Hierarchy : begin
//--- version : 1.10
include($phpbb_root_path.'language/lang_russian/lang_hierarchy_album.' . $phpEx);
//--- Album Category Hierarchy : end


//
// Album Index
//
$lang['Photo_Album'] = '����������';
$lang['Pics'] = '����';
$lang['Last_Pic'] = '��������� ����';
$lang['Public_Categories'] = '����� ���������';
$lang['No_Pics'] = '��� ����';
$lang['Users_Personal_Galleries'] = '������ ������� �������������';
$lang['Your_Personal_Gallery'] = '���� ������ �������';
$lang['Recent_Public_Pics'] = '��������� ����������';
$lang['Highest_Rated_Pics'] = '������ ����������';
$lang['Random_Pics'] = '��������� ����������';

$lang['View'] = '��������';

//
// Category View
//
$lang['Category_not_exist'] = '��������� �� ����������';
$lang['Upload_Pic'] = '�������� ����';
$lang['Pic_Title'] = '��������� ����';

$lang['Album_upload_can'] = '�� <b>������</b> ���������� ����� ���� � ���� ���������';
$lang['Album_upload_cannot'] = '�� <b>�� ������</b> ���������� ����� ���� � ���� ���������';
$lang['Album_rate_can'] = '�� <b>������</b> ��������� ���� � ���� ���������';
$lang['Album_rate_cannot'] = '�� <b>�� ������</b> ��������� ���� � ���� ���������';
$lang['Album_comment_can'] = '�� <b>������</b> ��������� ����������� � ���� ���������';
$lang['Album_comment_cannot'] = '�� <b>�� ������</b> ��������� ����������� � ���� ���������';
$lang['Album_edit_can'] = '�� <b>������</b> ���� ���� � ����������� � ���� ���������';
$lang['Album_edit_cannot'] = '�� <b>�� ������</b> ������������� ���� ���� � ����������� � ���� ���������';
$lang['Album_delete_can'] = '�� <b>������</b> ������� ���� ���� � ����������� � ���� ���������';
$lang['Album_delete_cannot'] = '�� <b>�� ������</b> ������� ���� ���� � ����������� � ���� ���������';
$lang['Album_moderate_can'] = '�� <b>������</b> %s������������%s ��� ���������';

$lang['Edit_pic'] = '�������������';
$lang['Delete_pic'] = '�������';
$lang['Rating'] = '������';
$lang['Comments'] = '�����������';
$lang['New_Comment'] = '����� �����������';

$lang['Not_rated'] = '<i>��� ������</i>';

//
// Upload
//
$lang['Pic_Desc'] = '�������� ����';
$lang['Plain_text_only'] = '������ �����';
$lang['Max_length'] = '����.����� (����)';
$lang['Upload_pic_from_machine'] = '�������� ���� � ������ ����������';
$lang['Upload_to_Category'] = '�������� � ���������';
$lang['Upload_thumbnail_from_machine'] = '�������� ������ � ������ ���������� (������ ��������� � ����� ����)';
$lang['Upload_thumbnail'] = '�������� �����������';
$lang['Upload_thumbnail_explain'] = '��� ����� ������ ���������';
$lang['Thumbnail_size'] = '������ ����������� (������)';
$lang['Filetype_and_thumbtype_do_not_match'] = '���� ���� � ����������� ������ ���� ������ ����';

$lang['Upload_no_title'] = '�� ������ ������ ���������';
$lang['Upload_no_file'] = '�� ������ ������ ��� ����� � ���� � ����';
$lang['Desc_too_long'] = '���� �������� ������� �������';

$lang['Max_file_size'] = '������������ ������ ����� (����)';
$lang['Max_width'] = '������������ ������ (������)';
$lang['Max_height'] = '������������ ������ (������)';

$lang['JPG_allowed'] = '��������� JPG';
$lang['PNG_allowed'] = '��������� PNG';
$lang['GIF_allowed'] = '��������� GIF';

$lang['Album_reached_quota'] = '��� ��������� ��������� ����� �����������. �� �� ������ ������ ����������. ��������� � ��������������� ��� ������� ����������';
$lang['User_reached_pics_quota'] = '�� ��������� ����� ����������. �� �� ������ ������ ����������. ��������� � ��������������� ��� ������� ����������';

$lang['Bad_upload_file_size'] = '����������� ���� ������� ������� ��� ���������';
$lang['Not_allowed_file_type'] = '��� ����� �� ��������';
$lang['Upload_image_size_too_big'] = '������ ���� ������� �������';
$lang['Upload_thumbnail_size_too_big'] = '������ ����������� ������� �������';

$lang['Missed_pic_title'] = '�� ������ ������ ���������';

$lang['Album_upload_successful'] = '���� ���� ������� ��������';
$lang['Album_upload_need_approval'] = '���� ���� ������� ��������.<br /><br />�������� ���������� ��������, ���� ���� ������ ���� ��������� ��������������� ��� ����������� ����� �����������';
$lang['Click_return_category'] = '������� %s�����%s ��� �������� � ���������';
$lang['Click_return_album_index'] = '������� %s�����%s ��� �������� � ������� ��������';

// View Pic
$lang['Pic_not_exist'] = '���� �� ����������';

// Edit Pic
$lang['Edit_Pic_Info'] = '������������� ���������� � ����';
$lang['Pics_updated_successfully'] = '���������� � ���� ������� ���������';

// Delete Pic
$lang['Album_delete_confirm'] = '�� ������ ������� ��� ����?';
$lang['Pics_deleted_successfully'] = '���������� �������';

//
// ModCP
//
$lang['Approval'] = '��������';
$lang['Approve'] = '���������';
$lang['Unapprove'] = '���������';
$lang['Status'] = '���������';
$lang['Locked'] = '�������������';
$lang['Not_approved'] = '�� ���������';
$lang['Approved'] = '���������';
$lang['Move_to_Category'] = '����������� � ���������';
$lang['Pics_moved_successfully'] = '���� ���� ������� ����������';
$lang['Pics_locked_successfully'] = '���� ���� ������� �������������';
$lang['Pics_unlocked_successfully'] = '���� ���� ������� ��������������';
$lang['Pics_approved_successfully'] = '���� ���� ������� ���������';
$lang['Pics_unapproved_successfully'] = '���� ���� ������� ���������';

//
// Rate
//
$lang['Current_Rating'] = '������';
$lang['Please_Rate_It'] = '�������';
$lang['Already_rated'] = '�� ��� ������� ��� ����';
$lang['Album_rate_successfully'] = '���� ������� �������';

//
// Comment
//
$lang['Comment_no_text'] = '�� ������ ������ �����������';
$lang['Comment_too_long'] = '��� ����������� ������ �������';
$lang['Comment_delete_confirm'] = '������� �����������?';
$lang['Pic_Locked'] = '��������, ���� �������������. �� ������ �� ������ ��������� �����������';

//
// Personal Gallery
//
$lang['Personal_Gallery_Explain'] = '�� ������ ������������� ������ ������� ������ �������������, ����� �� ������ � �� �������';
$lang['Personal_gallery_not_created'] = '������ ������� %s ����� ��� �� ���� �������';
$lang['Not_allowed_to_create_personal_gallery'] = '��������, ������ ��������������� ��������� ��������� ������ �������';
$lang['Click_return_personal_gallery'] = '������� %s�����%s ��� �������� � ������ �������';

/* Album Hierarchy - START */
$lang['Last_Comments'] = '��������� �����������';
$lang['No_Comment_Info'] = '��� ������������';
$lang['No_Pictures_In_Cat']= '��� ���� � ���� ���������';
$lang['Total_Pics'] = '����� ����';
$lang['Total_Comments'] = '����� ������������';
$lang['Last_Index_Thumbnail'] = '��������� ����';
$lang['Sub_Total_Pics'] = '����� ����';
/* Album Hierarchy - STOP  */
/* Album Hierarchy - START */ 
$lang['Album_sub_categories'] = '������������';
/* Album Hierarchy - STOP  */ 

?>
