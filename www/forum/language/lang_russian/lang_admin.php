<?php

/***************************************************************************
 *                            lang_admin.php [Russian]
 *                              -------------------
 *     begin                : 2006.04.12
 *     copyright            : (C) 2006 modelizm.net.ru
 *     email                : tankmod@yandex.ru
 *	 ICQ                  : 270180730
 *
 *     $Id: lang_admin.php,v 1.35.2.9 2003/06/10 00:31:19 psotfx Exp $
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

   ���������� �� �������: ������ �������. tankmod@yandex.ru, ICQ:270180730
*/


// phpBB2 Plus 1.53 final Language File Build 123

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//

$lang['General'] = '����� ���������';
$lang['Users'] = '������������';
$lang['Groups'] = '������';
$lang['Forums'] = '������';
$lang['Styles'] = '�����';
// EASYMOD-start
$lang['Modifications'] = '���-�����';
// EASYMOD-end

$lang['Configuration'] = '������������';
$lang['Configuration_plus'] = '������������ Plus';
$lang['Configuration_portal'] = '������������ �������';
$lang['Permissions'] = '����� �������';
$lang['Manage'] = '����������';
$lang['Disallow'] = '����������� �����';
$lang['Prune'] = '������';
$lang['Mass_Email'] = '�������� �������� �����';
$lang['Ranks'] = '������';
$lang['Smilies'] = '��������';
$lang['Ban_Management'] = '׸���� ������ (Ban)';
$lang['Word_Censor'] = '����������';
$lang['Export'] = '�������';
$lang['Create_new'] = '�������';
$lang['Add_new'] = '��������';
$lang['Backup_DB'] = '��������� ����� ��';
$lang['Restore_DB'] = '������������ ��';
$lang['DB_Maintenance'] = '������ ��';
// EASYMOD-start
$lang['MOD_ainstall'] = '���������� MOD�';
$lang['MOD_settings'] = '��������� EasyMOD';
$lang['MOD_history'] = '������� EasyMOD';
$lang['MOD_control_tag'] = '0.1.13';
// EASYMOD-end
//
// Custom Profile Fields MOD
//
$lang['custom_field_notice_admin'] = '��� ������ ���� ������� ���� ��� ������ ���������������. ��� �������������� ����������, ��������� ������ � ������� � ������������� ������. ������, ���������� � * �������� ���������� ������. ������, ���������� �  &dagger; ����� ������ �������.';

$lang['field_deleted'] = '��������� ���� ���� �������' ;
$lang['double_check_delete'] = '�� ���������, ��� ������ ������� �������(����) ������� "%s" �� ���� ������?';

$lang['here'] = 'Here';
$lang['new_field_link'] = '<a href="'.append_sid("$filename?mode=add&pfid=x").'">%s</a>';
$lang['edit_field_link'] = '<a href="'.append_sid("$filename?mode=edit&pfid=x").'">%s</a>';
$lang['index_link'] = '<a href="'.append_sid("admin_profile_fields.$phpEx?mode=edit&pfid=x").'">%s</a>';
$lang['field_exists'] = '��� ���� ��� ����������.<br /><br />�� ������ ��������� ������� ' . sprintf($lang['new_field_link'],'�����') . ' ���� � �������,<br /><br />or try ' . sprintf($lang['edit_field_link'],'editing') . ' ��� ���� ��� ��������.';
$lang['click_here_here'] = '������� ' . sprintf($lang['new_field_link'],$lang['here']) . ' ���� �������� ������ ���� � �������,<br /><br />��� ������� ' . sprintf($lang['index_link'],$lang['here']) . ' ���� ��������� �����.';
$lang['field_success'] = '���� ������� ����������!<br /><br />' . $lang['click_here_here'];
$lang['Custom_Profile'] = '���� � �������';
$lang['profile_field_created'] = '���� � ������� ��������';
$lang['profile_field_updated'] = '���� � ������� ���������';

$lang['add_field_title'] = '�������� ������� ���� � �������';
$lang['edit_field_title'] = '�������� ������� ���� � �������';
$lang['add_field_explain'] = '����� �� ������ ��������� ����� ������� (����) ��� ����� �������������, ����� ���������� � �� ��������.';
$lang['edit_field_explain'] = ' ����� �� ������ ������������� �������(����), ������� �� ��� ������� ��� ����� �������������, ����� ���������� � �� ��������.';

$lang['add_field_general'] = '����� ���������';
$lang['add_field_admin'] = '��������� ��������������';
$lang['add_field_view'] = '�������� ��������';
$lang['add_field_text_field'] = '��������� ��������� �����';
$lang['add_field_text_area'] = '��������� ��� ������';
$lang['add_field_radio_button'] = '��������� ��������������';
$lang['add_field_checkbox'] = '��������� ������� ������';

$lang['default_value'] = '�� ���������';
$lang['default_value_explain'] = '��� ��������� ���� �� ���������. ���� ������������ �� �������� ��������, �� ����� ������������ �������� �� ���������. ���� ��� ��������� ��������� ����, �� ��� ����� ������������ ��� ���� ������������ �������������.';
$lang['default_value_radio_explain'] = '�������� ���, ���������� ������ �� ��������� � ��������� ������� (����) ��������.';
$lang['default_value_checkbox_explain'] = '�������� �������� �� ���������. ��� ��������� ������ ��������� � ���������� � ����������� ������� ��������';
$lang['max_length'] = '������������ �����';
$lang['max_length_explain'] = '��� ������������ ����� ��� ����� ����.';
$lang['max_length_value'] = ' ��� ������ ���� ����� ����� %d � %d.';
$lang['available_values'] = '����������� ��������';
$lang['available_values_explain'] = 'Put each value on its own line';

$lang['add_field_view_disclaimer'] = '�� ����� ����� ������������ ����� ���������� ��� "no" ���� ������������� �� ��������� ����������� ��� �������(����) ';

$lang['add_field_name'] = '�������� ����';
$lang['add_field_name_explain'] = '������� ���, ������� �� �� ������ ������� � ���� �����.';
$lang['add_field_description'] = '�������� ����';
$lang['add_field_description_explain'] = '������� �������� ����, ������� �� ������ ������� � ���� �����. ��� ����� �������� ��� ��������� ����� ���� �������� ����, ����� ��� �� ��� ���� �����.';
$lang['add_field_type'] = '��� ����';
$lang['add_field_type_explain'] = '�������� ��� ����, ������� �� ������ ��������.';
$lang['edit_field_type_explain'] = '�������� ��� ����, ������� �������� �������� �� ������. Examples of each field type are shown to the far right.';
$lang['add_field_required'] = 'Set as Required';
$lang['add_field_required_explain'] = '���� �������(����) ����������� � "���������", ����� ������������, ������� �������������� ����� <strong>������</strong> ��������� ���, � ���� ������������ ������������� ����� �������� ������ �� ���������.';
$lang['add_field_user_can_view'] = '��������� ���� ������������� ��������';
$lang['add_field_user_can_view_explain'] = '���� ������������ "yes", �� ������������ ����� ������ � �������� ����. ���� "no", �� ������ ������������� ����� ������������� � �������� ��� ��������  �����, ���� ������������ "yes", ��� ���� �� ����� �����������.';
$lang['view_in_profile'] = '������ � ���������������� �������';
$lang['profile_locations_explain'] = '��� ����� ��� ����, ���� ���� �� ���� ����� � ������� ������������(��).';
$lang['contacts_column'] = '������� ���������';
$lang['about_column'] = '������� �';
$lang['view_in_memberlist'] = '������� � ������ �������������';
$lang['view_in_topic'] = '������� � ������';
$lang['topic_locations_explain'] = '��� ����� ��� ����, ���� ���� �� ���� ����� � ������.';
$lang['author_column'] = '������ ������';
$lang['above'] = '���� ';
$lang['below'] = '���� ';

$lang['textarea'] = '���� ������';
$lang['textarea_example'] = "������ ���� ������.";
$lang['text_field'] = '����� �����';
$lang['text_field_example'] = '������ �������� ������';
$lang['radio'] = '�������������';
$lang['radio_example'] = '������ �� ���� ��������������';
$lang['checkbox'] = '������ ������';
$lang['checkbox_example'] = '������ �� ���� ������ ������';

$lang['profile_field_list'] = '���� ������� ���� � �������';
$lang['profile_field_list_explain'] = '��� ������� ������� �� ������ ������� ��� ������ ������ � ������� ��� ��������� ��.';
$lang['profile_field_id'] = 'ID #';
$lang['profile_field_name'] = '�������� ����';
$lang['profile_field_action'] = '��������';
$lang['no_profile_fields_exist'] = '��� ��������� �����.';

$lang['enter_a_name'] = '�� <strong>������</strong>�������� ����<br /><br />������� ����� � ��������� �����';
//
// END Custom Profile Fields MOD
//

//
// Index
//
$lang['Admin'] = '�����������������';
$lang['Not_admin'] = '� ��� ��� ���� �� �����������������';
$lang['Welcome_phpBB'] = '����� ���������� �� phpBB';
$lang['Admin_intro'] = '������� �� ����� phpBB � �������� ������� ��� ����� �������. �� ���� �������� ��� ������� ����� ��������� ������������ ���� ����� ����������. ��������� �� ��� �������� �� ������, ������� �� ������ <u>������� ��������</u> � ����� ������. ��� �������� �� ������ ������� �������� �� �������� phpBB ����� � ����� ������. ��������� ������ � ����� ����� ����� ������ �������� ��� ��������� ����� ��������� ����� �������, �� ������ ������ ����� ���� ���������� �� �������������.';
$lang['Main_index'] = '������ �������';
$lang['Forum_stats'] = '���������� �������';
$lang['Admin_Index'] = '������� ��������';
$lang['Preview_forum'] = '��������������� �������� ������';

$lang['Click_return_admin_index'] = '%s��������� �� ������� �������� ������������������ �������%s';

$lang['Statistic'] = '����������';
$lang['Value'] = '��������';
$lang['Number_posts'] = '���-�� ���������';
$lang['Posts_per_day'] = '��������� � ����';
$lang['Number_topics'] = '���-�� ���';
$lang['Topics_per_day'] = '��� � ����';
$lang['Number_users'] = '���-�� �������������';
$lang['Users_per_day'] = '������������� � ����';
$lang['Board_started'] = '���� �������';
$lang['Avatar_dir_size'] = '������ ���������� � ���������';
$lang['Database_size'] = '����� ��';
$lang['Gzip_compression'] ='������ Gzip';
$lang['Not_available'] = '����������';

$lang['ON'] = '���'; // This is for GZip compression
$lang['OFF'] = '����'; 

// Cracker Tracker
// Security System from http://www.cback.de
//
$lang ['ctrack_pro_update'] = '��������������';
$lang ['ctrack_pro_idetect'] = '����������� ��������';
$lang ['ctrack_pro_logfile'] = '���� � ����������';
$lang ['ctrack_pro_settings'] = '���������';

$lang ['ctrack_logfile'] = '���-���� ������ ����������';
$lang ['ctrack_loginfo'] = '��� - ���-���� ������ ���������� ���� ������ <a href="http://www.community.cback.de" target="_blank">CBACK.DE</a>, ������� ������ ��� ������ phpBB ������. ����� �� ������ ������� ������������� ������� ������.';
$lang ['ctrack_showlog'] = '�������� ���-����';
$lang ['ctrack_downloadlog'] = '��������� ���-����';
$lang ['ctrack_deletelog'] = '�������� ���-����';
$lang ['ctrack_logdate'] = '����';
$lang ['ctrack_logip'] = 'IP';
$lang ['ctrack_logagent'] = '���������������� �����';
$lang ['ctrack_logattack'] = '������� �����';
$lang ['ctrack_logstat'] = '���������� ���-�����';
$lang ['ctrack_logentr'] = '��������� � ���-����';
$lang ['ctrack_logdowninfo'] = '������� ����� ��� ������� ���-�����!';
$lang ['ctrack_logdowninfo2'] = '������ ������ ���� > ��������� ������ ��� ...';
$lang ['ctrack_logreset'] = '���-���� ������� ������';
$lang ['ctrack_idhead'] = '����������� ��������';
$lang ['ctrack_idpass'] = '������';
$lang ['ctrack_idrpass'] = ' ��������� ������';
$lang ['ctrack_idpassfail'] = '������ �� ���������. ����������, �������� �����!';
$lang ['ctrack_idinfo'] = '��� - ������� ����������� ��������. ��� ��������� ����������� ����� ������� ������ �������. ���� �� �������� ��� �����, �������� ����� ��������� ������� ����, �� ������ �������� �������������� �������. ������ ������� �� "�������� ��������� �������". ������� "�������� �����������" �� ������ ��������� ���� ����� ������� �� ������� ���������. ��� �� �������, ��������, ���������� ��������� �� ���.';
$lang ['ctrack_idfirststart'] = '��� - ������ ������ ����������� ��������. �� ������ ���������� ����������� ������ - ������ ��� ���� �������. ���������� <b>�� �����������</b> ��� ������ ������� ������ ������������, ����� ������������� �������� ������. ����� �������� ������ ������� �������� ������������. ��� ����� ������ ��������� �����. ��������� ���������, ����������.';
$lang ['ctrack_idok'] = '<font color="green"><b>���� OK</b></font>';
$lang ['ctrack_iderr'] = '<font color="red"><b>���� �������</b></font>';
$lang ['ctrack_idwarn'] = '<font color="yellwo"><b>��������������</b></font>';
$lang ['ctrack_idlearn'] = '��������� �������� �������';
$lang ['ctrack_idlogin'] = '�������� �����������';
$lang ['ctrack_sys_footer'] = '������� ������ ����������� <a href="http://www.cback.de" target="_blank">CBACK.DE</a>';

$lang ['ctrack_log'] = '�������� � ���������� ���-�������';
$lang ['ctrack_logdesc'] = '����� �� ������� �������� ����� ���� �� ��� �����, ������� ���������� ����� ����������. ���������� �������, ��� IP � ���������������� ����� ����� ���� �������� ������������������ ������� � ����� �� ������ ��������� ������������ � ���-�����.';
$lang ['ctrack_llogdesc'] = '����� �� ������� �������� ���� ������� ����� � ������� �� ����� ������, ������� ���������� ����� ����������. ���������� �������, ��� IP � ���������������� ����� ����� ���� �������� ������������������ ������� � ����� �� ������ ��������� ������������ � ���-�����.';
$lang ['ctrack_modules'] = '����� ����������';
$lang ['ctrack_loglogin'] = '���-���� ������ ����� � �������';
$lang ['ctrack_lognormal'] = '���-���� ����';
$lang ['ctrack_inlog'] = '���-���� ���������';
$lang ['ctrack_inllog'] = '���-���� ������ ���������';
$lang ['ctrack_blocked'] = '������������� �����';
$lang ['ctrack_juststat'] = 'CBACK ������ ���������� - ������ ������ ...';

$lang ['ctrack_uplink'] = '����� ���������� ������ ���������� - CBACK.DE Uplink';
$lang ['ctrack_youver'] = '������ ������ ����� ������';
$lang ['ctrack_myver'] = '������ ����� ������ �� CBACK �������';
$lang ['ctrack_info'] = '���� �������� ����� ������, �� ������� �� ��������, ��� ���������� ������ ����� ������';
$lang ['ctrack_upbut'] = '��������';
$lang ['ctrack_uperr'] = '���������� ������������.';
$lang ['ctrack_active'] = '����������� �����������!';
$lang ['ctrack_usucc'] = '���������� ������� ���������!';
$lang ['ctrack_back'] = '�����';
$lang ['ctrack_nolinkp'] = '��� ������';
$lang ['ctrack_ok']      = '<font color="green"><b>OK</b></font>';
$lang ['ctrack_clink'] = '������� ������...';
$lang ['ctrack_defup'] = '����������� ����������...';
$lang ['ctrack_noup'] = '� ��������� ����� ��� ����������';


$lang ['ctrack_set_head'] = '�������� ������ ����������';
$lang ['ctrack_set_1'] = '�������� ��������';
$lang ['ctrack_set_2'] = '��������� ���-�����';
$lang ['ctrack_goforit'] = '��������� ���������';
$lang ['ctrack_setmax'] = '�������� ��������� � ���-����';
$lang ['ctrack_update_success'] = '��������� ���� ������ ���������� ������� ���������.';
$lang ['ctrack_return'] = '��������� � ��������� ������ ����������';


//
// DB Utils
//
$lang['Database_Utilities'] = '���������� ��';

$lang['Restore'] = '������������';
$lang['Backup'] = '��������� �����������';
$lang['Restore_explain'] = '����� ��������� ������ �������������� ���� ������ phpBB �� �����. ���� ��� ������ ������������ ����� �����������, �� ������ �������� ����, ������ gzip\'��, � �� ����� ������������� ����������. <b>��������</b> ��� ������������ ������ ����� �������. �������������� ����� ������ ����� �������, �� ������� � ���� �������� �� ���������� ��������.';
$lang['Backup_explain'] = '�� ������ ��������� ��� ��������� � phpBB ������. ���� � �� ��� phpBB ���� ������ �������, ������� �� ���� ������ �� ���������, ����������, ������� �� ��������, ���������� ��������, � ���� "�������������� �������" ���� ����. ���� ��� ������ ������������ ����� �����������, �� ������ ����� ����� ����������� ����� ���� gzip\'�� ��� ���������� ��� �������.';

$lang['Backup_options'] = '��������� ���������� �����������';
$lang['Start_backup'] = '������ �����������';
$lang['Full_backup'] = '������ �����';
$lang['Structure_backup'] = '���������� ������ ���������';
$lang['Data_backup'] = '���������� ������ ������';
$lang['Additional_tables'] = '�������������� �������';
$lang['Gzip_compress'] = '����� ���� gzip\'��';
$lang['Select_file'] = '�������� ����';
$lang['Start_Restore'] = '������ ��������������';

$lang['Restore_success'] = '�� ���� ������� �������������.<br /><br />���� ������ ������ ���� ��������� � �� �� ���������, � ������� ��� ���� �� ������ ���������� �����������.';
$lang['Backup_download'] = '���������� ����� �������, ����������, ���������.';
$lang['Backups_not_supported'] = '��������, ��������� ����������� ��� ������������ ���� ���� �� ��������������.';

$lang['Restore_Error_uploading'] = '������ � ������� �����';
$lang['Restore_Error_filename'] = '�������� � ������ �����, ����������, ���������� ������ ����';
$lang['Restore_Error_decompress'] = '�� ���� ����������� ������ gzip\'�� ����, ����������, ��������� ������������� ������';
$lang['Restore_Error_no_file'] = '���� �� ��� �������';

//
// Auth pages
//
$lang['Select_a_User'] = '�������� ������������';
$lang['Select_a_Group'] = '�������� ������';
$lang['Select_a_Forum'] = '�������� �����';
$lang['Auth_Control_User'] = '����� �������������'; 
$lang['Auth_Control_Group'] = '����� �����'; 
$lang['Auth_Control_Forum'] = '������ � �������'; 
$lang['Look_up_User'] = '������� ������������'; 
$lang['Look_up_Group'] = '������� ������'; 
$lang['Look_up_Forum'] = '������� �����'; 

$lang['Group_auth_explain'] = '����� �� ������ �������� ����� ������� � ������ ���������� ��� ������ ������ �������������. �� ��������� ��� ��������� ���� ������� ��� �����, ��� ����� ������� ��� ��������� ������������� ����� ������ ������������ ���������� ����� � ������ � �.�. �� ������ ������������� � ���� ������.';
$lang['User_auth_explain'] = '����� �� ������ �������� ����� ������� � ������ ���������� ��� ��������� �������������. �� ��������� ��� ��������� ���� ������������, ��� ����� ������� ��� ������ ����� ������ ������������ ����������� ����� � ������ � �.�. �� ������ ������������� � ���� ������.';
$lang['Forum_auth_explain'] = '����� �� ������ ������������ ������ � ������� ������. � ��� ����� ������� � ����������� ����� ��� �����, ����������� ��� ������ ������������ ��� ��������. �������, ��� ��������� ���� ������� � ������ �������� �� ��, ����� ������������ ������ ��������� � �� ��������� ��������';

$lang['Simple_mode'] = '������� �����';
$lang['Advanced_mode'] = '����������� �����';
$lang['Moderator_status'] = '������ ����������';

$lang['Allowed_Access'] = '������ ������';
$lang['Disallowed_Access'] = '������ ������';
$lang['Is_Moderator'] = '���������';
$lang['Not_Moderator'] = '�� ���������';

$lang['Conflict_warning'] = '�������������� � ��������� ����';
$lang['Conflict_access_userauth'] = '� ������������ (�������������) �� ��� ���� ����� ������� � ����� ������, ��������� � ��������� � ������. ���, ��������, ���� �������� ����� ������� ��� ����� ��� ��������� ������������ �� ������ ��� ����, ����� ��������� ������� ��� ����� �������. ������, ������ ����� �����, ����������� ����.';
$lang['Conflict_mod_userauth'] = '� ������� ������������ �� ��� ���� ����� ������������� ����� ������, ��������� � ��� ��������� � ������. ���, ��������, ���� �������� ����� ������� ��� ����� ��� ��������� ������������ �� ������ ��� ����, ����� ��������� ������� ��� ����� ���������. ������, ������ ��� �����, ����������� ����.';

$lang['Conflict_access_groupauth'] = '� ������������ (�������������) �� ��� ���� ����� ������� � ����� ������ ��-�� ��������� �� ������ ����. ���, ��������, ���� �������� �� ����� ��� ����, ����� ��������� ������� �� ������. ������������, ������� ����� �����, ����������� ����.';
$lang['Conflict_mod_groupauth'] = '� ������������ (�������������) �� ��� ���� ����� ������������� ����� ������ ��-�� ��������� �� ������ ����. ���, ��������, ���� �������� �� ����� ��� ����, ����� ��������� ������� �� ����������� �������������. ������������, ������� ����� �����, ����������� ����.';

$lang['Public'] = '���������';
$lang['Private'] = '���������';
$lang['Registered'] = '������������������';
$lang['Administrators'] = '��������������';
$lang['Hidden'] = '����������';


// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = '���';
$lang['Forum_REG'] = '�������.';
$lang['Forum_PRIVATE'] = '���������';
$lang['Forum_MOD'] = '���������';
$lang['Forum_ADMIN'] = '�����';

$lang['View'] = '��������';
$lang['Read'] = '������';
$lang['Post'] = '��������� ����';
$lang['Reply'] = '��������';
$lang['Edit'] = '�������������';
$lang['Delete'] = '�������';
$lang['Sticky'] = '���������� ����';
$lang['Announce'] = '��������� ����������';
$lang['Vote'] = '����������';
$lang['Pollcreate'] = '��������� ������';

$lang['Permissions'] = '����� �������';
$lang['Simple_Permission'] = '������� ����� �������';

$lang['User_Level'] = '������ ������������'; 
$lang['Auth_User'] = '������������';
$lang['Auth_Admin'] = '�������������';
$lang['Group_memberships'] = '�������� � �������';
$lang['Usergroup_members'] = '� ���� ������ �������';

$lang['Forum_auth_updated'] = '����� ������� � ������ ��������';
$lang['User_auth_updated'] = '����� ������������ ��������';
$lang['Group_auth_updated'] = '����� ������ ��������';

$lang['Auth_updated'] = '����� ������� ��������';
$lang['Click_return_userauth'] = '%s��������� � ���������� ������� �������������%s';
$lang['Click_return_groupauth'] = '%s��������� � ���������� ������� �����%s';
$lang['Click_return_forumauth'] = '%s��������� � ���������� �������� � �������%s';



//
// Banning
//
$lang['Ban_control'] = '׸���� ������';
$lang['Ban_explain'] = '����� �� ������ ��������� ������������� ����� ������ � �������. �� ������ ������ � ������ ������ ����������� ������������, � ����� ���� �� ��������� IP ������� ��� ��� ��������. ���� ����� �� ���� ������������ ������� ���� ������ �������. ����� ��������� ����������� ��� ������ ������, �� ������ ����� ������ � ������ ������ ����� e-mail. ������, ���������� ������ e-mail ������ �� ������� ������������ ����������� �������� �� ����� � ������ ���������. ��� ����� ��� ������� ��������������� ����� �� ������ ���� �������.';
$lang['Ban_explain_warn'] = '������, ��� ���� ��������� IP ������� ������� � ���������� ���� ������� ����� ������ � ��������� � &laquo;������ ������&raquo;. ����� ��������� ������� ��������� ��� ���������� ������ ��������, ��� ��� ��������. ���� ��� ������������� ���� ������ �������� �������, ������������ ������� ��� �������� ���, ��� ��� �����, ������� ��������� ������.';

$lang['Select_username'] = '�������� ������������';
$lang['Select_ip'] = '�������� IP �����';
$lang['Select_email'] = '�������� ����� e-mail';

$lang['Ban_username'] = '�������� ������� ��������� �������������';
$lang['Ban_username_explain'] = '�� ������ ������� ������ ���������� ������������� �� ���� ���, ��������� ���������� ��� ������ ���������� � �������� ���������� ���������� � ����.';

$lang['Ban_IP'] = '������� ������ � ������ ��� ���������� ������� IP ��� ������';
$lang['IP_hostname'] = '������ IP ��� �����';
$lang['Ban_IP_explain'] = '����� ������� ��������� ������ ������� ��� ������, ��������� �� ��������. ����� ������� ������������������ ������� IP ��������� ������ � ����� ������� (-), ����� ������� ������ ����������� *';

$lang['Ban_email'] = '��������� e-mail ������';
$lang['Ban_email_explain'] = '����� ��������� ��������� e-mail �������, ��������� �� ��������. ����� ������� ������, ����������� *, �������� *@mail.ru';

$lang['Unban_username'] = '����� ������� ������ �������������';
$lang['Unban_username_explain'] = '�� ������ ����� ������� ������ ���������� ������������� �� ���� ���, ��������� ���������� ��� ������ ���������� � �������� ���������� ���������� � ����.';

$lang['Unban_IP'] = '����� ������� ������ � ������� IP';
$lang['Unban_IP_explain'] = '�� ������ ����� ��������� ������ � ���������� ������� IP �� ���� ���, ��������� ���������� ��� ������ ���������� � �������� ���������� ���������� � ����.';

$lang['Unban_email'] = '����� ��������� ������ e-mail';
$lang['Unban_email_explain'] = '�� ������ ����� ��������� ��������� ������� e-mail �� ���� ���, ��������� ���������� ��� ������ ���������� � �������� ���������� ���������� � ����.';

$lang['No_banned_users'] = '׸���� ������ ������������� ����';
$lang['No_banned_ip'] = '׸���� ������ ������� IP ����';
$lang['No_banned_email'] = '׸���� ������ ������� e-mail ����';

$lang['Ban_update_sucessful'] = '׸���� ������ ��� ������� �������';
$lang['Click_return_banadmin'] = '%s��������� � ������ �������%s';


//
// Configuration
//
$lang['General_Config'] = '����� ���������';
$lang['Config_explain'] = '��� ����� �������� ��� �������� ����� ��������� �������. ��� ���������� �������������� � ���������� �������� ����������� ��������������� ������ �����.';

$lang['Click_return_config'] = '%s��������� � ����� ����������%s';

$lang['General_settings'] = '����� ��������� �������';
$lang['Server_name'] = '��� �������';
$lang['Server_name_explain'] = '��� �������, �� ������� �������� ��� ������';
$lang['Script_path'] = '���� � �������';
$lang['Script_path_explain'] = '���� � ��������, ����������� phpBB, ������������ ����� �����';
$lang['Server_port'] = '���� ���-�������';
$lang['Server_port_explain'] = '����, �� ������� ������� ��� ���-������ (������ 80, ��������� <b>������</b> ���� ������ �������� �� ������ �����)';
$lang['Site_name'] = '�������� �����';
$lang['Site_desc'] = '�������� �����';
$lang['Board_disable'] = '��������� ������';
$lang['Board_disable_explain'] = '������ ������ ������������ �������������. �� �������� ����� ���������� �������, ����� ����� �� �� �������!';
$lang['Acct_activation'] = '�������� ����������� ������� �������';
$lang['Acc_None'] = '���'; // These three entries are the type of activation
$lang['Acc_User'] = '�������������';
$lang['Acc_Admin'] = '���������������';

$lang['Abilities_settings'] = '����� ��������� ������� � �������������';
$lang['Max_poll_options'] = '����. ���-�� ��������� ������ � ������';
$lang['Flood_Interval'] = '�������� &laquo;�����&raquo;';
$lang['Flood_Interval_explain'] = '����� (� ��������), ������� ������ ������ ����� ����� ����������� ������������.'; 
$lang['Board_email_form'] = '�������� e-mail ��������� ����� ������';
$lang['Board_email_form_explain'] = '������������ ������ �������� ���� ����� e-mail ����� ������';
$lang['Topics_per_page'] = '��� �� ��������';
$lang['Posts_per_page'] = '��������� �� ��������';
$lang['Hot_threshold'] = '��������� � &laquo;����������&raquo; ����';
$lang['Default_style'] = '����� �� ���������';
$lang['Override_style'] = '�������� ����� ������������';
$lang['Override_style_explain'] = '�������� ��������� ������������� ����� �� ����� �� ���������';
$lang['Default_language'] = '���� �� ���������';
$lang['Date_format'] = '������ ����';
$lang['System_timezone'] = '������� ����';
$lang['Enable_gzip'] = '�������� ������ GZip';
$lang['Enable_prune'] = '�������� ������ �������';
$lang['Allow_HTML'] = '��������� HTML';
$lang['Allow_BBCode'] = '��������� BBCode';
$lang['Allowed_tags'] = '����������� ���� HTML';
$lang['Allowed_tags_explain'] = '������ ����������� �����, ���������� ��������';
$lang['Allow_smilies'] = '��������� ��������';
$lang['Smilies_path'] = '���� � ���������';
$lang['Smilies_path_explain'] = '������� ���� ����� phpBB, �������� images/smilies';
$lang['Allow_sig'] = '��������� �������';
$lang['Max_sig_length'] = '����. ����� �������';
$lang['Max_sig_length_explain'] = '������������ ���-�� �������� � ������� ������������';
$lang['Allow_name_change'] = '��������� ����� ����� ������������';

$lang['Avatar_settings'] = '��������� ������';
$lang['Allow_local'] = '��������� ������ �� �������';
$lang['Allow_remote'] = '��������� ��������� ������';
$lang['Allow_remote_explain'] = '������ �� �������, ����������� �� ������ �����';
$lang['Allow_upload'] = '��������� ������� ������';
$lang['Max_filesize'] = '����. ������ ����� �������';
$lang['Max_filesize_explain'] = '��� ���������� ������';
$lang['Max_avatar_size'] = '����. ������ �����������';
$lang['Max_avatar_size_explain'] = '(������ x ������ � ��������)';
$lang['Avatar_storage_path'] = '���� � ��������';
$lang['Avatar_storage_path_explain'] = '������� ���� ����� phpBB, �������� images/avatars';
$lang['Avatar_gallery_path'] = '���� � ������� ������';
$lang['Avatar_gallery_path_explain'] = '������� ���� ����� phpBB ��� ������� ��������, �������� images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA Settings';
$lang['COPPA_fax'] = 'COPPA Fax Number';
$lang['COPPA_mail'] = 'COPPA Mailing Address';
$lang['COPPA_mail_explain'] = 'This is the mailing address where parents will send COPPA registration forms';

$lang['Email_settings'] = '��������� e-mail';
$lang['Admin_email'] = '����� e-mail ��������������';
$lang['Email_sig'] = '������� � ���������� e-mail';
$lang['Email_sig_explain'] = '���� ����� ����� ������������� �� ��� ������, ����������� �� �������';
$lang['Use_SMTP'] = '������������ ������ SMTP ��� �������� �����';
$lang['Use_SMTP_explain'] = '��������, ���� �� ������/��������� �������� ����� ����� ������ SMTP, � �� ��������� �������� ������';
$lang['SMTP_server'] = '����� ������� SMTP';
$lang['SMTP_username'] = '��� ������������ ��� SMTP';
$lang['SMTP_username_explain'] = '�� ���������� ��� ������������ ���� ��� �� ��������� ��� ������ � ����� �������� SMTP';
$lang['SMTP_password'] = '������ ��� SMTP';
$lang['SMTP_password_explain'] = '�� ���������� ������ ���� �� �� ��������� ��� ������ � ����� �������� SMTP';

$lang['Disable_privmsg'] = '������ ���������';
$lang['Inbox_limits'] = '����. ����� ��������� � ����� &laquo;��������&raquo;';
$lang['Sentbox_limits'] = '����. ����� ��������� � ����� &laquo;������������&raquo;';
$lang['Savebox_limits'] = '����. ����� ��������� � ����� &laquo;����������&raquo;';

$lang['Cookie_settings'] = '��������� �����'; 
$lang['Cookie_settings_explain'] = '�� ������ �������� ��������� ����� (cookies), ������������ �������������. � ����������� ������� �������� �������� �� ���������. ���� ��� ��������� �� ��������, ���������� ������������: �������� �������� ����� �������� ������������� ������� � �������.';
$lang['Cookie_domain'] = '����� ����';
$lang['Cookie_name'] = '��� ����';
$lang['Cookie_path'] = '���� ����';
$lang['Cookie_secure'] = '���������� ���� [ https ]';
$lang['Cookie_secure_explain'] = '���� ��� ������ �������� ����� SSL, �� �������� ��� ���������, � ��������� ������ �������� �����������.';
$lang['Session_length'] = '����� ������ [ � �������� ]';

// Visual Confirmation
$lang['Visual_confirm'] = '�������� ���������� �������������';
$lang['Visual_confirm_explain'] = '���������� �������� � ���������, ������������ ��� �����������.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = '��������� �������������� ����';
$lang['Allow_autologin_explain'] = '����������, ���������� �� ������������� ����� ��������������� �����';
$lang['Autologin_time'] = '����� �������� ��������������� ����� � ���� ������ �������';
$lang['Autologin_time_explain'] = '��� ����� ��������� ���� (���).��������� 0 ��� ����������.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = '����� ���� ��������';
$lang['Search_Flood_Interval_explain'] = '����� � �������� �� ��������� ����. ���������'; 

//
// Forum Management
//
$lang['Forum_admin'] = '���������� ��������';
$lang['Forum_admin_explain'] = '����� �� ������ ���������, ������� � �������� ������� ������ ��������� � �������';
$lang['Edit_forum'] = '�������� �����';
$lang['Create_forum'] = '������� ����� �����';
$lang['Create_category'] = '������� ����� ���������';
$lang['Remove'] = '�������';
$lang['Action'] = '��������';
$lang['Update_order'] = '�������� �������';
$lang['Config_updated'] = '������������ ������� ������� ��������';
$lang['Edit'] = '��������';
$lang['Delete'] = '�������';
$lang['Move_up'] = '�������� �����';
$lang['Move_down'] = '�������� ����';
$lang['Resync'] = '�������������';
$lang['No_mode'] = '�� ���� ������ ��������';
$lang['Forum_edit_delete_explain'] = '����� �� ������ �������� �������� � �������� ������, ������� ��� (��� ����� �������) � ��������� �������������� ������. ��� ���������� ������� ������� � ������ �������������� ��������������� ������� � ����� �����.';

$lang['Move_contents'] = '��������� �� ����������';
$lang['Forum_delete'] = '������� �����';
$lang['Forum_delete_explain'] = '����� �� ������� ������� ����� (��� ���������) � ������, ���� ��������� ��� ���� (��� ������), ������� ��� �����������.';

$lang['Status_locked'] = '������';
$lang['Status_unlocked'] = '������';
$lang['Forum_settings'] = '����� ��������� ������';
$lang['Forum_name'] = '�������� ������';
$lang['Forum_desc'] = '��������';
$lang['Forum_status'] = '������ ������';
$lang['Forum_pruning'] = '�������������� ������';

$lang['prune_freq'] = '��������� ������� ���� ������';
$lang['prune_days'] = '������� ����, � ������� �� ���� ��������� ���������';
$lang['Set_prune_data'] = '�� ������� ��� ����� ������ �������������� ������, �� �� ������� �������, � ������� ��� ��������� �������. ����������, ��������� � ������� �.';

$lang['Move_and_Delete'] = '��������� � �������';

$lang['Delete_all_posts'] = '������� ��� ����';
$lang['Nowhere_to_move'] = '������ ����������';

$lang['Edit_Category'] = '�������� ���������';
$lang['Edit_Category_explain'] = '����������� ��� �����, ����� �������� �������� ���������';

$lang['Forums_updated'] = '���������� � ������� � ���������� ������� ��������';

$lang['Must_delete_forums'] = '�� ������ ������� ��� ������, ������ ��� ������� ������� ��� ���������';

$lang['Click_return_forumadmin'] = '%s��������� � ���������� ��������%s';


//
// Smiley Management
//
$lang['smiley_title'] = '������� �������������� ���������';
$lang['smile_desc'] = '����� �� ������ ������������� ������ ���������';

$lang['smiley_config'] = '���������� ����������';
$lang['smiley_code'] = '��� ��������';
$lang['smiley_url'] = '���� � ������������ ��������';
$lang['smiley_emot'] = '������ ��������';
$lang['smile_add'] = '�������� ����� �������';
$lang['Smile'] = '�������';
$lang['Emotion'] = '������';

$lang['Select_pak'] = '�������� ���� � ������� (.pak)';
$lang['replace_existing'] = '�������� ������������ �������';
$lang['keep_existing'] = '��������� ������������ �������';
$lang['smiley_import_inst'] = '�� ������ ����������� ����� ��������� � �������� ��� ����� � ���������� ��� ����� ��������� ����������. ����� �������� � ���� ����� ������ ���������� ��� ������� ������ ���������.';
$lang['smiley_import'] = '������ ������ ���������';
$lang['choose_smile_pak'] = '�������� ���� .pak � �������';
$lang['import'] = '������������� ��������';
$lang['smile_conflicts'] = '��� ������ � ������ ���������';
$lang['del_existing_smileys'] = '������� ����� �������� ������������ ��������';
$lang['import_smile_pack'] = '������������� ����� ���������';
$lang['export_smile_pack'] = '������� ����� ���������';
$lang['export_smiles'] = '��� �������� ������ ��������� �� ���������, ������������� � ������ ������, %s�������� ���� smiles.pak%s. ������������ ��� ��� ��� �����, �������� ��� ���� ���������� .pak, ����� �������� ���� zip, ���������� ��� ����������� ���������, � ����� ���� ����.';

$lang['smiley_add_success'] = '������� ��� ������� ��������';
$lang['smiley_edit_success'] = '������� ��� ������� ������';
$lang['smiley_import_success'] = '����� ��������� ��� ������� ������������';
$lang['smiley_del_success'] = '������� ��� ������� �����';
$lang['Click_return_smileadmin'] = '%s��������� � ������ ���������%s';
$lang['position_new_smilies'] = '��������� ����� ������ � ������ ��� � ����� ������������ �������?';
$lang['smiley_change_position'] = '�������� ��������� �������';
$lang['before'] = '� ������';
$lang['after'] = '� �����';
$lang['Move_top'] = '��������� � ������';
$lang['Move_end'] = '��������� � �����';

//
// User Management
//
$lang['User_admin'] = '���������� ��������������';
$lang['User_admin_explain'] = '����� �� ������ �������� ���������� � ������������. ����� �������� ����� ������� ����������� ������ ���������� ������� �������';

$lang['Look_up_user'] = '������� ������������'; 

$lang['Admin_user_fail'] = '�� ���� �������� ������� ������������';
$lang['Admin_user_updated'] = '������� ������������ ��� ������� ������';
$lang['Click_return_useradmin'] = '%s��������� � ���������� ��������������%s';

$lang['User_delete'] = '������� ����� ������������';
$lang['User_delete_explain'] = '�������� ����� ��� �������� ����� ������������. �������� ������ ����� ��������.';
$lang['User_deleted'] = '������������ ��� ������� �����.';

$lang['User_status'] = '������������ �������';
$lang['User_allowpm'] = '����� �������� ������ ���������';
$lang['User_allowavatar'] = '����� ���������� �������';

$lang['Admin_avatar_explain'] = '����� �� ������ ����������� � ������� ������� ������� ������������';

$lang['User_special'] = '���� ������ ��� ������';
$lang['User_special_explain'] = '��� ���� ���� ������������ ������������� �� �����. ����� �� ������ ���������� �� ������ � ������� ������ ����������� �� ���������.';

// Custom Title MOD
//
$lang['Custom_title_status'] = '������ �������';
$lang['Custom_title_status_regdate'] = '������� �� ��������������� ���� � ����������';
$lang['Custom_title_status_disabled'] = '��������';
$lang['Custom_title_status_enabled'] = '�������';
$lang['Custom_title_settings'] = '��������� �������';
$lang['Custom_title_days'] = '����������, ���� ������ ���� �� �����������';
$lang['Custom_title_posts'] = '��������� ���������';
$lang['Custom_title_mode'] = '��� ������ �����';
$lang['Custom_title_mode_explain'] = '����� �� ������ ������� �������� �� ����, ����������� ����� ��� ���������� ������ ������������. ���� �� �������� \'�� ��������\' �� ����� �������� ��� ��������� ��������.';
$lang['Custom_title_mode_independent'] = '�� ��������';
$lang['Custom_title_mode_replace_rank'] = '�������� ������ ����';
$lang['Custom_title_mode_replace_both'] = '�������� ���� � ��� �����������';
$lang['Custom_title_maxlength'] = '������������ �����';
$lang['Custom_title_maxlength_explain'] = '����� ����������� ������������ ���������� �������� � ������.  Please enter a number from 0 to 255.����������, ������� �������� �� 0 �� 255.';

//
// Group Management
//
$lang['Group_administration'] = '���������� ��������';
$lang['Group_admin_explain'] = '����� �� ������ ��������� ����� ������ ��������: ��� �������� ��������, ���������� � ��������� �����. �� ������ ��������� �����������, �������� ��������/�������� ������ ������ � ������������� � �������� � ��������.';
$lang['Error_updating_groups'] = '������ ��� ��������� ������.';
$lang['Updated_group'] = '������ ���� ������� ��������';
$lang['Added_new_group'] = '������ ���� ������� �������';
$lang['Deleted_group'] = '������ ���� ������� �������';
$lang['New_group'] = '������� ����� ������';
$lang['Edit_group'] = '�������� ������';
$lang['group_name'] = '�������� ������';
$lang['group_description'] = '�������� ������';
$lang['group_moderator'] = '��������� ������';
$lang['group_status'] = '������ ������';
$lang['group_open'] = '������ � �������� ���������';
$lang['group_closed'] = '������ � �������� ���������';
$lang['group_hidden'] = '������� ������';
$lang['group_delete'] = '������� ������.';
$lang['group_delete_check'] = '������� ��� ������';
$lang['submit_group_changes'] = '��������� ���������';
$lang['reset_group_changes'] = '�������� ���������';
$lang['No_group_name'] = '�� ������ ������� �������� ������';
$lang['No_group_moderator'] = '�� ������ ������� ���������� ������';
$lang['No_group_mode'] = '�� ������ ������� ����� ������: �������� ��� ��������';
$lang['No_group_action'] = '�� ���� ������� ��������';
$lang['delete_group_moderator'] = '������� ������� ����������?';
$lang['delete_moderator_explain'] = '���� �� ������� ���������� ������ � ��������� ����� �������, �� ���������� ��������� ����� �������� �� ������. ���� �� � �� ���������, �� �� ������ ������� ������ ������.';
$lang['Click_return_groupsadmin'] = '%s��������� � ���������� ��������%s';
$lang['Select_group'] = '�������� ������';
$lang['Look_up_group'] = '������� ������';



//
// Prune Administration
//
$lang['Forum_Prune'] = '������ �������';
$lang['Forum_Prune_explain'] = '����� ������� ����, � ������� �� ���� ����� ��������� �� ��������� ����� ����. ���� �� �� ������ �����, �� ����� ������� ��� ����. �� ����� ������� ����, � ������� ������������ ������, � ����� ����������. ��� ������� ������� ����� ���� �������.';
$lang['Do_Prune'] = '�������� ������';
$lang['All_Forums'] = '��� ������';
$lang['Prune_topics_not_posted'] = '������� ����, � ������� �� ���� ������� �� ������ ���-�� ����';
$lang['Topics_pruned'] = '��� ��������';
$lang['Posts_pruned'] = '��������� ��������';
$lang['Prune_success'] = '����� ������� �������';



//
// Word censor
//
$lang['Words_title'] = '����������';
$lang['Words_explain'] = '����� �� ������ ��������, �������� ��� ������� �����, ������� ����� ������������� ������������ ������� �� ����� �������. ����� ����, ������������ �� ������ ������������������ ��� �������, ����������� ��� �����. � ������ ���� ����� �������������� ������� (*), �.�. � \'*����*\' ������� \'��������������\', � \'����*\' &mdash; \'������������\', � \'*����\' &mdash; \'�������\'.<br>(���������� �����������) ���������� ������������ ���� ����� <b>�����</b> ���������: ��������, ����� ��������� ������ ���� ����������� ����������� �� ����� \'�����������\', \'�����������\' � �.�.';
$lang['Word'] = '�����';
$lang['Edit_word_censor'] = '�������� ����������';
$lang['Replacement'] = '������';
$lang['Add_new_word'] = '�������� ����� �����';
$lang['Update_word'] = '�������� ����������';

$lang['Must_enter_word'] = '�� ������ ������ ����� � ��� ������';
$lang['No_word_selected'] = '�� ������� ����� ��� ��������������';

$lang['Word_updated'] = '��������� ���������� ��� ������� ������';
$lang['Word_added'] = '���������� ��� ������� ��������';
$lang['Word_removed'] = '��������� ���������� ��� ������� �����';

$lang['Click_return_wordadmin'] = '%s��������� � ���������� ������������%s';



//
// Mass Email
//
$lang['Mass_email_explain'] = '�� ������ ��������� e-mail ��������� ���� ���� ����� �������������, ���� �������������, �������� � ����������� ������. ��������� ����� ���������� �� ���������������� �����, � BCC: ���� �����������. ���� �� ����������� ������ ������� ������ �����, �� ������ ���������: �� �������������� �������� �������� ����� ������� ������. �������� �������� ����� ������ ����� �������, �� ������� ���������, ����� ���������� ����������.';
$lang['Compose'] = '����� ���������'; 

$lang['Recipients'] = '����������'; 
$lang['All_users'] = '��� ������������';

$lang['Email_successfull'] = '���� ��������� ���� ����������';
$lang['Click_return_massemail'] = '%s��������� � �������� ��������%s';

//
// Ranks admin
//
$lang['Ranks_title'] = '���������� ��������';
$lang['Ranks_explain'] = '����� �� ������ ���������, �������������, ������������� � ������� ������. �� ����� ������ ��������� ����������� ������, ������� ����� ����� ���� ��������� ������������� �� �������� ���������� ��������������.';

$lang['Add_new_rank'] = '����� ������';

$lang['Rank_title'] = '������';
$lang['Rank_special'] = '����������� ������';
$lang['Rank_minimum'] = '������� ���������';
$lang['Rank_maximum'] = '�������� ���������';
$lang['Rank_image'] = '�������� � ������ (������������ ����� phpBB2)';
$lang['Rank_image_explain'] = '����� �� ������ ��������� ���� ������� ����� ������ ����������� �����������. �� ������ ������� ���� �������������, ���� ���������� ���� � �����������';

$lang['Must_select_rank'] = '��������, �� �� ������� ������. ��������� � ���������� ��� ���.';
$lang['No_assigned_rank'] = '������������ ������ �� ���������';

$lang['Rank_updated'] = '������ ���� ������� ��������';
$lang['Rank_added'] = '������ ���� ������� ���������';
$lang['Rank_removed'] = '������ ���� ������� �������';
$lang['No_update_ranks'] = '������ ���� ������� �������. ��� �� �����, ���������� � �������������, � ������� ���� ��� ������, �� ���� ��������. ��� ������� �������� ��� ���������� �������.';

$lang['Click_return_rankadmin'] = '%s��������� � ���������� ��������%s';



//
// Disallow Username Admin
//
$lang['Disallow_control'] = '����������� ����� ������������';
$lang['Disallow_explain'] = '����� �� ������ ������ �����, ������� ����� ��������� � �������������. ����������� ����� ����� ��������� ������ '*'. ������: �� �� ������� ��������� ���, ���� ��� ���������� ������������ � ����� ������. ��� ������� ������� ������� ������������, � ��� ����� ��������� ���.';

$lang['Delete_disallow'] = '�������';
$lang['Delete_disallow_title'] = '������� ����������� ��� ������������';
$lang['Delete_disallow_explain'] = '�� ������ ������ ����������� ���, ������ ��� �� ������ � ����� ������ &laquo;���������&raquo;';

$lang['Add_disallow'] = '��������';
$lang['Add_disallow_title'] = '�������� ����������� ��� ������������';
$lang['Add_disallow_explain'] = '�� ������ ��������� ��� ������������, ��������� ������ \'*\', ������� �������� � ������ �������';

$lang['No_disallowed'] = '��� ����������� ���';

$lang['Disallowed_deleted'] = '����������� ��� ������������ ���� ������� �������';
$lang['Disallow_successful'] = '����������� ��� ������������ ���� ������� ���������';
$lang['Disallowed_already'] = '���, ������� �� ��������� ���������, ���� ��� ���������, ���� ���� � ������ ����������� ����, ���� ���������� ������������ � ���������� ������';

$lang['Click_return_disallowadmin'] = '%s��������� � ���������� ������������ �������%s';

//
// Styles Admin
//
$lang['Styles_admin'] = '���������� �������';
$lang['Styles_explain'] = '����� �� ������ ���������, ������� � �������� ����� (������� � �������� �����), ��������� ����� �������������.';
$lang['Styles_addnew_explain'] = '���� ������ �������� ��� �������� �����, ���������� � ��������� � ��� ��������. �������� ����� ������ �� ���� ���� ����������� � ���� phpBB. ��� ��������� ����� ������ ������� &laquo;����������&raquo; ����� � ��������� ���������';

$lang['Select_template'] = '�������� ������';

$lang['Style'] = '�����';
$lang['Template'] = '������';
$lang['Install'] = '����������';
$lang['Download'] = 'Downloads';

$lang['Edit_theme'] = '�������� �������� �����';
$lang['Edit_theme_explain'] = '����� �� ������ �������� ��������� ��������� �������� �����.';

$lang['Create_theme'] = '������� �������� �����';
$lang['Create_theme_explain'] = '����� �� ������ ������� ����� �������� ����� ��� ���������� �������. ��� �������� ����� ������ �� ��������� ���� \'#\', �.�.: CCCCCC ��������, #CCCCCC - ���.';

$lang['Export_themes'] = '������� �������� ����';
$lang['Export_explain'] = '����� �� ������� �������������� �������� ����� ��� ���������� �������. �������� ������ �� ������, � ��������� ���������� ������� ���� � ������������� ����� � �������� ��� � ������� � ��������� ��������. ���� ���� �� ������� ��������, �� � ��� ����� ����������� ������� ���. ��� ����, ����� ��������� ����� �������� ����, ��� ���� ���� ������� ����� �� ������ � ������� � ��������� ��������. �� �������������� ����������� ���������� � ����������� ������������ phpBB.';

$lang['Theme_installed'] = '��������� �������� ����� ���� ������� �����������';
$lang['Style_removed'] = '����� ��� ����� �� ����. ��� ������� �������� ����� � ����� ������� ������� ��������������� ������� �� �������� � ���������.';
$lang['Theme_info_saved'] = '���������� � �������� ����� ��� ���������� ������� ���� ���������. �� ������ ������� ����� ������ ��� ������ �� ���� theme_info.cfg �/��� ������� � ��������� ��������.';
$lang['Theme_updated'] = '��������� ���� ���� ��������. �� �������� �������������� � ��������� � ���� �������� �������� �����!';
$lang['Theme_created'] = '�������� ����� �������. �� �������� �������������� � ��������� � ���� �������� �������� �����!';

$lang['Confirm_delete_style'] = '�� �������, ��� ������ ������� ���� �����?';

$lang['Download_theme_cfg'] = '��������� �� ������ �������� ���� � ����������� � �������� �����. ������� �� ������, ����� ������� ���� ���� ����� �������. ����� ����, ��� �� ��� ��������, �� ������� �������� ��� � ������� � ��������� �, ���� ��������, ����������� ���� ������� � ���������������.';
$lang['No_themes'] = '� ���������� ������� �� ������������ �� ����� �������� �����. ٸ������ �� ������ �����, ����� ������� �����.';
$lang['No_template_dir'] = '�� ���� ������� ������� � ���������, �� ���� ������ �� ������ ��� �������, ���� �� ����������.';
$lang['Cannot_remove_style'] = '��������� ���� ����� �������� ������ �� ��������� ��� ������� � �� ����� ���� �����. �������� ����� �� ��������� � ���������� ��� ���.';
$lang['Style_exists'] = '��������� ��� ����� ��� ����������, ��������� ����� � �������� ������ ���.';

$lang['Click_return_styleadmin'] = '%s��������� � ���������� �������%s';

$lang['Theme_settings'] = '��������� �������� �����';
$lang['Theme_element'] = '������� �������� �����';
$lang['Simple_name'] = '���';
$lang['Value'] = '��������';
$lang['Save_Settings'] = '��������� ���������';

$lang['Stylesheet'] = '���� ������ CSS';
$lang['Background_image'] = '������� �����������';
$lang['Background_color'] = '���� ����';
$lang['Theme_name'] = '�������� �������� �����';
$lang['Link_color'] = '���� ������';
$lang['Text_color'] = '���� ������';
$lang['VLink_color'] = '���� ���������� ������';
$lang['ALink_color'] = '���� �������� ������';
$lang['HLink_color'] = '���� ������ ��� ��������';
$lang['Tr_color1'] = '���� ������ ������� 1';
$lang['Tr_color2'] = '���� ������ ������� 2';
$lang['Tr_color3'] = '���� ������ ������� 3';
$lang['Tr_class1'] = '����� ������ ������� 1';
$lang['Tr_class2'] = '����� ������ ������� 2';
$lang['Tr_class3'] = '����� ������ ������� 3';
$lang['Th_color1'] = '���� ����� ������� 1';
$lang['Th_color2'] = '���� ����� ������� 2';
$lang['Th_color3'] = '���� ����� ������� 3';
$lang['Th_class1'] = '����� ����� ������� 1';
$lang['Th_class2'] = '����� ����� ������� 2';
$lang['Th_class3'] = '����� ����� ������� 3';
$lang['Td_color1'] = '���� ������ ������� 1';
$lang['Td_color2'] = '���� ������ ������� 2';
$lang['Td_color3'] = '���� ������ ������� 3';
$lang['Td_class1'] = '����� ������ ������� 1';
$lang['Td_class2'] = '����� ������ ������� 2';
$lang['Td_class3'] = '����� ������ ������� 3';
$lang['fontface1'] = '����� 1';
$lang['fontface2'] = '����� 2';
$lang['fontface3'] = '����� 3';
$lang['fontsize1'] = '������ ������ 1';
$lang['fontsize2'] = '������ ������ 2';
$lang['fontsize3'] = '������ ������ 3';
$lang['fontcolor1'] = '���� ������ 1';
$lang['fontcolor2'] = '���� ������ 2';
$lang['fontcolor3'] = '���� ������ 3';
$lang['span_class1'] = '����� ��������� 1';
$lang['span_class2'] = '����� ��������� 2';
$lang['span_class3'] = '����� ��������� 3';
$lang['img_poll_size'] = '������ �������� ����������� [ ������� ]';
$lang['img_pm_size'] = '������ �������� �� [ ������� ]';



//
// Install Process
//
$lang['Welcome_install'] = '����� ���������� � ��������� phpBB 2!';
$lang['Initial_config'] = '�������� ���������';
$lang['DB_config'] = '��������� ���� ������';
$lang['Admin_config'] = '��������� ������';
$lang['continue_upgrade'] = '��� ������ �� �������� ���� �������� �� ��� ���������, �� ������ ������ ������ &laquo;���������� ����������&raquo; ��� ����������� ��������. ����������, �� ����������� ���� �������� �� ������ �� ���������� �������� ����������.';
$lang['upgrade_submit'] = '���������� ����������';

$lang['Installer_Error'] = '� �������� ��������� �������� ������';
$lang['Previous_Install'] = '���� ���������� ���������� ���������';
$lang['Install_db_error'] = '��� ������� �������� ���� ������ �������� ������';

$lang['Re_install'] = '���������� ��������� �� ��� �������. <br /><br />���� �� ������ ���������� phpBB 2 ������, �� ������ ������ ������ &laquo;��&raquo; �����. ������, ��� ��� ���� ����� ���������� ��� ��������� ������, ������� ����� ������� �� �����! ����� ���������������� ��� � ������ �������������� ����� ����� ������� ����� �������������, ��������� ��������� ����� ��������. <br /><br />��� ������� ���������, ������ ��� �������� &laquo;��&raquo;!';

$lang['Inst_Step_0'] = '������� ��� �� ����� phpBB 2. ��� ����������� ��������� �������, ����������, ��������� ��������. ������, ��� ���� ������, � ������� �� �������������� phpBB 2, ��� ������ ������������. ���� �� �������������� � ��, ������������ ODBC (��������, MS Access), ��� ���� ������� ������� ��� �� DSN.';

$lang['Start_Install'] = '������ ���������';
$lang['Finish_Install'] = '��������� ���������';

$lang['Default_lang'] = '���� �� ���������';
$lang['DB_Host'] = '��� ������� �� / DSN';
$lang['DB_Name'] = '�������� ���� ������';
$lang['DB_Username'] = '��� ������������ ��';
$lang['DB_Password'] = '������ � ��';
$lang['Database'] = '���� ������';
$lang['Install_lang'] = '�������� ���� ��� ���������';
$lang['dbms'] = '��� ���� ������';
$lang['Table_Prefix'] = '������� ��� ������ � ���� ������';
$lang['Admin_Username'] = '��� ��������������';
$lang['Admin_Password'] = '������ ��������������';
$lang['Admin_Password_confirm'] = '������ �������������� [ ��������� ]';

$lang['Inst_Step_2'] = '���� ������� ������� ������ ��������������. �������� ��������� �� ���� ���������. ������ �� ������ ������������ �� ��������, � ������� �� ������� ��������� ����� ���������. ����������� ��������� ������ �������� �������� � ������� ����������� ���������. ������� ��� �� ����� phpBB 2.';

$lang['Unwriteable_config'] = '������ � ���� �������� ����������. �� ������� ������� ����� �����, ���� ������ ��������������� ������. ��� ���� ����� �������� ���� ���� � �������, � ������� �� ���������� phpBB 2. ��� ������ ��� ����� �������, �� ������� ����� � �������, ��������� ����� �������� ��� � ������ ��������������, � ������� � ����������������� ������ (������ ����� ����� ������ ��������), ����� ��������� �������� ���������. ������� ��� �� ����� phpBB 2.';
$lang['Download_config'] = '������� ���� ��������';

$lang['ftp_choose'] = '�������� ����� ����������';
$lang['ftp_option'] = '<br />� ���� ������ PHP �������� ����������� FTP, �� ������ ����������� ������� ������������� �������� ���� �������� �� FTP � ������ �������.';
$lang['ftp_instructs'] = '�� ������ �������� ���� �������� �� FTP � �������, ���������� phpBB 2. ����������, ������� ����������, ��������� ��� ������������� ����� ��������. ������, ��� ���� FTP ������ ���� ������ ���� � ����� ��������� phpBB 2, ��� ���� �� �� ������������ ������� �������� FTP.';
$lang['ftp_info'] = '������� ��������� FTP';
$lang['Attempt_ftp'] = '����������� �������� ���� �������� �� FTP';
$lang['Send_file'] = '������ �������� ����, � ������� ��� �������';
$lang['ftp_path'] = '���� FTP � �������� phpBB 2';
$lang['ftp_username'] = '��� ������������ ��� FTP';
$lang['ftp_password'] = '������ ��� FTP';
$lang['Transfer_config'] = '������ �������';
$lang['NoFTP_config'] = '������� �������� ���� �������� �� FTP ����������� ��������. ����������, �������� ���� �������� � ��������� ��� � ������ ������� �������.';

$lang['Install'] = '���������';
$lang['Upgrade'] = '����������';


$lang['Install_Method'] = '�������� ����� ���������';

$lang['Install_No_Ext'] = '������������ PHP �� ����� ������� �� ������������ ��������� ���� ����';

$lang['Install_No_PCRE'] = '��� ������ phpBB2 ��������� ������ ����-����������� ���������� ���������, �������, ������, �������� � ����� ������������ PHP!';
$lang['proxy_title'] = '������������ ����������� ����� ������-�������';
$lang['proxy_desc'] = '�� ���� ��������� �� ������� ��������� ����������� ��������� IP-������ ������������� ������� �� ������� ����� ����� ������-������.';
$lang['proxy_test'] = '��������� IP-�����';
$lang['proxy_test_desc'] = '���������, ������������� �� ��������� IP-����� ���������� ������-������. ���������, ���� ��� ����������� ���� ���������� ������-��������.';
$lang['proxy_ip'] = 'IP-�����';
$lang['proxy_enable'] = '���������� ������������� ������-��������';
$lang['proxy_ban'] = '����������� �������� ������-�������';
$lang['proxy_ban_explain'] = '����������� IP-�����, ���� �� ���������� ������.';
$lang['proxy_timeout'] = '����� �������� ����������';
$lang['proxy_timeout_explain'] = '��� ������ ��������, ��� ����� ����� ������������ ����������� ������, �� ������������, ���������� ����������������, ������ ����� ������ �����.';
$lang['proxy_seconds'] = '������';
$lang['proxy_minutes'] = '�����';
$lang['proxy_hours'] = '�����';
$lang['proxy_days'] = '����';
$lang['proxy_weeks'] = '������';
$lang['proxy_months'] = '�������';
$lang['proxy_years'] = '���';
$lang['proxy_type'] = '���';
$lang['proxy_last_checked'] = '��������� ��������';
$lang['proxy_port'] = '����';
$lang['proxy_ports'] = '����� ��� ������������';
$lang['proxy_ports_explain'] = '������������, �� 64 ������ ����� ���� ������������ �����������, �� �����������, ����� ���������� ������ ��������� � ��������.';
$lang['proxy_cache_time'] = '����� ����';
$lang['proxy_cache_time_explain'] = '����������, ��� ����� ��������� ���� � ���-�� IP-�����. ���� ������ 0, �� IP-������ ������� �� ����� ����������� ������.';
$lang['proxy_user_agent'] = '������ User-Agents';
$lang['proxy_user_agent_explain'] = '����������, ��� ������� HTTP ������ ���������������� ���� ��� ������� ����������� � ������.';
$lang['proxy_debug'] = '���������� ����������';
$lang['proxy_settings'] = '��������� ����';
$lang['proxy_list_desc'] = '������������� ��� ��������� �������������� ������.';
$lang['proxy_sample_http_1'] = '������ HTTP-������� � 1';
$lang['proxy_sample_http_2'] = '������ HTTP-������� � 2';
$lang['proxy_sample_sql'] = '������ SQL-�������';
$lang['proxy_exec_time'] = '����� ����������';
$lang['proxy_none'] = '������-������� �� ����������.';
$lang['proxy_connect_error'] = '���������� ����������� � %s ��� �������� ���������<br /><b>������ %d</b>: %s';
$lang['proxy_testing'] = '�������� <b>%s</b>...';
$lang['proxy_hostname'] = '��� ����� <b>%s</b>';
$lang['proxy_check'] = '���������';
$lang['proxy_view_list'] = '����������� ������';
$lang['proxy_deleted'] = '%s ��� ������� ������.';
$lang['proxy_download'] = '������� ��� �����';
$lang['proxy_return'] = '������� %s�����%s ��� �������� �� ���������� ��������';
$lang['proxy_name'] = '���������� ������';

// Additional Stuff for phpBB2 Plus only ! Translators should get original Language Files for phpBB 2.0.8
// for the language they want to translate from http://www.phpbb.com/downloads.php. Then they need to translate 
// the following stuff only and use the rest from the original language files !

// Start add - Birthday MOD
$lang['Birthday_required'] = '��������� ������������� ������� ���� ���� ��������';
$lang['Enable_birthday_greeting'] = '�������� ������������ � ���� ��������';
$lang['Birthday_greeting_expain'] = '������������, ������� ������� ���� ���� ��������, ����� �������� ������������, ����� �������� ������';
$lang['Next_birthday_greeting'] = '��������� ���� ��������...';
$lang['Next_birthday_greeting_expain'] = '��� ���� ���������� ���� �� ��������� ���, �������������, ������� ���� ����������';
$lang['Wrong_next_birthday_greeting'] = '��������� ��� � ����� �������� ��� �� ������, ���������� �����';
$lang['Max_user_age'] = '������������ �������';
$lang['Min_user_age'] = '����������� �������';
$lang['Birthday_lookforward'] = '��� ��������, �������';
$lang['Birthday_lookforward_explain'] = '�� ������� ���� ������ ������ �������� ��� ��������';
// End add - Birthday MOD

// Start add - Last visit MOD
$lang['Hidde_last_logon'] = "�������� ��������� ����� �����"; 
$lang['Hidde_last_logon_expain'] = "���� ��, �� ��������� ����� ����� ������ ��� ���� ����� ���������������"; 
// End add - Last visit MOD

// FLAGHACK-start
$lang['Flags'] = '�����';
$lang['Flags_title'] = '���������� �������';
$lang['Flags_explain'] = '��������� ��� ����� �� ������ ���������, �������������, ������������� � ������� �����. �� ����� ������ ������� ������ ����, �� ����� �������� � ������';
$lang['Add_new_flag'] = '�������� ����� ����';
$lang['Flag_name'] = '��������';
$lang['Flag_pic'] = '�����������';
$lang['Flag_image'] = '����������� ����� (� ����� images/flags/)';
$lang['Flag_image_explain'] = '����������� �����, ���� ���� ��������� �����������';
$lang['Must_select_flag'] = '�� ������ ������� ����';
$lang['Flag_updated'] = '���� ������� ��������';
$lang['Flag_added'] = '���� ������� ��������';
$lang['Flag_removed'] = '���� ������� ������';
$lang['No_update_flags'] = '���� ������� ������. ������, ������������, ������������ ���� ����, ��������.  ��� ���� ������� �������� ����� � ������� �������';
$lang['Flag_confirm'] = '������� ����' ;
$lang['Confirm_delete_flag'] = '�� ������������� ������ ������� ��������� ����?' ;
$lang['Click_return_flagadmin'] = '������� %s�����%s ��� �������� �� �������� ���������� �������';
// FLAGHACK-end

// Start Additional Language Stuff phpBB2 Plus specific
$lang['Plus_Settings'] = '��������� phpBB2 Plus';
$lang['Enable_indexlinks'] = '���������� ������ �� ������� ��������';
$lang['Indexlinks_explain'] = '�� ������ �������� ��� ��������� ����������� ������';
$lang['General_Plusconfig'] = '������������ phpBB2 Plus';
$lang['Plusconfig_explain'] = '�� ������ ��������� phpBB2 Plus �����';
$lang['Index_Layout'] = '������������ phpBB2 Plus';
$lang['Plusstyle_explain'] = '�� ������ ������� ������ ������ �����. �� ������ ������� ������ phpBB2 Plus (������ ���������� � ������ �����) ��� ����������� ������ phpBB2 (��� ������ ����������).';
$lang['Plusstyle1'] = 'phpBB2';
$lang['Plusstyle2'] = 'Plus';
$lang['Plusstyle3'] = '�/�';
$lang['Enable_defaultavatar'] = '����������� �������';
$lang['Defaultavatar_explain'] = '�� ������ ������� ����������� ������� ��� �������������, ������� �� ������� ���� �������. �� ������� ����������� �����������, ������� ����� �������, ��� ������ default_avatar.gif � ����� /images';
$lang['Enable_quickreply'] = '�������� ������� �����';
$lang['Quickreply_explain'] = '�� ������ �������� ��� ��������� ����� �������� ������';
$lang['Enable_shoutbox'] = '�������� �������';
$lang['Shoutbox_explain'] = '�� ������ �������� ��� ��������� �������';
$lang['Shoutbox_yes_reg'] = '��������� ������ ��� ������������������';
$lang['Shoutbox_portal'] = '������ ������';
$lang['Shoutbox_portal_reg'] = '������ ������ (���.)';
$lang['Shoutbox_index'] = '������ �� ������';
$lang['Shoutbox_index_reg'] = '������ �� ������ (���.)';
$lang['Shoutbox_yes'] = '���.';
$lang['Shoutbox_no'] = '����.';
$lang['Enable_Lastvisit'] = '�������� ����������� ���������� ��������� �� ������';
$lang['Lastvisit_explain'] = '�� ������ �������� ��� ��������� ����������� ������������� �� ������� (��������� ���������) �� �������';
$lang['Lastvisit_24guest'] = '������� + �����(!!����������� ��������)'; 
$lang['Enable_Gentime'] = '�������� ���������� ��������� �������� � ������ �����������';
$lang['Gentime_Explain'] = '�� ������ �������� ��� ��������� ������� ���������� ������� ��������� �������� � ������ ����������� �������. ��� ���������� PHP � SQL c���������';
$lang['Enable_Bannerhack'] = '�������� ������';
$lang['Bannerhack_explain'] = '�� ������ �������� ��� ��������� �������';
$lang['Confirm_code_guestpost'] = '�������� ���������� ������������� ��� ������';
$lang['Confirm_guestpost_Explain'] = '������� ������ ������ ��� ����������� ��� ������� �����.';
$lang['Fulltext_Config'] = '�������� �������������� ����� � �.�.';
$lang['Fulltext_Explain'] = '���� �� ������� ���������� ���� ������ � �.�., �� ������ ������������ �������������� ����� � MySQL.';
// End additional Language Stuff phpBB2 Plus specific 

//
// Bookmark Mod
//
$lang['Max_bookmarks_links'] = '������������ ����� ��������';
$lang['Max_bookmarks_links_explain'] = '������������ ����� ��������. ��� ���������� ��� Mozilla. ������� 0 ��� ���������� �������.';

// Admin Account Actions Mod
$lang['Deleted_user'] = "������������ � ��������������� #%d ������"; //%d = user id
$lang['Activate_title'] = '�������� � ���������';
$lang['Reg_date'] = '���������������';
$lang['Activate'] = '������������';
$lang['Actions'] = '��������';
$lang['Waiting_1'] = '(���� ��������� � %d)'; // %d = day
$lang['Waiting_2'] = '(���� ��������� � %d)'; // %d = days
$lang['No_users'] = '��� �������������, ��������� ���������.';
$lang['Total_member'] = '<b>%d</b> ������������ ���� ���������.';
$lang['Total_members'] = '<b>%d</b> ������������� ���� ���������.';

// Start add - Fully integrated shoutbox MOD
$lang['Prune_shouts'] = '���������� ������';
$lang['Prune_shouts_explain'] = '����� ���� ����� ��������� ������, ���� 0, �� ���������� ���������';
// End add - Fully integrated shoutbox MOD


//
// mod : ezportal Admin
//
$lang['EZPortal_Config'] = '������������ EZPortal';
$lang['EZPortal_Portal_settings'] = '��������� EZPortal';
$lang['Welcome_Text'] = '�����������';
$lang['Number_of_News'] = '���������� ��������';
$lang['News_length'] = '����� ��������';
$lang['News_Forum'] = '������ ��������';
$lang['Poll_Forum'] = '������ �������';
$lang['Number_Recent_Topics'] = '���������� ��������� ���';
$lang['Number_Recent_Files'] = '���������� ��������� ������';
$lang['Last_Seen'] = '��������� ������������ �� �������';
$lang['Comma'] = '��������� �������������� ������� �������';
$lang['Exceptional_Forum'] = '������ ��� ��������� ���, ��������, 2,4,10';
$lang['Exceptional_Comma'] = '������� �������������(�) ������(��), ������� �� <b>��</b> ������ ������ � ������� ��������� ��� � �������.';
$lang['Picture_cat_id'] = '���������, ��������� ����������� ������� �� ������ ����������. ��������� 0 ��� ����������� ���� ���������';
$lang['Picture_number'] = '����� ����������� � �������';
$lang['Picture_all'] = '������� <b>��</b>, ���� �� ������ ���������� ����� ������ ����������, � ��������� ������ ����� ������������ ������ ����� ����������.';
$lang['Picture_sort'] = '������� <b>��</b>, ���� �� ������ ���������� ����� ����������, � ��������� ������ ����� ������������ ��������� ����������.';
$lang['Recent_Pic_Settings'] = '��������� ��� ��������� ���� � �������';
$lang['Pic_Comma'] = '��������� ��������� ����� �������';
//

//  END ezportal Admin
//
// Start add - Yellow card admin MOD
$lang['Ban'] = '���';
$lang['Max_user_bancard'] = '������������ ����� ��������������';
$lang['Max_user_bancard_explain'] = '���� ������������ ������� ������� ���������� ������ ��������, ��� ���������, �� �� ����� �������';
$lang['ban_card'] = '������ �����';
$lang['ban_card_explain'] = '������������ ����� �������, ���� �������� %d ������ ����';
$lang['Greencard'] = '���������';
$lang['Bluecard'] = '��������� �����';
$lang['Bluecard_limit'] = '�������� ����� �����';
$lang['Bluecard_limit_explain'] = '��������� ����������� ����� �� ������ x ����� ����� � ���������';
$lang['Bluecard_limit_2'] = '����������� ����� ����';
$lang['Bluecard_limit_2_explain'] = '������ ����������� ����������� ����������, ����� ��������� ������� ������������ ���������� ����� ����';
$lang['Report_forum']= '�������� � ������';
$lang['Report_forum_explain'] = '��������� ID �������, ��� ������ ������������� ��������, �������� 0 �������� ��� �������, ������������ ������� �������� ������ � ���� �����';

// Start add - Protect user account MOD
$lang['user_password_settings'] = '��������� �������';
$lang['Max_login_error'] = '����� �������� ����� ����������� ������������';
$lang['Max_login_error_explain'] = '���� ������������ ������ �������� ������, �����, ����� ��� ������� �������� �����������, ������� ������� ��� ����� ���� ������ �������� ������ ����� �����������';
$lang['Block_time'] = '����� ����������';
$lang['Block_time_explain'] = '�� ������� ����� ������������� �������, ���� ������ ������ ����������� ������ ���������� ����������';
$lang['Password_complex'] = '�������� ������';
$lang['Password_complex_explain'] = '������������ ����� ��������� ��� �������';
$lang['Password_len'] = '����������� ����� ������';
$lang['Password_len_explain'] = '���������� �������� ����� [ 1 - 32 ]';
$lang['Password_not_login'] = '������ ���������� �� �����';
$lang['Password_not_login_explain'] = '������ ������ ���������� �� ����� ������������';
$lang['Account_block'] = '������� ������������';
$lang['Account_block_explain'] = '����� �� ������ �����������/������ ��� �������� ���� ���������� �������������';
$lang['Block_until'] ='������������ ��: %s';// %s is substituded with the date/time
$lang['Block_by'] = '������������ �� IP: %s';// %s is substituded with the ip addr.
$lang['Last_block_by'] = '��������� ������������ �� IP: %s';// %s is substituded with the ip addr.
$lang['Unblock_user'] ='�������������� �������';
$lang['Block_user'] ='������������� ������� �� %s �����';// %s is substituded with the date/time
$lang['Badlogin_count'] = '����� ������������ ������';
$lang['Force_new_passwd'] = '��������� ������������ ������� ������ ��� �����';
$lang['Force_new_passwd_detail'] = '�������� �����, ����� ��������� ����� ������������ �������� ���/�� ������ ��� ��������� ����� � �������.';
$lang['Password_intervall'] = '���� ����� ���, ��� ��������� ������������� ������� ������';
$lang['Password_intervall_explain'] = '������� ����� ���� ����� ������� ������������ ��������� ����� �������� �� ������. ������������ ����� �������� <b> 0 </b> �������� ��� �������!';
$lang['Password_expire'] = '���� ������ ����� ��������������: %s';
// End add - Protect user account MOD

// Start add - Prune users MOD
$lang['Prune_users'] = '������ �������������';
// End add - Prune users MOD

// Start add - Admin add user MOD
$lang['Create_user'] = '������� ������ ������������';
$lang['Create_user_explain'] = '�� ������ ������� ������ ������������. ��� �������� ������ �������� ������ ������������ %s, ID ����� ������������ ����� � admin_users.php, �� ������ �������� ��� �������� ID, ������� ����� ������������.<br />���� 2 ����������: <br />1. ������ ������������ ����� "%s", ���� �� �� ��� ������ �� �������� ��������������<br />2. email ������ ���� ������';
// End add - Admin add user MOD

$lang['Post_count'] = '������� ��������� � ���� ������?';

$lang['Contact_Config'] = '���������� EMail';
$lang['Contact_Explain'] = '������� EMail-�����, ������� ����� ������ � ���������� �����';

//
// Acronyms
//
$lang['Acronyms_title'] = '���������� ����������';
$lang['Acronyms_explain'] = '� ���� ������ �� ������ ��������, ������������� � ������� ��������, ������� ����� ������������� ��������� � ��������� �� ������.';
$lang['Acronym'] = '�������';
$lang['Acronyms'] = '��������';
$lang['Edit_acronym'] = '������������� �������';
$lang['Description'] = '��������';
$lang['Add_new_acronym'] = '�������� �������';
$lang['Update_acronym'] = '�������� �������';

$lang['Must_enter_acronym'] = '�� ������ ������ ������� � ��� ��������';
$lang['No_acronym_selected'] = '�������� �� ������� ��� ��������������';

$lang['Acronym_updated'] = '��������� ������� ��� ������� ��������';
$lang['Acronym_added'] = '������� ��� ������� ��������';
$lang['Acronym_removed'] = '��������� ������� ��� ������� ������';

$lang['Click_return_acronymadmin'] = '������� %s�����%s ��� �������� �� �������� ���������� ����������';

// Disable Board Message Mod
$lang['Board_disable_msg'] = '��������� � ����������� �������';
$lang['Board_disable_msg_explain'] = '����� ����� ���������, ���� "��������� � ����������� �������" ��������.';

// Install Process
$lang['Welcome_install'] = '����� ���������� � ��������� phpBB 2 Plus';
$lang['Admin_intro'] = '������� �� ����� phpBB2 Plus � �������� ������ ������. ��� ������� �������� ������� ������. �� ������ ��������� �� ��� ��������, ����� �� ������ <u>������� ��������</u> � ����� ������. ��� ����������� � ������� ������, ������� �� ����������� phpBB � ����� ������. ������ ������ � ����� ����� ������ ������� ��� �������� ��� �����. ������ �������� ����� ���������� �� �������������.';
$lang['Inst_Step_0'] = '������� �� ����� phpBB2 Plus. ��� ��������� ������� ��� ������ � ���� ����. ��������, ��� ���� ������ ������ ��� ������������. � ������ ������ �������������� <b>������ MySQL</b> � phpBB2 Plus.';

$lang['Absence_user_allowed'] = '��������� ������������� �������� ����������.<br />���� ���, �� ������ ���������� � �������������� ������ ������ ���.';
$lang['Mod_able_sent_absent'] = '��������� ����������� ���������� ��������� ������������� �������������';
$lang['Absent_button_on_username'] = '���������� ������ ���������� ����� � ������ ������������<br />���� ���, �� ������ ����� �������� ������ ������ email.';

$lang['Portal_thumb_size'] = '������ ������ ������� ��� ��������� ����������� (������)';

// ShortURLs
$lang ['Enable_Shorturls'] = '�������� �������� URL';
$lang ['Shorturls_explain'] = '����� �� ������ �������� ����������� ������ �� ������ (.html). ��� ������������� ���� ������� <b>��� ���-������ ������ ������������ ���� � ����������� ������� mod_rewrite!</b>. �� ����� ������ ������� ����������� ��������� � ������ .htaccess.shorturl � ��������������� �� � .htaccess! �������� .htaccess ���� � �������� ����� ������� ������ ���� ������!';
$lang ['Disable_Sid'] = '��������� �������������� ������� ��� �������������������� ������������� (� ����, �������� Googlebot)';
$lang ['Disable_Sid_Explain'] = '���� �� ��������, ��, �������������� ������� ����� ��������� � ����� URL ������ ��� �������������������� ������������� � �����. ��������� Googlebot ����� �������� ��� �������������������� ������������.';

// Antirobot Switching
$lang['Enable_Antirobot'] = '�������� ���������� �������������';
$lang['Antirobot_Explain'] = '���������� �������� � ���������, ������������ ��� �����������.';
//
//

//Admin Users List Addon
$lang ['Admin_Users_List'] = '������ �������������';
$lang ['There_are'] = '���';
$lang ['Boardmembers'] = '����� ������ �������';
$lang ['ID'] = 'ID';
$lang ['Last_Visit'] = '��������� ���������';
$lang ['Active'] = '��������';
$lang ['Permission'] = '����� �������';

// BEGIN Disable Registration MOD
$lang['registration_status'] = '��������� �����������';
$lang['registration_status_explain'] = '��� �������� ����������� ����� ������������� �� ����� �������.';
$lang['registration_closed'] = '������� ���������� �����������';
$lang['registration_closed_explain'] = '�����, ������� �������� ������� �������� �����������, ������� ����������, ����� ����� ������������ ��������� ������������������. �������� ������, ����� ����������� �������� �� ��������� ����� ����������.';
// END Disable Registration MOD

$lang['Plus'] = 'Plus';
$lang['Portal'] = '������';
$lang['Banner'] = '�����';
$lang['Org. Configuration'] = '����. ������������';
$lang['News Admin'] = '����������������� ��������';
$lang['Download'] = '�������';
$lang['Email_List'] = '������ EMail';
$lang['Users List'] = '������ �������������';

//
// Version Check
//
$lang ['Version_up_to_date'] = '� ��� ����� ������ ������ phpBB.';
$lang ['Version_not_up_to_date'] = '��� ����� ������ <b>����</b> ����������. �����������, ��������� ��� ����� ������ phpBB ��������� �� <href = "http://www.phpbb.com/downloads.php" target = "_new"> http://www.phpbb.com/downloads.php </a>.';
$lang ['Latest_version_info'] = '��������� ��������� ������ - <b>phpBB %s</b>.';
$lang ['Current_version_info'] = '���� ������ - <b>phpBB %s</b>.';
$lang ['Connect_socket_error'] = '���������� ���������� ���������� � ������� phpBB, ��������� �� ������: <br />%s';
$lang ['Socket_functions_disabled'] = '���������� ������������ ������� �����������.';
$lang ['Mailing_list_subscribe_reminder'] = '��� ��������� ��������� ���������� ������������ ����������� � phpBB �������������� <href = "http://www.phpbb.com/support / " target = "_new"> ��������� �� ���� ��������</a>. ';
$lang['Version_information'] = '���������� � ������';
//
//Added for Topposters Configuration in Portal
$lang['Number_Topposters'] = '��������� ������ ��������';
$lang['Topposters_Explain'] = '������������ ���������� �����������, ������������ � �������. 0 �������� ��� �������.';
//
// Login attempts configuration
//
$lang['Max_login_attempts'] = '���� �������������';
$lang['Max_login_attempts_explain'] = '���������� ����������� ������� �����.';
$lang['Login_reset_time'] = '���������� �������������';
$lang['Login_reset_time_explain'] = '����� ����������';

//Advance Admin Index
//
$lang['Board_statistic'] = '���������� �������';
$lang['Database_statistic'] = '���������� ��';
$lang['Version_info'] = '���������� � �������';
$lang['Thereof_deactivated_users'] = '���������� ���������������� �������������';
$lang['Thereof_Moderators'] = '���������� �����������';
$lang['Thereof_Administrators'] = '���������� ���������������';
$lang['Deactivated_Users'] = '������������, ������� ���������� ������������';
$lang['Users_with_Admin_Privileges'] = '������������ � ������� ������';
$lang['Users_with_Mod_Privileges'] = '������������ � ������� ����������';
$lang['DB_size'] = '������ ��';
$lang['Version_of_board'] = '������ <a href="http://www.phpbb2.ru">phpbb</a>';
$lang['Version_of_PHP'] = '������ <a href="http://www.php.net/">PHP</a>';
$lang['Version_of_MySQL'] = '������ <a href="http://www.mysql.com/">MySQL</a>';

//Added for Topposters Configuration in Portal
$lang ['Number_Topposters'] = '����� ������ ���';
$lang ['Topposters_Explain'] = '������������ ��� ���������� ������ ���, ������������ � ����� ������� ������ ����. ���������� 0, ����� ��������� ���� ����';
//
// Limit Image Width MOD
//
$lang['Max_img_width'] = '������������ ������ ����������� � �������';
$lang['Max_img_width_explain'] = '������� ������������ ������ �����������, �����������, ��������� [img] ���. �������� � ��������.<br />���������� 0, ����� �������� ���������� �����������.';
//
// Limit Image Width MOD
// start PJIRC MOD

$lang['IRC'] = '������������ IRC-���';
$lang['xIRC_Chat'] = '��������� IRC-����';
$lang['IRC_Chat_updated'] = '��������� IRC-���� ������� ���������';
$lang['IRC_Click_return_chat'] = '������� %s�����%s ��� �������� � ���������� IRC-����';
$lang['IRC_Chat_explain'] = '�������������� �� ��������� ��������� - ��� ������������ ������������� ������ ����. �� ������ �������� ��� ��������� �� ������ ����������. ���� �� ������� ������ ��� ��������� ������������ � ��� ��������� ��������� �� ���������, �� �� ������ ���������� � �������� SQL � ������ ���������.';
$lang['IRC_basic'] = '������� ���������';
$lang['IRC_status'] = '������ ����';
$lang['IRC_status_open'] = '������';
$lang['IRC_status_closed'] = '������';
$lang['IRC_server'] = 'IRC-������';
$lang['IRC_port'] = 'IRC-����';
$lang['IRC_channel'] = 'IRC-�����';
$lang['IRC_language'] = '�������� ���� �� ���������';
$lang['IRC_template'] = '�������� ����� �� ���������';
$lang['IRC_access'] = '�������� �������';
$lang['IRC_popup_onoff'] = '��������� ��� � ����� ����? (����� ����� ����������� �� ��������)';
$lang['IRC_allow_guests'] = '��������� ������ ������� � ���?';
$lang['IRC_guestname'] = '�������� ���';
$lang['IRC_guestname_explain'] = '���������� ����� ������ - �� ��������� ������������� ����� � ����������� ��������!';
$lang['IRC_auth_joinlist'] = '���������������� ��� ������������� � ������ �������';
$lang['IRC_auth_joinlist_explain'] = '�������� ������, ����� ��������� ������������� ���������� �� ���� ������� �� �������. ��������� ��� ��������� �������: none + #�����1 + #�����2 + #�����3';
$lang['IRC_buttons'] = '���������� �������� � ������';
$lang['IRC_show_connect'] = '���������� ������ ���������';
$lang['IRC_show_chanlist'] = '���������� ������ ������ �������';
$lang['IRC_show_about'] = '���������� ������ � ��������';
$lang['IRC_show_help'] = '���������� ������ ������';
$lang['IRC_show_close'] = '���������� ������ �������';
$lang['IRC_show_status'] = '���������� ���� ������';
$lang['IRC_show_dock'] = '���������� ���� ����������';
$lang['IRC_show_nickfield'] = '���������� ������ ����';
$lang['IRC_time_stamp'] = '���������� ������� �����';
$lang['IRC_topicscroller'] = '�������� ��������� � �������� ����';
$lang['IRC_topicscroller_definition_explain'] = '���������� �������� ��������� �� 0 - "����" �� 10 - ������������� ��������.';
$lang['IRC_quit'] = '��������� ������ �� IRC';
$lang['IRC_smilies_control'] = '���������� ��������';
$lang['IRC_smilies'] = '���������� ������?';
$lang['IRC_smilies_enter'] = '����-������� ������� �� ������?';
$lang['IRC_smilies_count'] = '���������� �������?';
$lang['IRC_smilies_count_explain'] = '������� ������� ���������� ��� ����� ����? (������������� 20)';
$lang['IRC_smilies_lines'] = '���������� ������� � ������?';
$lang['IRC_sound'] = '�������� �����';
$lang['IRC_sound_explain'] = '������ ���� ���������� �������� ����, ������� ����� ������� � ��������� ������. �� ������ ������������ �������� �� ��������� ��� ��������� ���� ����������� �������� ����� � <b>chat_room/snd/</b> �������. �������� ��������� ���� ������, �� ������ ��������� ����.';
$lang['IRC_sound_beep'] = '���� ����� � ���';
$lang['IRC_sound_beep_delay'] = '������� �������� ���������� ����� ����� � ���';
$lang['IRC_sound_query'] = '���� ��������� ���������';
$lang['IRC_sound_profile'] = '���� ��� �������� ���� �������� �������';
$lang['IRC_sound_im'] = '���� ��� �������� ���� ���������';
$lang['IRC_sound_ignore'] = '���� ��� �������� ���� ������������';
$lang['IRC_sound_unignore'] = '���� ��� �������� ���� �� ������������';
$lang['IRC_sound_away'] = '���� ��� �������� ��������� �� ���������';
$lang['IRC_sound_back'] = '���� ��� �������� ���� �����';
$lang['IRC_sound_clear'] = '���� �������� ���� �������� ����';
$lang['IRC_sound_whois'] = '���� �������� ���� ������ ��� ���� ���';
$lang['IRC_sound_help'] = '���� ��� �������� ���� ������';
$lang['IRC_soundwords_explain'] = '�������������� �����, ������� ���������� ���� ������ ���, ����� ��� ����� ���������� � ����. � ��� ���� ��� �������� ��������, �� �������������� ����� ����� �� 255 ��������. ������� ���� �����, � �������� ������ ����� ��������.';
$lang['IRC_sound_sound1'] = '���� ���� � 1';
$lang['IRC_sound_sound1words'] = '�����, ������������ ���� � 1';
$lang['IRC_sound_sound2'] = '���� ���� � 2';
$lang['IRC_sound_sound2words'] = '�����, ������������ ���� � 2';
$lang['IRC_bot_control'] = '��������� ����';
$lang['IRC_bot_overall'] = '�������� ���?';
$lang['IRC_bot_overall_explain'] = '���� ��������, �� ��� "������� �������" ����� �������� � ����.';
$lang['IRC_bot_switch1'] = '�������� ����������� ����?';
$lang['IRC_bot_switch1_yes'] = '��';
$lang['IRC_bot_switch1_no'] = '���';
$lang['IRC_bot_overall_timer'] = '����� ����� ����������� �����������';
$lang['IRC_bot_switch2'] = '�������� ���������� ����?';
$lang['IRC_bot_switch2_yes'] = '��';
$lang['IRC_bot_switch2_no'] = '���';
$lang['IRC_advanced'] = '����������� ������������';
$lang['IRC_channel2'] = 'IRC-����� � 2';
$lang['IRC_channel2_disable'] = '��������';
$lang['IRC_channel2_definition_explain'] = '��� ������������� ������� ������, ����������� � ������� #���������2.';
$lang['IRC_channel3'] = 'IRC-����� � 3';
$lang['IRC_channel3_disable'] = '��������';
$lang['IRC_channel3_definition_explain'] = '��� ������������� �������� ������, ����������� � ������� #���������3.';
$lang['IRC_multiserver'] = '�������� ������-������?';
$lang['IRC_multiserver_explain'] = '��. ������� ��� �������� ������, ���� �� ������������ ��������������.';
$lang['IRC_multiserver_server'] = '������ IRC-������';
$lang['IRC_multiserver_port'] = '������ IRC-����';
$lang['IRC_multiserver_delay'] = '����� ����� ����������� �� ������ IRC-������';
$lang['IRC_multiserver_delay_explain'] = '������� � ������������ ����� ����� ����� ������� �������������� �� ������� �������. �� ��������� ����������� 60 ���.';
$lang['IRC_use_info'] = '����������� ���������� �� �������������?';
$lang['IRC_looks'] = '����������� ���������� ������';
$lang['IRC_style_selector'] = '������������ ����� �����, ����������� � �������������?';
$lang['IRC_style_selector_definition'] = '��������� �������� �����';
$lang['IRC_style_selector_definition_explain'] = '���������� �������� �������. ��������� �������: "type name index1=color1 index2=color2 ...". �� ���������, ���� �� �� ������� � ������������ ����� ��������!';
$lang['IRC_font_style'] = '������������ ����� ������?';
$lang['IRC_font_style_definition'] = '��������� ����� ������';
$lang['IRC_font_style_definition_explain'] = '���������� ������� �������. ��������� �������: "type name fontname fontsize". �� ���������, ���� �� �� ������� � ������������ ����� ��������!';
$lang['IRC_style_nick'] = '������ ����� (����������� � ����������� ����)';
$lang['IRC_style_nick_explain'] = '����������� <b>\\b ��� �����������</b>, <u>\\u ��� �������������<u>, \\k ��� ����� - ��������� �����: \kX,Y ��� X ���� ������ � Y ���� ���� � ��������� ������ �� 0 �� 15. ����������� ��������� ��� ��������������� ��������������. �������, <b>������</b>, ���������� ���� � <b>������</b> ������������ \\o, ����� ��������� ������ ����� �������!';
$lang['IRC_show_highlight'] = '���������� ������� ���������';
$lang['IRC_highlightcolor'] = '���� ���������';
$lang['IRC_highlightcolor_definition_explain'] = '���������� ���� ���������, ���: 1 - ������, 4 - ������� � �. �. ����� ������������� ����� �� �����. �������� ������� 0-15.';
$lang['IRC_highlightwords'] = '����� ���������';
$lang['IRC_highlightwords_definition_explain'] = '������� �����, ������� ����� ������������ � �������� ��������� ����� ������.';
$lang['IRC_background_which'] = '�������� ������� �������';
$lang['IRC_background_which_0'] = '���';
$lang['IRC_background_which_1'] = '��� 1';
$lang['IRC_background_which_2'] = '��� 2';
$lang['IRC_background_which_custom'] = '��� ����� ����';
$lang['IRC_background_custom_explain'] = '�������������, ����� �� ������������ ���������, ������� ��� ������� �� �������� 1 ��� 2. ��������� ���� ���� ����� ������������, ���� �� ��� ������� � <b>chat_room/</b> ������� � ������ ����� ����������: .jpeg. jpg. gif ��� .png';

// end PJIRC MOD
// Admin HTTP Referrers Mod
$lang['HTTP_Referers_Title'] = 'HTTP-������';
$lang['HTTP_Referers_Explain'] = '����� �� ������ ������� � ����� ������ � ��� �������';
$lang['Referer_urls_show'] = '�������� URL�';
$lang['Referer_urls_hide'] = '������ URL�';
$lang['Referer_host'] = '������ ������';
$lang['Referer_url'] = '������ URL';
$lang['Referer_ip'] = 'IP ���������� ������';
$lang['Referer_hits'] = '����';
$lang['referer_del_success'] = 'HTTP-����� ��� ������� ������.';
$lang['Click_return_referersadmin'] = '������� %s�����%s ��� �������� � ���������� HTTP-�������';
$lang['Referer_firstvisit'] = '������ �����';
$lang['Referer_lastvisit'] = '��������� �����';
$lang['Confirm_delete_referer'] = '�� �������, ��� ������ ������� ���� HTTP-�����?';
$lang['Confirm_delete_referers'] = '�� �������, ��� ������ ������� ��� HTTP-������?';

// Lottery Variables
$lang ['lottery_second'] = '�������';
$lang ['lottery_seconds'] = '������';
$lang ['lottery_minute'] = '������';
$lang ['lottery_minutes'] = '�����';
$lang ['lottery_hour'] = '���';
$lang ['lottery_hours'] = '�����';
$lang ['lottery_day'] = '����';
$lang ['lottery_days'] = '���';
$lang ['lottery_no_items'] = '��� ������� � ���� ������ ��������!';
$lang ['lottery_rand'] = '��������';
$lang ['lottery_statistics'] = '���������� �������';
$lang ['lottery_edit_settings'] = '������������� ��������� �������';
$lang ['lottery_no_one'] = '�� ����';
$lang ['lottery_editor'] = '�������� �������';
$lang ['lottery_index_explain'] = '��� ������ �������� ��� ��������� �������';
$lang ['lottery_no_item'] = '������������ �������� �������!';
$lang ['lottery_invalid_action'] = '�������� �������!';
$lang ['lottery_click_to_return'] = '������� %s�����%s ��� �������� � �������������� �������';
$lang ['lottery_random_items_updated'] = '��������� ���������� ������ ������� ������� ���������!';
$lang ['lottery_item_added'] = '������� ������� ��������� � ��� ����������!';
$lang ['lottery_item_removed'] = '������� ������� ������� �� ���� ����������!';
$lang ['lottery_updated'] = '������� ������� ����������!';
$lang ['lottery_status'] = '������ �������';
$lang ['lottery_add_item'] = '�������� �������';
$lang ['lottery_add_items'] = '�������� ������� � ���';
$lang ['lottery_remove_item'] = '������� �������';
$lang ['lottery_current_items'] = '������� ��������� ����';
$lang ['lottery_update_settings'] = '�������� ���������';
$lang ['lottery_max_cost'] = '������������ ���������';
$lang ['lottery_min_cost'] = '����������� ���������';
$lang ['lottery_all_shops'] = '��� ��������';
$lang ['lottery_from_shop'] = '�� ��������';
$lang ['lottery_update'] = '��������';
$lang ['lottery_currency'] = '������������ ������';
$lang ['lottery_history'] = '������� �������';
$lang ['lottery_item_pool'] = '��� �������';
$lang ['lottery_full_display'] = '������ �����������';
$lang ['lottery_max'] = '��������';
$lang ['lottery_off'] = '����';
$lang ['lottery_on'] = '���';
$lang ['lottery_mult_tickets'] = '������� ������ ������ ������?';
$lang ['lottery_multiple'] = '�����������';
$lang ['lottery_single'] = '����������';
$lang ['lottery_tickets_allowed'] = '������������ ������';
$lang ['lottery_draw_periods'] = '������ ������������ ���������';
$lang ['lottery_entry_cost'] = '��������� ������';
$lang ['lottery_base_amount'] = '��������� ����� �������';
$lang ['lottery_name'] = '�������� �������';
$lang ['lottery_auto_restart'] = '�������������� ����������';
$lang ['lottery_last_won'] = '��������� �������';
$lang ['lottery_pool'] = '��� �������';
$lang ['lottery_time_left'] = '�������� ������� �� ���������';
$lang ['lottery_duration_left'] = '��������� �������� �����';
$lang ['lottery_total_entries'] = '����� ����������';
$lang ['lottery_items_table'] = '������������� ��� �������';
$lang ['lottery_items_settings'] = '������������� ��������� �������';

// Lottery Error Variables
$lang ['lottery_error_updating'] = '������ ���������� ������� %s !';
$lang ['lottery_error_deleting'] = '������ �������� �� ������� %s !';
$lang ['lottery_error_selecting'] = '������ ��������� ���������� �� ������� %s !';
$lang ['lottery_error_inserting'] = '������ ������� � ������� %s !';
$lang ['lottery_error_variable'] = '�� ���� ��������� ���������� %s !';

// Job Variables
$lang['jobs_settings'] = '��������� ������';
$lang['jobs_modify_settings'] = '�������� ��������� ������';
$lang['jobs_edit_jobs'] = '������������� ������ �������������';
$lang['jobs_edit_jobs_settings'] = '������������� ��������� ������';
$lang['jobs_create_new'] = '������� ����� ������';
$lang['jobs_editor'] = '�������� ������';
$lang['jobs_edit_user'] = '������������� ������������';
$lang['jobs_edit_job'] = '������������� ������';
$lang['jobs_dont_have'] = '� ��� ��� ���� ������!';
$lang['jobs_no_action'] = '�� ������� ��������!';
$lang['jobs_already_exists'] = '��� ������ ��� ����������!';
$lang['jobs_already_has_one'] = '� ��� ��� ���� ��� ������!';
$lang['jobs_status'] = '������ ������';
$lang['jobs_job_name'] = '�������� ������';
$lang['jobs_job_positions'] = '������� ������� ����';
$lang['jobs_job_type'] = '��� ������';
$lang['jobs_job_pay'] = '������ ������';
$lang['jobs_job_time'] = '���� ������';
$lang['jobs_job_requirements'] = '����������';
$lang['jobs_private'] = '������';
$lang['jobs_public'] = '���������';
$lang['jobs_pay_out_type'] = '��� �������';
$lang['jobs_on'] = '���';
$lang['jobs_off'] = '����';
$lang['jobs_max_pp'] = '�������� ����� �� ������� ������������';
$lang['jobs_pay_pp'] = '������ ������������';
$lang['jobs_pay_all'] = '������� ����';
$lang['jobs_extended'] = '�����������';
$lang['jobs_compact'] = '����������';
$lang['jobs_index'] = '����� �������';
$lang['jobs_second'] = '�������';
$lang['jobs_seconds'] = '������';
$lang['jobs_minute'] = '������';
$lang['jobs_minutes'] = '�����';
$lang['jobs_hour'] = '���';
$lang['jobs_hours'] = '�����';
$lang['jobs_day'] = '����';
$lang['jobs_days'] = '����';

$lang['jobs_explain_main'] = '����� �� ������ ������������� ��������� �����, ��������� ����� ������, ������������� ������ ������ � ������������� ����� �� �������, ������� ������������ � ��������� �����.';
$lang['jobs_explain_user'] = '����� �� ������ ������������� ������, �� ������� ������������ ����� � ��������� �����.';
$lang['jobs_explain_jobs'] = '����� �� ������ ������������� ������������ ���������� ������, � �������, ����� ������, ���� ������ � ��� �����.';

$lang['jobs_global_updated'] = '��������� ������ ������� ���������!';
$lang['jobs_updated'] = '������ ������� ���������!';
$lang['jobs_deleted'] = '��� ������� ������� � ������ ������� �������!';
$lang['jobs_invalid_name'] = '�������� ���!';
$lang['jobs_created'] = '������ ������� �������!';
$lang['jobs_user_updated'] = '������������ ��������!';

$lang['jobs_main_link'] = '������� %s�����%s ��� �������� �� ������� �������� ��������� �����.';

//buttons
$lang['jobs_button_update'] = '��������';
$lang['jobs_button_edit'] = '������������� ������';
$lang['jobs_button_find'] = '����� ������������';
$lang['jobs_button_job'] = '������� ������';
$lang['jobs_button_add'] = '�������� ������';
$lang['jobs_button_fire'] = '������� � ������!';
$lang['jobs_button_update_job'] = '�������� ������';
$lang['jobs_button_delete_job'] = '������� ������';

// Job Error Variables
$lang['jobs_error_updating'] = '������ ���������� ������� %s!';
$lang['jobs_error_deleting'] = '������ �������� �� ������� %s!';
$lang['jobs_error_selecting'] = '������ ��������� ���������� �� ������� %s!';
$lang['jobs_error_inserting'] = '������ ������� ������ � ������� %s!';
$lang['jobs_error_variable'] = '���������� ��������� ���������� %s!';
$lang['jobs_invalid_action'] = '�������� ��������!';

// Start add - Max sessions MOD
$lang['Max_sessions'] = '����������� ������';
$lang['Max_sessions_explain'] = '����� ����������� ����������� ���������� ������';
$lang['Max_sessions_ip'] = '����������� ������ � ������ IP';
$lang['Max_sessions_ip_explain'] = '����� ����������� ������������ ���������� ������ � ������ IP';
// End add - Max sessions MOD

$lang['Rabbitoshi_Pets_Management']='���������� ���������';
$lang['Rabbitoshi_Shop']='������� ��������';
$lang['Rabbitoshi_settings']='������������';
$lang['Rabbitoshi_owners']='��������������';


// [begin] Glance mod
$lang['Glance_anno_post_explain'] = '����� ����� ��������� ����� ������������ � ������� ���������� �� ������� �������� ������� � ������.';
$lang['Glance_recent_explain'] = '����� ��������� ��� ����� ������������ � ������� ��������� ��� �� ������� �������� ������� � ������.';
// [end] Glance mod

//
// Jabber
//
$lang['Board_jabber_form'] = '�������� jabber ��������� ����� ������';
$lang['Board_jabber_form_explain'] = '������������ ������ �������� ���� ����� jabber ��������� ����� ������';

$lang['Default_jabber_language'] = '���� jabber-��������� �� ���������';

$lang['Jabber_settings'] = '��������� Jabber';
$lang['Jabber_server'] = '����� Jabber-�������';
$lang['Jabber_port'] = '���� ������� ��� jabber-�����������';
$lang['Jabber_resource'] = '������ ������������, ������������ Jabber-�������';
$lang['Jabber_resource_explain'] = '�������� Forum_www.somedomen.com';
$lang['Jabber_username'] = '��� jabber ������������';
$lang['Jabber_username_explain'] = '��� ������� ������ ������������������� �� Jabber-������� ������������';
$lang['Jabber_password'] = '������ ��� jabber ������������';
$lang['Jabber_password_explain'] = '������ ������� ������ ������������������� �� Jabber-������� ������������';

//
// Begin Syntax Highlighting Mod
//
$lang['Syntax_Highlighting'] = '��������� ����������';
$lang['syntax_explain'] = '����� �� ������ ��������� ���������� ���������� ��������� � �������������� BBCode\'�  [syntax]. ��������� ���������� ����������� �� ���� <a href="http://qbnz.com/highlighter">GeSHi</a>, ������������ ����� ��������� <a href="http://qbnz.com/highlighter/documentation.php">�����</a>, ���� �� ������ ��������� ����������� ����� ���� ��������������.';
$lang['Syntax_highlighting_advanced_mode'] = '��������� ���������� ��������� � <span style="color: green;">�����������</span> ������. ��� ��������, ��� � ��� ������ ������ �� ���� ������������ ����� ����.';
$lang['Syntax_highlighting_simple_mode'] = '��������� ���������� ��������� � <span style="color: #FF6600;">�������</span> ������. ����� ������� � ����������� �����, �� ������ ��������� ������ <code>install_syntax.php</code>, ������������� � ���� ��������� ����������, ��� SQL, ��������� � ���-�����.';
$lang['Syntax_main_control'] = '������� ���������';
$lang['Syntax_main_control_explain'] = '<p>����� �� ������ ��������� ���������� �� �������� ������. �� ������ ������� ���� �� ���� ���������:</p>

<ul class="gen">
    <li><p><strong>�������� ��������� ����������</strong>: ���� �� ����������� ���� �����, ������������� ���������� �� ����� ������� ����� ���������. ������������ ������ ��������/��������� ��������� ���������� ��� ���� �� �������.</p></li>
    <li><p><strong>��������� ��������� ����������, �� ������������ ����� [syntax], ��� [code]</strong>: ����� ����� ������ ����� �������������, ��� bbcode [syntax] ����������������, ��� ����� ��� ��� ���� [code]. ������������ �� ������ ������������ ��������� ���������� ��� ����, ���� �� ����������� ���� �����.</p></li>
    <li><p><strong>��������� ���������� ����������</strong>: BBCode [syntax] ����� ������������. ����� ��������� �������� ���� [syntax] � ��� ���������� �� ���� ���� �� �������� FAQ. ���������� �������� ����, ��� ���� ��� ����������. ������������ �� ������ ������������ ��������� ���������� ��� ����.</p></li>
</ul>';
$lang['Syntax_cache_control'] = '���������� ������������';
$lang['Syntax_enabled'] = '�������� ��������� ����������';
$lang['Syntax_partial'] = '��������� ��������� ����������, �� ������������ ����� [syntax], ��� [code]';
$lang['Syntax_disabled'] = '��������� ���������� ����������';
$lang['Syntax_update_status'] = '�������� ������';
$lang['Syntax_main_control_disabled'] = '��� ��� �� ���������� � ������� ������, �� �� ������ �������� ��������� ��������� ���������� �� ������ �����������������. ���� �� ������� ��������/��������� ��������� ����������, �������� <code>includes/bbcode.php</code> � ������������ ��������������� ����. ����� ����, ���� �� ����������� ���������� ����, �� ������ �������� ��� (��. ���������� ���� ����).';
$lang['Syntax_cache_control_disabled'] = '��� ��� �� ���������� � ������� ������, �� �� ������ �������� ��������� ������������� ����. ���� �� ������� ��������/��������� ���, �������� <code>includes/bbcode.php</code> � ������������ ��������������� ����. ����� ����, �� ������ �������� ��� ����� ������ ��������� � ���� ����� (��. ����).';
$lang['Syntax_enable_cache'] = '�������� ���';
$lang['Syntax_update_cache_enabled'] = '��������� ��������� ����';
$lang['Syntax_clear_the_cache'] = '�������� ���';
$lang['Syntax_clear_cache_yes_no'] = '�������� ���?';
$lang['Syntax_clear_cache'] = '������� ����';
$lang['Syntax_cache_options'] = '��������� ����';
$lang['Syntax_bytes'] = '�����';
$lang['Syntax_kilobytes'] = '���������';
$lang['Syntax_megabytes'] = '���������';
$lang['Syntax_gigabytes'] = '���������';
$lang['Syntax_cache_dir_size'] = '������������ ������ �������� ���� (0 ��� ���������������, ����� �� ������� ���� 1 ��). �������������, ����� �� �������� ��� � �������������� ��� ������� ������ � ������������ ���������� ������, ����� ��������� �������� ����.';
$lang['Syntax_set_cache_options'] = '��������� ����� ����';
$lang['Syntax_cache_options_disabled'] = '��� ��� �� ����������� ������� �����, �� �� ������ �������� ��������� ����. �� ��������� ��� - 20 ��������, � �������� ������ 30 ���� ���������. ���� �� ������� ����������������� ����, �������� <code>includes/bbcode.php</code> � ������������  ��������������� ����. ����� ����, �� ������ �������� ��� ����� ����� ��������� ���� ����� (��. ����).';
$lang['Syntax_seconds'] = '������';
$lang['Syntax_minutes'] = '�����';
$lang['Syntax_hours'] = '�����';
$lang['Syntax_days'] = '����';
$lang['Syntax_months'] = '�������';
$lang['Syntax_years'] = '���';
$lang['Syntax_cache_expiry_time'] = '������� ������ ������ ������� ����� ���, ��� ��� ���������� ��������� (0 ��� ���������������, �� �� ����������).';
$lang['Syntax_line_numbers_enabled'] = '������������ ��������� ����� ��� ��� (������� ������� ���� ���� ��������)';
$lang['Syntax_function_urls_enabled'] = '������� ��������� ��������� � URL, ����� ������������ ������������ (������� ������ ���� ���� �������� � ���������� ������ � ��������� ������, ��� ������� ���� � ������� ������������).';
$lang['Syntax_general_options'] = '����� ���������';
$lang['Syntax_change_general_options'] = '�������� ����� ���������';
$lang['Syntax_language_control'] = '���������� �������';
$lang['Syntax_advanced_language_control_explain'] = '����������� ��� �����, ����� ��������� ���, � ����� ������ ����� �������������� ���������, ����� ��� ������������ � BBCode [syntax="..."] � ����� ��� ���������� ��� ���. ��������� ���� �������� ������� ���.';
$lang['Syntax_simple_language_control_explain'] = '����������� ��� �����, ����� ��������� ���, � ����� ������ ����� �������������� ���������, ����� ��� ������������ � BBCode [syntax="..."] � ����� ��� ���������� ��� ���. ��������� ���� �������� ������� ���.';
$lang['Syntax_language_name'] = '��� �����';
$lang['Syntax_language_name_explain'] = '��� - ��� GeSHi-����� �����';
$lang['Syntax_language_enabled'] = '���� �������?';
$lang['Syntax_language_enabled_explain'] = '��������� �������, ����� �������� ����';
$lang['Syntax_language_code'] = '��� �����';
$lang['Syntax_language_code_explain'] = '��� ������ ���� ��������� [syntax=&quot;...&quot;] ��� ��������� ����� �����';
$lang['Syntax_language_display_name'] = '��� ����� �� ������';
$lang['Syntax_language_display_name_explain'] = '��� �����, ������������  �� ����� ������';
$lang['Syntax_update_language_options'] = '�������� �������� �����';
$lang['Syntax_reset_language_form'] = '����� ����� ������';

$lang['Syntax_click_return_syntaxadmin'] = '������� %s�����%s ��� �������� � ���������� ��������� ����������';

$lang['Syntax_cache_cleared_successfully'] = '��� ��������� ���������� ������� ������';
$lang['Syntax_cache_not_cleared'] = '��� ��������� ���������� �� ���������';
$lang['Syntax_status_updated_successfully'] = '��������� ��������� ���������� ���������. ���������� ���������� ������� ���� ��� ��������� ����������.';
$lang['Syntax_status_not_updated'] = '������ ��������� ���������� ����� ��������, ��� ���������.';

$lang['Syntax_installer_new_install'] = '����� ���������� � ����������� SQL ���� ��������� ����������. ���� ������ ��������������, ����� ������������� ��������� SQL-�������, ��������� ��� ��������� ����� ����.<br /><br />����������, ������, ��� ���� ��� ��������<strong>�����-��</strong>. ����������� ��� ������� ��������� ����������� ����� ���� ������ ����� ���������� ����� ����!';
$lang['Syntax_installer_install_mod'] = '������������� ���';
$lang['Syntax_installer_install_files_first'] = '�� ������ ��������� ����������� ������ � ����������� ���������� ����� ���� ����� ���, ��� �� ���������� SQL-������� � ��.';
$lang['Syntax_installer_sql_failed'] = '���! �� ��������� ��������, ���� �� �������� SQL ��� ����� ���� ����������. ������, ������� ���������� ������� ����.<br /><br />��� ��� ��� �����-��, ���������� ����������� ������. ���� �� ��������� SQL ��� ���������� �������� - ����������� � .mod-����� ���������� ������� SQL, ������� ������ ���� ���������, � ��������� �� �����-���� ������ ��������.';
$lang['Syntax_installer_mod_installed'] = '����������! SQL ��� ����� ���� ������� ����������.<br /><br />����������, ������ ������� ���� ������ � ���������, ��� � ��� ������ CHMODed ���������� cache/syntax ���������� 777 (� cache/syntax/cache.txt ���� ���������� 666).';
$lang['Syntax_installer_previous_install'] = '���� �� ������ ��� ���������, ���� ��� ������� ����������. ������� ���� ����!';
//
// End Syntax Highlighting Mod
//

//+MOD: Search latest 24h 48h 72h
$lang['Search_latest_hours'] = '������ ��������� (����)';
$lang['Search_latest_hours_explain'] = '����������� ����� �������, �� ������� ����� �������� ������.';
$lang['Search_latest_hours_error'] = '�������� ������ ������� � \'������ �� ��������� (����)\'.<br /><br />����������, ������� ����� ����� �������.';
$lang['Search_latest_results'] = '������ ��������� (���������)';
$lang['Search_latest_results_explain'] = '�������, � ����� ���� ���������� ��������� ������.';
//-MOD: Search latest 24h 48h 72h

//

//Copyright Information
$lang['site_copyright'] = 'Copyright �����';
$lang['site_copyright_explain'] = '����� ����� �������� ��� �������� � ���';
$lang['site_copyright_href'] = '������ �� copyright';

// That's all Folks!
// -------------------------------------------------
//
// Logo Selector MOD
$lang['f_Logo_settings'] = '��������� �������� ������';
$lang['f_Logo_explain'] = '����� �� ������ ������� ���� � ����� � ���������� ������, ������� ����������� �� ���� �����, �������� ������ � ������ �����������.';
$lang['f_Logo_path'] = '���� �������� ��������� ������';
$lang['f_Logo_path_explain'] = '���� ������������ ����� phpBB � ��������� ������, � ������� images/logo';
$lang['f_Logo'] = '�������� ������� ������';
$lang['f_Logo_dimensions'] = '������ ����������� �������� ������';
$lang['f_Logo_dimensions_explain'] = '(������ x ������ � ��������) ';
$lang['p_Logo_settings'] = '��������� �������� �������';
$lang['p_Logo_explain'] = '����� �� ������ ������� ���� � ����� � ���������� �������, ������� ����������� �� ���� �����, �������� ������ � ������ �����������.';
$lang['p_Logo_path'] = '���� �������� ��������� �������';
$lang['p_Logo_path_explain'] = '���� ������������ ����� phpBB � ��������� �������, � ������� images/logor';
$lang['p_Logo'] = '�������� ������� �������';
$lang['p_Logo_dimensions'] = '������ ����������� �������� �������';
$lang['p_Logo_dimensions_explain'] = '(������ x ������ � ��������) ';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = '��������� �������������� ���� �� �����';
$lang['Allow_autologin_explain'] = '�������� �� ������������� �������������� ���� �� �����';
$lang['Autologin_time'] = '�������������� ���� �� ����� ������������';
$lang['Autologin_time_explain'] = '���� � ���� � ���������� ���������, � ������� �������� ������������ ����� ������������� ����� �� �����. ���������� ������ ����, ���� ������ ��������� ������ �����������.';

$lang['Stylesheet_explain'] = '��� ����� � �������� ������ ��� ������� �������.';

$lang['Styles_Management'] = '���������� �������';

// XS News
$lang['XS_News_Config'] = '���������� ���������';
$lang['XS_News'] = '��������� ������� ��������';
$lang['XS_News_Tickers'] = '��������� ���� ��������';
$lang['xs_news_settings'] = '��������� XS-��������';
$lang['xs_news_show'] = '���������� ����� ��������?';
$lang['xs_news_show_ticker'] = '���������� �������� �����?';
$lang['xs_news_show_ticker_explain'] = '���� �� ���������� ���, �� ��������� ����������� � ��������� ��������� ����. ���� ������� ��, �� ���� ����� ��������� ����� ����������� ��������� ����.';
$lang['xs_news_show_ticker_subtitle'] = '���������� ��������� ��������� ����?';
$lang['xs_news_show_ticker_subtitle_explain'] = '������� �� ��� ����������� ����� � ������� ��������� ����.';
$lang['xs_news_show_news_subtitle'] = '���������� ��������� ��������?';
$lang['xs_news_show_news_subtitle_explain'] = '������� �� ��� ����������� ����� � ������� ��������.';
$lang['xs_news_dateformat'] = '������ ����';
$lang['xs_news_dateformat_helper'] = '������������ ������ ��: %s';

// XS Nav Menus
$lang['XS_Nav_Menus'] = '��������� ����';
$lang['xs_display_settings'] = '��������� XS-Nav ����';
$lang['xs_display_left'] = '���������� ����� ����?';
$lang['xs_display_left_explain'] = '���� �� �������� ��, �� ����� �������� ����������� ����� ������';
$lang['xs_display_right'] = '���������� ������ ����?';
$lang['xs_display_right_explain'] = '���� �� �������� ��, �� ����� �������� ����������� ������ ������';
$lang['xs_display_left_width'] = '������ ����� ������������� ������, �� ��������� 160';
$lang['xs_display_right_width'] = '������ ������ ������������� ������, �� ��������� 160';
$lang['xs_nm_exclude_forums'] = '��������� ������';
$lang['xs_nm_exclude_forums_explain'] = 'ID �������, ������� ����� ��������� �� ������ Last # Topics list ��� �������� ��������� ���, ������������� ����� \',\'.';
$lang['xs_nm_exclude_report'] = '��������� ����� �������?';
$lang['xs_nm_exclude_report_explain'] = '���� � ��� ���������� ��� Yellow Card �� ����� �� ������ ��������� ����� ��� �������� ������� �� Last # Topics list.';

// START-faq_admin_mod
$lang['FAQ_Admin'] = '���������� FAQ';
$lang['FAQ Admin'] = '������ FAQ';
$lang['BBCode Admin'] = '������ BBCode';
$lang['FAQ lang installer'] = '��������� �������� �������';
$lang['bbcode'] = 'BBCode';
$lang['bbcode_admin'] = '���������� BBCode';
$lang['Faq_admin'] = '��������� FAQ';
$lang['Faq_admin_explain'] = '����� �� ������� ���������, ������� � ������������� ��������� � ������ FAQ � BBCode';
$lang['Edit_faq'] = '������������� FAQ';
$lang['Create_faq'] = '������� ����� ����� FAQ';
$lang['Faq_edit_delete_explain'] = '����� �� ������� ��������� FAQ ����� �������';
$lang['Faq_settings'] = '��������� �������';
$lang['Faq_name'] = '��� �������';
$lang['Faq_desc'] = '�����';
$lang['Faqs_updated'] = 'FAQ � ���������� � ��������� ������� ���������';
$lang['Faq_delete'] = '������� FAQ';
$lang['Faq_delete_explain'] = '����� �� ������� ������� FAQ (��� ���������) � �������, ���� ��������� ����������';
$lang['Language'] = '����';
$lang['Click_return_faqadmin'] = '������� %s�����%s ��� �������� � ���������� FAQ';
$lang['Must_delete_faqs'] = '�� ������ ������� ��� FAQs ����� ��������� ���������';
$lang['Aff_rows_faq'] = '���������� ���� � ������� FAQ';
$lang['Aff_rows_bbcode'] = '���������� ���� � ������� BBCode';
$lang['Aff_rows_cat_t'] = '���������� ���� � ������� ���������';
$lang['Aff_rows_q_t'] = '���������� ���� � ������� ��������';
$lang['faq_admin_ad_explain'] = '����� �� ������ ������������� �������� ������ FAQs � BBCode �� �������� �������, ��������� � ����������� ��������� <a href="http://www.phpbb.com">phpBB</a>';
$lang['no_language_in_db'] = '��� ������������� ������';
$lang['no_language_on_hd'] = '��� ������ � ���������';
// END-faq_admin_mod

//
//Nickpage Allgemein
//
$lang['Nickpage'] = "������ ���������";
$lang['General_nickpage'] = "��������� ������ ���������";
$lang['Beschreibung_general_nickpage'] = "����� �� ������ ������������� ��������� ������ ��������� ������ �������. ��� ���������� ��������� ���������, ���������� ����������� <b>������������� ���������</b>.";
$lang['Anzahl_postings'] = "������� ������ ���� ��������� � ������������ ��� �������� ���������?";
$lang['Registered_only'] = "������ ������������������ ������������ ����� ������ ���������?";
$lang['Buddielist'] = "�������� ������� � �������?";
$lang['Favlinks'] = "�������� ������� � ��������� �������?";
$lang['Guestbook'] = "��������";
$lang['Allow_guestbook'] = "�������� ��������?";
$lang['Entry_per_page'] = "������� ��������� �� ��������� � ��������?";
$lang['Guestbook_guestwriter'] = "������ ������������������ ������������ ����� ��������� ��������� � ��������?";
$lang['Galerie'] = "��������";
$lang['Allow_galerie'] = "�������� ��������?";
$lang['Galerie_maxpics'] = "������������ ���������� ����?";
$lang['GD'] = "������ GD, ������������ �� �������?";
$lang['GD_1'] = "&lt; 1.6";
$lang['GD_2'] = "&gt; 1.6";
$lang['GD_3'] = "&gt; 2.0.1";
$lang['Kreatives'] = "��������� ���������";
$lang['Allow_kreatives'] = "�������� ��������� ���������?";

//
//Nickpage Pages sperren
//
$lang['Sperren'] = "������������� ���������";
$lang['Beschreibung_sperren_nickpage'] = "����� �� ������ �������� � ��������� ��������� �������������.";
$lang['Sperren_nickpage'] = "��������� ���������";
$lang['Sperren_go'] = "���������";
$lang['Sperren_search'] = "����� ������������";
$lang['Gesperrt_nickpage'] = "��������� ���������";
$lang['Gesperrt_aktion'] = "��������";
	
//
//Nickpage Pruning
//
$lang['PRUNE'] = "����� �� ������� ������� ��������� �������������.";
$lang['WHAT_YOU_WANT_TO_DO'] = '��� �� ������ �������?';
$lang['PRUNE_NOT_EXISTENT'] = '������� ��������� (��������� ��������� ��������)';
$lang['Nickpage_prune_ready'] = '������ ��������� ���������';
$lang['Nickpage_pruned_users'] = '��������� � ��������� ������ �������.';
$lang['Nickpage_pruned_np'] = '������� ���������';
$lang['Nickpage_pruned_gb'] = '������� ������ ��������';
$lang['Nickpage_pruned_ga'] = '������� ����';
$lang['Nickpage_pruned_bu'] = '������� ������';
$lang['Nickpage_pruned_li'] = "������� URL'�";
$lang['Nickpage_pruned_vo'] = '������� ������';

?>
