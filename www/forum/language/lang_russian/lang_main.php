<?php
/***************************************************************************
 *                            lang_main.php [Russian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
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
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'windows-1251';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = '�����';
$lang['Category'] = '���������';
$lang['Topic'] = '����';
$lang['Topics'] = '����';
$lang['Replies'] = '�������';
$lang['Views'] = '����������';
$lang['Post'] = '���������';
$lang['Posts'] = '���������';
$lang['Posted'] = '���������';
$lang['Username'] = '���';
$lang['Password'] = '������';
$lang['Email'] = 'Email';
$lang['Poster'] = '�����';
$lang['Author'] = '�����';
$lang['Time'] = '�����';
$lang['Hours'] = '����';
$lang['Message'] = '���������';

$lang['1_Day'] = '�� ��������� ����';
$lang['7_Days'] = '�� ��������� 7 ����';
$lang['2_Weeks'] = '�� ��������� 2 ������';
$lang['1_Month'] = '�� ��������� �����';
$lang['3_Months'] = '�� ��������� 3 ������';
$lang['6_Months'] = '�� ��������� 6 �������';
$lang['1_Year'] = '�� ��������� ���';

$lang['Go'] = '�������';
$lang['Jump_to'] = '�������';
$lang['Submit'] = '���������';
$lang['Sending'] = '������������';
$lang['Reset'] = '�������';
$lang['Cancel'] = '������';
$lang['Preview'] = '��������������� ��������';
$lang['Confirm'] = '�����������';
$lang['Spellcheck'] = '����������';
$lang['Yes'] = '��';
$lang['No'] = '���';
$lang['Enabled'] = '��������';
$lang['Disabled'] = '���������';
$lang['Error'] = '������';

$lang['Next'] = '���������';
$lang['Previous'] = '����������';
$lang['Goto_page'] = '�� ��������';
$lang['Joined'] = '���������������';
$lang['IP_Address'] = '����� IP';

$lang['Select_forum'] = '�������� �����';
$lang['View_latest_post'] = '����������� ��������� ���������';
$lang['View_newest_post'] = '����� ����� ���������';
$lang['Page_of'] = '�������� <b>%d</b> �� <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = '����� ICQ';
$lang['AIM'] = '����� AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['JABBER'] = 'Jabber';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '������ ������� %s';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = '������ ����� ����';
$lang['Reply_to_topic'] = '�������� �� ����';
$lang['Reply_with_quote'] = '�������� � �������';

$lang['Click_return_topic'] = '%s��������� � ����%s'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '%s����������� ��� ���%s';
$lang['Click_return_forum'] = '%s��������� � �����%s';
$lang['Click_view_message'] = '%s����������� ���� ���������%s';
$lang['Click_return_modcp'] = '%s��������� � ������ ���������%s';
$lang['Click_return_group'] = '%s��������� � ���������� � �������%s';

$lang['Admin_panel'] = '������� � ����������������� ������';

$lang['Board_disable'] = '��������, ��� ������ ���������. ���������� ����� �������.';


//
// Global Header strings
//
$lang['Registered_users'] = '������������������ ������������:';
$lang['Browsing_forum'] = '������ ���� ����� �������������:';
$lang['Online_users_zero_total'] = '������ ����������� �� ������ <b>0</b>, �� ��� ';
$lang['Online_users_total'] = '������ ����������� �� ������ <b>%d</b>, �� ��� ';
$lang['Online_user_total'] = '������ ����������� �� ������ <b>%d</b>, �� ��� ';
$lang['Reg_users_zero_total'] = '������������������: 0, ';
$lang['Reg_users_total'] = '������������������: %d, ';
$lang['Reg_user_total'] = '������������������: %d, ';
$lang['Hidden_users_zero_total'] = '�������: 0 � ';
$lang['Hidden_user_total'] = '�������: %d � ';
$lang['Hidden_users_total'] = '�������: %d � ';
$lang['Guest_users_zero_total'] = '������: 0';
$lang['Guest_users_total'] = '������: %d';
$lang['Guest_user_total'] = '������: %d';
$lang['Record_online_users'] = '������ ����� ����������� <b>%s</b> ����� ���� %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%s�������������%s';
$lang['Mod_online_color'] = '%s���������%s';

$lang['You_last_visit'] = '�� ��������� ��� �������� %s'; // %s replaced by date/time
$lang['Current_time'] = '������� ����� %s'; // %s replaced by time

$lang['Search_new'] = '����� ��������� � ������ ���������� ���������';
$lang['Search_new_p'] = '����� ��������� � <br />���������� ���������';
$lang['Search_your_posts'] = '����� ���� ���������';
$lang['Search_unanswered'] = '����� ��������� ��� �������';

$lang['Register'] = '�����������';
$lang['Profile'] = '�������';
$lang['Edit_profile'] = '������������� ��� �������';
$lang['Search'] = '�����';
$lang['Memberlist'] = '������������';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = '����������� �� BBCode';
$lang['Usergroups'] = '������';
$lang['Last_Post'] = '��������� ���������';
$lang['Moderator'] = '���������';
$lang['Moderators'] = '����������';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = '���� ������������ �� �������� �� ������ ���������'; // Number of posts
$lang['Posted_articles_total'] = '���� ������������ �������� ���������: <b>%d</b>'; // Number of posts
$lang['Posted_article_total'] = '���� ������������ �������� ���������: <b>%d</b>'; // Number of posts
$lang['Registered_users_zero_total'] = '� ��� ��� ������������������ �������������'; // # registered users
$lang['Registered_users_total'] = '����� ������������������ �������������: <b>%d</b>'; // # registered users
$lang['Registered_user_total'] = '����� ������������������ �������������: <b>%d</b>'; // # registered users
$lang['Newest_user'] = '��������� ������������������ ������������: <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = '��� ����� ��������� � ���������� ���������'; 
$lang['No_new_posts'] = '��� ����� ��������� � ���������� ���������'; 
$lang['New_posts'] = '��������� � ���������� ���������'; 
$lang['New_post'] = '��������� � ���������� ���������';
$lang['No_new_posts_hot'] = '��� ����� ��������� [ ���������� ���� ]';
$lang['New_posts_hot'] = '����� ��������� [ ���������� ���� ]';
$lang['No_new_posts_locked'] = '��� ����� ��������� [ ���� ������� ]';
$lang['New_posts_locked'] = '����� ��������� [ ���� ������� ]';
$lang['Forum_is_locked'] = '����� ������';


//
// Login
//
$lang['Enter_password'] = '������� ���� ��� � ������ ��� ����� � �������.';
$lang['Login'] = '����';
$lang['Logout'] = '�����';

$lang['Forgotten_password'] = '������ ������?';

$lang['Log_me_in'] = '������������� ������� ��� ������ ���������';

$lang['Error_login'] = '�� ����� ��������/���������� ��� ������������ ��� �������� ������.';


//
// Index page
//
$lang['Index'] = '�������';
$lang['No_Posts'] = '��� ���������';
$lang['No_forums'] = '�� ���� ����� ��� �������';

$lang['Private_Message'] = '������ ���������';
$lang['Private_Messages'] = '������ ���������';
$lang['Who_is_Online'] = '��� ������ �� ������';

$lang['Mark_all_forums'] = '�������� ��� ������ ��� ���������';
$lang['Forums_marked_read'] = '��� ������ ���� �������� ��� ���������';


//
// Viewforum
//
$lang['View_forum'] = '�������� ������';

$lang['Forum_not_exist'] = '������, ������� �� �������, �� ����������.';
$lang['Reached_on_error'] = '�� ������ �� ��� �������� ��-�� ������.';

$lang['Display_topics'] = '�������� ����';
$lang['All_Topics'] = '��� ����';

$lang['Topic_Announcement'] = '<b>����������:</b>';
$lang['Topic_Sticky'] = '<b>����������:</b>';
$lang['Topic_Moved'] = '<b>����������:</b>';
$lang['Topic_Poll'] = '<b>[ ����� ]</b>';

$lang['Mark_all_topics'] = '�������� ��� ���� ��� ���������';
$lang['Topics_marked_read'] = '��� ���� � ���� ������ ���� �������� ��� ����������';

$lang['Rules_post_can'] = '�� <b>������</b> �������� ����';
$lang['Rules_post_cannot'] = '�� <b>�� ������</b> �������� ����';
$lang['Rules_reply_can'] = '�� <b>������</b> �������� �� ���������';
$lang['Rules_reply_cannot'] = '�� <b>�� ������</b> �������� �� ���������';
$lang['Rules_edit_can'] = '�� <b>������</b> ������������� ���� ���������';
$lang['Rules_edit_cannot'] = '�� <b>�� ������</b> ������������� ���� ���������';
$lang['Rules_delete_can'] = '�� <b>������</b> ������� ���� ���������';
$lang['Rules_delete_cannot'] = '�� <b>�� ������</b> ������� ���� ���������';
$lang['Rules_vote_can'] = '�� <b>������</b> ���������� � �������';
$lang['Rules_vote_cannot'] = '�� <b>�� ������</b> ���������� � �������';
$lang['Rules_moderate'] = '�� <b>������</b> %s������������ ���� �����%s'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = '� ���� ������ ���� ��� ���������<br />������� <b>������ ����� ����</b>, � ���� ��������� ������ ������.';


//
// Viewtopic
//
$lang['View_topic'] = '�������� ����';

$lang['Guest'] = '�����';
$lang['Post_subject'] = '��������� ���������';
$lang['View_next_topic'] = '��������� ����';
$lang['View_previous_topic'] = '���������� ����';
$lang['Submit_vote'] = '�������������';
$lang['View_results'] = '����������';

$lang['No_newer_topics'] = '�� ���� ������ ��� ����� ����� ���';
$lang['No_older_topics'] = '�� ���� ������ ��� ����� ������ ���';
$lang['Topic_post_not_exist'] = '����, ������� �� ���������, �� ����������';
$lang['No_posts_topic'] = '� ���� ���� ��� ���������';

$lang['Display_posts'] = '�������� ���������';
$lang['All_Posts'] = '��� ���������';
$lang['Newest_First'] = '������� � �����';
$lang['Oldest_First'] = '������� �� ������';

$lang['Back_to_top'] = '��������� � ������';

$lang['Read_profile'] = '����������� �������';
$lang['Send_email'] = '��������� e-mail';
$lang['Visit_website'] = '�������� ���� ������';
$lang['ICQ_status'] = '������ ICQ';
$lang['Edit_delete_post'] = '��������/������� ��� ���������';
$lang['View_IP'] = '�������� IP ����� ������';
$lang['Delete_post'] = '������� ��� ���������';

$lang['wrote'] = '�����(�)'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = '������'; // comes before bbcode quote output.
$lang['Code'] = '���'; // comes before bbcode code output.
$lang['Hide'] = '����� ��� �����������';


$lang['Edited_time_total'] = '��������� ��� ���������������: %s (%s), ����� ��������������� %d ���'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = '��������� ��� ���������������: %s (%s), ����� ��������������� %d ���'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = '������� ����';
$lang['Unlock_topic'] = '����� ������� ����';
$lang['Move_topic'] = '����������� ����';
$lang['Delete_topic'] = '������� ����';
$lang['Split_topic'] = '��������� ����';

$lang['Stop_watching_topic'] = '��������� ������� �� ��������';
$lang['Start_watching_topic'] = '������� �� �������� � ����';
$lang['No_longer_watching'] = '�� ������ �� ������� �� �������� � ���� ����';
$lang['You_are_watching'] = '������ �� ������� �� �������� � ���� ����';

$lang['Total_votes'] = '����� �������������';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = '���������';
$lang['Topic_review'] = '����� ����';

$lang['No_post_mode'] = '�� ������ ����� ���������'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = '������ ����� ����';
$lang['Post_a_reply'] = '��������';
$lang['Post_topic_as'] = '������ ����������� ����';
$lang['Edit_Post'] = '������������� ���������';
$lang['Options'] = '���������';

$lang['Post_Announcement'] = '����������';
$lang['Post_Sticky'] = '������������';
$lang['Post_Normal'] = '�������';

$lang['Confirm_delete'] = '�� �������, ��� ������ ������� ��� ���������?';
$lang['Confirm_delete_poll'] = '�� �������, ��� ������ ������� ���� �����?';

$lang['Flood_Error'] = '�� �� ������ ��������� ��������� ��������� ����� ����� �����������. ����������, ���������� ���� �������.';
$lang['Empty_subject'] = '�� ������ ������� ��������� ���������, ����� ��������� ����� ����.';
$lang['Empty_message'] = '�� ������ ������ ����� ���������.';
$lang['Forum_locked'] = '���� ����� ������, �� �� ������ ������ ����� ��������� � ������������� ������.';
$lang['Topic_locked'] = '��� ���� �������, �� �� ������ ������ ������ � ������������� ���������.';
$lang['No_post_id'] = '�� ������ ������� ��������� ��� ��������������';
$lang['No_topic_id'] = '�� ������ ������� ���� ��� ������';
$lang['No_valid_mode'] = '�� ������ ������ ��������� ����, �������� � ������������� ���������. ��������� � ���������� ��� ���.';
$lang['No_such_post'] = '��������� �����������. ��������� � ���������� ��� ���.';
$lang['Edit_own_posts'] = '��������, �� ������ ������������� ������ ���� ����������� ���������.';
$lang['Delete_own_posts'] = '��������, �� ������ ������� ������ ���� ����������� ���������.';
$lang['Cannot_delete_replied'] = '��������, �� �� ������ ������� ���������, �� ������� ���� �������� ������.';
$lang['Cannot_delete_poll'] = '��������, �� �� ������ ������� �������� �����.';
$lang['Empty_poll_title'] = '�� ������ ������ ��������� ��� ������.';
$lang['To_few_poll_options'] = '�� ������ ������ �� ����� ���� ��������� ������.';
$lang['To_many_poll_options'] = '�� ���������� ������ ������� ����� ��������� ������.';
$lang['Post_has_no_poll'] = '� ���� ��������� ��� ������.';
$lang['Already_voted'] = '�� ��� ���������� � ���� ������.';
$lang['No_vote_option'] = '�� ������ ������� ������� ������ ��� �����������.';

$lang['Add_poll'] = '�������� �����';
$lang['Add_poll_explain'] = '���� �� �� ������ ��������� ����� � ������ ���������, �������� ���� �������.';
$lang['Poll_question'] = '������';
$lang['Poll_option'] = '������� ������';
$lang['Add_option'] = '�������� ��� �������';
$lang['Update'] = '��������';
$lang['Delete'] = '�������';
$lang['Poll_for'] = '����� ������ ����';
$lang['Days'] = '����'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ ������� 0 ��� �������� ���� ������, ����� ����� �� �������� ]';
$lang['Delete_poll'] = '������� �����';

$lang['Disable_HTML_post'] = '��������� � ���� ��������� HTML';
$lang['Disable_BBCode_post'] = '��������� � ���� ��������� BBCode';
$lang['Disable_Smilies_post'] = '��������� � ���� ��������� ��������';

$lang['HTML_is_ON'] = 'HTML <u>�������</u>';
$lang['HTML_is_OFF'] = 'HTML <u>��������</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>�������</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>��������</u>';
$lang['Smilies_are_ON'] = '�������� <u>��������</u>';
$lang['Smilies_are_OFF'] = '�������� <u>���������</u>';

$lang['Attach_signature'] = '������������ ������� (������� ����� ������ � �������)';
$lang['Notify'] = '�������� ��� � ��������� ������';
$lang['Delete_post'] = '������� ���������';

$lang['Stored'] = '���� ��������� ���� ������� ���������.';
$lang['Deleted'] = '���� ��������� ���� ������� �������.';
$lang['Poll_delete'] = '��� ����� ��� ������� ������.';
$lang['Vote_cast'] = '��� ����� �����.';

$lang['Topic_reply_notification'] = '����������� �� ������� � ����';

$lang['bbcode_b_help'] = '������ �����: [b]�����[/b]  (alt+b)';
$lang['bbcode_i_help'] = '��������� �����: [i]�����[/i]  (alt+i)';
$lang['bbcode_u_help'] = '������������ �����: [u]�����[/u]  (alt+u)';
$lang['bbcode_q_help'] = '������: [quote]�����[/quote]  (alt+q)';
$lang['bbcode_c_help'] = '��� (���������): [code]���[/code]  (alt+c)';
$lang['bbcode_l_help'] = '������: [list]�����[/list] (alt+l)';
$lang['bbcode_o_help'] = '������������ ������: [list=]�����[/list]  (alt+o)';
$lang['bbcode_p_help'] = '�������� ��������: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = '�������� ������: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = '������� ��� �������� ���� bbCode ';
$lang['bbcode_s_help'] = '���� ������: [color=red]�����[/color]  ���������: ����� ������������ color=#FF0000';
$lang['bbcode_f_help'] = '������ ������: [size=x-small]��������� �����[/size]';
$lang['bbcode_help']['hide'] = '������� ������: [hide]�����[/hide] ��� [hide=�����������]�����[/hide] (alt+%s)';



$lang['Emoticons'] = '��������';
$lang['More_emoticons'] = '�������������� ��������';

$lang['Font_color'] = '���� ������';
$lang['color_default'] = '�� ���������';
$lang['color_dark_red'] = '�����-�������';
$lang['color_red'] = '�������';
$lang['color_orange'] = '���������';
$lang['color_brown'] = '����������';
$lang['color_yellow'] = '������';
$lang['color_green'] = '�������';
$lang['color_olive'] = '���������';
$lang['color_cyan'] = '�������';
$lang['color_blue'] = '�����';
$lang['color_dark_blue'] = '�����-�����';
$lang['color_indigo'] = '������';
$lang['color_violet'] = '����������';
$lang['color_white'] = '�����';
$lang['color_black'] = '������';

$lang['Font_size'] = '������ ������';
$lang['font_tiny'] = '����� ���������';
$lang['font_small'] = '���������';
$lang['font_normal'] = '�������';
$lang['font_large'] = '�������';
$lang['font_huge'] = '��������';

$lang['Close_Tags'] = '������� ����';
$lang['Styles_tip'] = '���������: ����� ������ ��������� ����� � ����������� ������.';


//
// Private Messaging
//
$lang['Private_Messaging'] = '������ ���������';

$lang['Login_check_pm'] = '����� � ��������� ������ ���������';
$lang['New_pms'] = '����� ��: %d'; // You have 2 new messages
$lang['New_pm'] = '����� ��: %d'; // You have 1 new message
$lang['No_new_pm'] = '����� �� ���';
$lang['Unread_pms'] = '������������� ��: %d';
$lang['Unread_pm'] = '������������� ��: %d';
$lang['No_unread_pm'] = '��� ������������� ��';
$lang['You_new_pm'] = '��� ������ ����� ������ ���������';
$lang['You_new_pms'] = '��� ������ ����� ������ ���������';
$lang['You_no_new_pm'] = '� ��� ��� ����� ������ ���������';

$lang['Unread_message'] = '������������� ��';
$lang['Read_message'] = '����������� ��';

$lang['Read_pm'] = '��������� ��';
$lang['Post_new_pm'] = '�������� ����� ��';
$lang['Post_reply_pm'] = '�������� �� ��';
$lang['Post_quote_pm'] = '�������� �� �� � �������';
$lang['Edit_pm'] = '������������� ��';

$lang['Inbox'] = '��������';
$lang['Outbox'] = '���������';
$lang['Savebox'] = '�����������';
$lang['Sentbox'] = '������������';
$lang['Flag'] = '����';
$lang['Subject'] = '����';
$lang['From'] = '��';
$lang['To'] = '����';
$lang['Date'] = '����';
$lang['Mark'] = '�������';
$lang['Sent'] = '����������';
$lang['Saved'] = '���������';
$lang['Delete_marked'] = '������� ����������';
$lang['Delete_all'] = '������� ���';
$lang['Save_marked'] = '��������� ����������';
$lang['Save_message'] = '��������� ���������';
$lang['Delete_message'] = '������� ���������';

$lang['Display_messages'] = '�������� ���������'; // Followed by number of days/weeks/months
$lang['All_Messages'] = '��� ���������';

$lang['No_messages_folder'] = '� ���� ����� ��� ���������';

$lang['PM_disabled'] = '����������� �������� ������ ��������� �� ���� ������� ���� ���������.';
$lang['Cannot_send_privmsg'] = '��������, ��� �� ��������� ���������� ������ ���������.';
$lang['No_to_user'] = '�� ������ ������� ��� ���������� ����� ���������.';
$lang['No_such_user'] = '��������, �� ������ ������������ �� ����������.';

$lang['Disable_HTML_pm'] = '��������� � ���� �� HTML';
$lang['Disable_BBCode_pm'] = '��������� � ���� �� BBCode';
$lang['Disable_Smilies_pm'] = '��������� � ���� �� ��������';

$lang['Message_sent'] = '���� �� ���� ����������.';

$lang['Click_return_inbox'] = '%s��������� � ����� &laquo;��������&raquo;%s';
$lang['Click_return_index'] = '%s��������� � ������ �������%s';

$lang['Send_a_new_message'] = '��������� ������ ���������';
$lang['Send_a_reply'] = '�������� �� ������ ���������';
$lang['Edit_message'] = '������������� ������ ���������';

$lang['Notification_subject'] = '��� ������ ����� ������ ���������';

$lang['Find_username'] = '����� ������������';
$lang['Find'] = '�����';
$lang['No_match'] = '�� �������.';

$lang['No_post_id'] = '�� ������ ID';
$lang['No_such_folder'] = '����� ����� ���';
$lang['No_folder'] = '�� ������� �����';

$lang['Mark_all'] = '�������� ���';
$lang['Unmark_all'] = '����� ���������';

$lang['Confirm_delete_pm'] = '�� �������, ��� ������ ������� ��� ��?';
$lang['Confirm_delete_pms'] = '�� �������, ��� ������ ������� ��� ��?';

$lang['Inbox_size'] = '���� ����� &laquo;��������&raquo; ��������� �� %d%%'; // eg. Your Inbox is 50% full$lang['Sentbox_size'] = 'Your Sentbox is %d%% full';
$lang['Savebox_size'] = '���� ����� &laquo;�����������&raquo; ��������� �� %d%%';

$lang['Click_view_privmsg'] = '%s������� � ����� &laquo;��������&raquo;%s';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '������� ������������ %s'; // %s is username
$lang['About_user'] = '� ������������ %s'; // %s is username

$lang['Preferences'] = '������ ���������';
$lang['Items_required'] = '����, ���������� * ����������� � ����������, ���� �� ������� ��������.';
$lang['Registration_info'] = '��������������� ����������';
$lang['Profile_info'] = '�������';
$lang['Profile_info_warn'] = '��� ���������� ����� � �������� �������';
$lang['Avatar_panel'] = '���������� ��������';
$lang['Avatar_gallery'] = '������� ������';

$lang['Website'] = '����';
$lang['Location'] = '������';
$lang['Contact'] = '��� ��������� �';
$lang['Email_address'] = '����� E-mail';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = '��������� ������ ���������';
$lang['Hidden_email'] = '[ ����� ]';
$lang['Search_user_posts'] = '������ ��� ��������� ����� ������������';
$lang['Interests'] = '��������';
$lang['Occupation'] = '��� �������';
$lang['Poster_rank'] = '������';

$lang['Total_posts'] = '����� ���������';
$lang['User_post_pct_stats'] = '%.2f%% �� ������ �����'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f ��������� � ����'; // 1.5 posts per day
$lang['Search_user_posts'] = '����� ��� ��������� ������������ %s'; // Find all posts by username

$lang['No_user_id_specified'] = '��������, ������ ������������ �� ����������.';
$lang['Wrong_Profile'] = '�� �� ������ ������������� ����� �������.';

$lang['Only_one_avatar'] = '����� ���� ������ ������ ����� ��� �������';
$lang['File_no_data'] = '���� �� ���������� ���� URL �� �������� ������';
$lang['No_connection_URL'] = '���������� ���������� ���������� � ��������� ���� URL';
$lang['Incomplete_URL'] = '�� ������� �������� URL';
$lang['Wrong_remote_avatar_format'] = '�������� URL ���������� �������';
$lang['No_send_account_inactive'] = '��������, �� ������ �� ����� ���� ������, ��� ��� ���� ������� ������ ���������. ���������� � �������������� ������ �� �������������� �����������.';

$lang['Always_smile'] = '�������� ������ ��������';
$lang['Always_html'] = 'HTML ������ �������';
$lang['Always_bbcode'] = 'BBCode ������ �������';
$lang['Always_add_sig'] = '������ ������������ ��� �������';
$lang['Always_notify'] = '������ �������� ��� �� �������';
$lang['Always_notify_explain'] = '����� ���-������ ������� �� ����, � ������� �� ������, ��� ���������� e-mail. ��� ����� ����� ��������� ��� ���������� ���������.';

$lang['Board_style'] = '������� ��� �������';
$lang['Board_lang'] = '����';
$lang['No_themes'] = '� ���� ��� �������� ����';
$lang['Timezone'] = '������� ����';
$lang['Date_format'] = '������ ����';
$lang['Date_format_explain'] = '��������� ��������� ������� <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> ����� ���.';
$lang['Signature'] = '�������';
$lang['Signature_explain'] = '��� �����, ������� ����� ��������� � ����������� ���� ����������. ����� ��� ���������� %d ���������';
$lang['Public_view_email'] = '������ ���������� ����� ����� e-mail';

$lang['Current_password'] = '������� ������';
$lang['New_password'] = '����� ������';
$lang['Confirm_password'] = '����������� ������';
$lang['Confirm_password_explain'] = '�� ������ ������� ��� ������� ������, ���� ������ �������� ��� ��� �������� ���� ����� e-mail.';
$lang['password_if_changed'] = '���������� ������ ������ ���� �� ������ ��� ��������';
$lang['password_confirm_if_changed'] = '������������ ������ ����� � ��� ������, ���� �� �������� ��� ����';

$lang['Avatar'] = '������';
$lang['Avatar_explain'] = '���������� ��������� ����������� ��� ����������� � ��� � ����������. ����� ���� �������� ������ ���� �����������, ������� �� ����� %d ��������, ������� �� ����� %d �������� � ������� �� ����� %d ��.';
$lang['Upload_Avatar_file'] = '��������� ������ � ������ ����������';
$lang['Upload_Avatar_URL'] = '��������� ������ � URL';
$lang['Upload_Avatar_URL_explain'] = '������� URL �� �������� ��������� ���� � ������������, �� ����� ���������� �� ���� ����.';
$lang['Pick_local_Avatar'] = '������� ������ �� �������';
$lang['Link_remote_Avatar'] = '���������� ������ � ������� �������';
$lang['Link_remote_Avatar_explain'] = '������� URL �����������, �� ������� �� ������ ���������.';
$lang['Avatar_URL'] = 'URL ����������� �������';
$lang['Select_from_gallery'] = '������� ������ �� �������';
$lang['View_avatar_gallery'] = '�������� �������';

$lang['Select_avatar'] = '�������� ������';
$lang['Return_profile'] = '��������� � �������';
$lang['Select_category'] = '�������� ���������';

$lang['Delete_Image'] = '������� �����������';
$lang['Current_Image'] = '������� �����������';

$lang['Notify_on_privmsg'] = '���������� � ����� ������ ����������';
$lang['Popup_on_privmsg'] = '��������� ����� ���� ��� ����� ������ ���������';
$lang['Popup_on_privmsg_explain'] = '� ��������� �������� ����� ����������� ����� ���� �������� � ������������ � ������� ������ ������� ���������.';
$lang['Hide_user'] = '�������� ���� ���������� �� ������';

$lang['Profile_updated'] = '��� ������� ��� �������';
$lang['Profile_updated_inactive'] = '��� ������� ��� �������, �� �� �������� ������ ������, ��� ��� ������ ���� ������� ������ ���������. ��������� ��� �������� ����, ����� ������ ��� ����� �������������� ������� ������ ���, ���� ��������� ��������� ��������������, ��������� ���� ��� ������� �������������.';

$lang['Password_mismatch'] = '��������� ������ �� ���������.';
$lang['Current_password_mismatch'] = '�������� ���� ������ �� ��������� � ������� �� ����.';
$lang['Password_long'] = '��� ������ ������ ���� �� ������� 32 ��������.';
$lang['Too_many_registers'] = '�� ������� ������� ����� ������� ������������������. ����������, ��������� ������� �����.';
$lang['Username_taken'] = '��������, ������������ � ����� ������ ��� ����������.';
$lang['Username_invalid'] = '��������, �� ��� ��� �������� ������������ ������� (�������� \').';
$lang['Username_disallowed'] = '��������, �� ��� ��� ���� ��������� � �������������.';
$lang['Email_taken'] = '��������, ���� ����� e-mail ��� ����� ������ �������������.';
$lang['Email_banned'] = '��������, ���� ����� e-mail ��������� � ������ ������.';
$lang['Email_invalid'] = '��������, ���� ����� e-mail ����������.';
$lang['Signature_too_long'] = '������� ������� �������.';
$lang['Fields_empty'] = '�� ������ ��������� ������������ ����.';
$lang['Avatar_filetype'] = '���� ������� ������ ���� .jpg, .gif ��� .png';
$lang['Avatar_filesize'] = '����� ����� ������� ������ ���� �� ����� %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = '������ ������ ���� �� ������ %d �������� � ������ � %d �������� � ������';

$lang['Welcome_subject'] = '����� ���������� �� ������ %s'; // Welcome to my.com forums
$lang['New_account_subject'] = '����� ������������';
$lang['Account_activated_subject'] = '������� ������ ��������������';

$lang['Account_added'] = '������� �� �����������, ������� ������ ���� �������. �� ������ ����� � �������, ��������� ���� ��� � ������.';
$lang['Account_inactive'] = '������� ������ ���� �������. �� ���� ������ ��������� ����������� ������� ������, ���� ��� ����������� ��� ������ �� �������� ���� �����. ��������� ���� ����� ��� ����� ��������� ����������.';
$lang['Account_inactive_admin'] = '������� ������ ���� �������. �� ���� ������ ��������� ����������� ����� ������� ������ ����������������. �� ��� ��������� e-mail, �, ��� ������ ��� ������������ ���� ������� ������, �� �������� �����������.';
$lang['Account_active'] = '���� ������� ������ ���� ��������������. ������� �� �����������.';
$lang['Account_active_admin'] = '���� ������� ������ ���� ��������������.';
$lang['Reactivate'] = '����� �������������� ������� ������.';
$lang['Already_activated'] = '�� ��� �������������� ���� ������� ������.';
$lang['COPPA'] = '���� ������� ������ ���� �������, �� ������ ��� ������ ���� ��������, ����� ��������� ���������� ���� ������� ��� �� e-mail.';

$lang['Registration'] = '������� �����������';
$lang['Reg_agreement'] = '���� �������������� � ���������� ����� ������ ��������� ������� ��� ������������� ������������ ��������� ��� ����� �������, ��� ��������� ����������� ����������. ����� ������� �� ��������,  ��� ��������� �� ���� ������� �������� ����� ������ �� �������, � �� ������������� ������� (����� ���������, ����������� � ���������������) � ������������� �� ����� ���� ������������ �� �� ����������.<br /><br /> �� ������������ �� ��������� ��������������, ����������, �������������� ���������, ���������������� ���������, �������� � ������������ ����� � ������ ���������, ������� �������� ��������������� ������. ������� ���������� ����� ��������� ����� �������� � ������ ������������ ���������� �� ������� (��� ���� ��� ��������� ����� ��������� � �����������). IP ������ ���� ��������� ����������� ��� ����������� ���������� ����� ��������. �� ������������ � ���, ��� �������������� ������ ����� ����� �������, ���������������, ��������� ��� ������� ����� ���� � ����� ����� �� ������ ����������. ��� ������������ �� �������� � ���, ��� �������� ���� ���������� ����� ��������� � ���� ������. ���� ��� ���������� �� ����� ������� ������� ����� ��� ������ ����������, ������������� ������� �� ����� ���� ������������ �� �������� �������, ������� ����� �������� � �������������������� ������� � ���.<br /><br /> ��� ������ ���������� cookies ��� �������� ���������� �� ����� ����������. ��� cookie �� �������� ������� ���������� �� �������� ���� � ������ ���� ��� ��������� �������� ������ �������. ��� e-mail ����� ������������ ���� ��� ������������� ����� ����������� � ������ (� ��� ������� ������ ������ ���� �� �������� �������).<br /><br />�������� �� ������ ����������� �� ������������� ��� �������� � ����� ���������';

$lang['Agree_under_13'] = '� �������� � ����� ��������� � ��� <b>������</b> 13 ���';
$lang['Agree_over_13'] = '� �������� � ����� ��������� � ��� 13 ��� ��� <b>������</b>';
$lang['Agree_not'] = '� �� �������� � ����� ���������';

$lang['Wrong_activation'] = '�������� ���� ���� ����������� �� ��������� � ���������� � ����.';
$lang['Send_password'] = '�������� ����� ������';
$lang['Password_updated'] = '����� ������ ��� ������, ��������� �������� ����, ����� ������ ��� ��� ��������������.';
$lang['No_email_match'] = '��������� ���� ����� e-mail �� ��������� � ���������� �� ����� ������������.';
$lang['New_password_activation'] = '����������� ������ ������';
$lang['Password_activated'] = '���� ������� ������ ���� ����� ��������������. ��� ����� � ������� ����������� ������ �� ����������� ��� ������.';

$lang['Send_email_msg'] = '��������� e-mail';
$lang['No_user_specified'] = '������������ �� ��� ������';
$lang['User_prevent_email'] = '������������ �� ������ �������� e-mail. ���������� ������� ���/�� ������ ���������.';
$lang['User_not_exist'] = '������������ �� ����������';
$lang['CC_email'] = '��������� ����� ��������� ������ ����';
$lang['Email_message_desc'] = '��������� ����� ���������� � ���� �������� ������, �� ��������� � ���� HTML ��� BBCode. � �������� ��������� ������ ����� ������������ ��� ����� e-mail.';
$lang['Flood_email_limit'] = '�� �� ������ ��������� ��� ���� e-mail ����� ����� �����������, ���������� ������� ��� �������.';
$lang['Recipient'] = '����������';
$lang['Email_sent'] = '��������� ���� ����������.';
$lang['Send_email'] = '��������� e-mail';
$lang['Empty_subject_email'] = '�� ������ ������� ���� ���������.';
$lang['Empty_message_email'] = '�� ������ ������� ����� ��������� ��� ��������.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = '��������� ���� ��� ������������� ��� ������������';
$lang['Too_many_registers'] = '�� ��������� ���������� ������� ����������� �� ���� �����. ����������, ��������� ������� �����.';
$lang['Confirm_code_impaired'] = '���� �� �� �����-���� �������� �� ������ ��������� ���� ���, ��������� � %s���������������%s ��� ��������� ������.';
$lang['Confirm_code'] = '��� �������������';
$lang['Confirm_code_explain'] = '������� ��� ����� ��� ��, ��� �� ��� ������ �� ������. �� ����������� �������.';



//
// Memberslist
//
$lang['Select_sort_method'] = '����������� ��';
$lang['Sort'] = '�����������';
$lang['Sort_Top_Ten'] = '������ ����� �������� ����������';
$lang['Sort_Joined'] = '���� �����������';
$lang['Sort_Username'] = '����� ������������';
$lang['Sort_Location'] = '���������������';
$lang['Sort_Posts'] = '���������� ���������';
$lang['Sort_Email'] = '������ E-mail';
$lang['Sort_Website'] = '������ �����';
$lang['Sort_Ascending'] = '�� �����������';
$lang['Sort_Descending'] = '�� ��������';
$lang['Order'] = ''; // �� �����, � ���������� ������������ � ��������� 'Order ascending'


//
// Group control panel
//

$lang['Group_Control_Panel'] = '������ ���������� ��������';
$lang['Group_member_details'] = '���������� � �������� � �������';
$lang['Group_member_join'] = '�������� � ������';

$lang['Group_Information'] = '���������� � ������';
$lang['Group_name'] = '�������� ������';
$lang['Group_description'] = '�������� ������';
$lang['Group_membership'] = '�������� � ������';
$lang['Group_Members'] = '����� � ������';
$lang['Group_Moderator'] = '��������� ������';
$lang['Pending_members'] = '��������� � ����� ������';

$lang['Group_type'] = '��� ������';
$lang['Group_open'] = '������ � �������� ���������';
$lang['Group_closed'] = '������ � �������� ���������';
$lang['Group_hidden'] = '������� ������';

$lang['Current_memberships'] = '��������� ������ �����';
$lang['Non_member_groups'] = '�� ��������� ������ �����';
$lang['Memberships_pending'] = '�������� � ����� �����';

$lang['No_groups_exist'] = '��� �� ����� ������';
$lang['Group_not_exist'] = '����� ������ �� ����������';

$lang['Join_group'] = '�������� � ������';
$lang['No_group_members'] = '� ���� ������ ��� �� ������ �����';
$lang['Group_hidden_members'] = '��� ������ ������, �� �� ������ ����������� � ������';
$lang['No_pending_group_members'] = '� ���� ������ ��� ���������� � �����';
$lang['Group_joined'] = '�� ��������� � ���������� � ������.<br />����� ���� ������� ������� ��������� ������, ��� ����� �������� �����������.';
$lang['Group_request'] = '���� ������ ������� � ���������� � ������.';
$lang['Group_approved'] = '���� ������� ���� �������������.';
$lang['Group_added'] = '�� ���� �������� � ������.';
$lang['Already_member_group'] = '�� ��� ��������� ������ ���� ������';
$lang['User_is_member_group'] = '������������ ��� �������� ������ ���� ������';
$lang['Group_type_updated'] = '��� ������ ������� �������.';

$lang['Could_not_add_user'] = '���������� ������������ �� ����������.';
$lang['Could_not_anon_user'] = '�� �� ������ ������� ���������� ������������ ������ ������.';

$lang['Confirm_unsub'] = '�� �������, ��� ������ ����� �� ���� ������?';
$lang['Confirm_unsub_pending'] = '�� �������, ��� ������ ���������� �� ������� � ���� ������? ���� ������� � ���������� �� ���� �� �������������, �� ���������!';

$lang['Unsub_success'] = '�� ������� �������� ��� ������.';

$lang['Approve_selected'] = '�������� ����������';
$lang['Deny_selected'] = '��������� ����������';
$lang['Not_logged_in'] = '�� ������ ����� � �������, ������ ��� �������� � ������.';
$lang['Remove_selected'] = '������� ����������';
$lang['Add_member'] = '�������� ����� ������';
$lang['Not_group_moderator'] = '�� �� ��������� ����������� ������ � �� ������ ��������� ������ ��������.';

$lang['Login_to_join'] = '������� � �������, ����� ������ ���� �������� � �������';
$lang['This_open_group'] = '��� ������ � �������� ���������, �� ������ ������ ������� � ����������';
$lang['This_closed_group'] = '��� ������ � �������� ���������, ����� ������������ �� �����������';
$lang['This_hidden_group'] = '��� ������� ������, �������������� ���������� ������������� �� �����������';
$lang['Member_this_group'] = '�� ���� ���� ������';
$lang['Pending_this_group'] = '�� �������� � ����� ���� ������';
$lang['Are_group_moderator'] = '�� ��������� ���� ������';
$lang['None'] = '���';

$lang['Subscribe'] = '�����������';
$lang['Unsubscribe'] = '����������';
$lang['View_Information'] = '����������� ����������';


//
// Search
//
$lang['Search_query'] = '������';
$lang['Search_options'] = '��������� �������';

$lang['Search_keywords'] = '�������� �����';
$lang['Search_keywords_explain'] = '�� ������ ������������ <u>AND</u> ����� ���������� �����, ������� ������ ���� � �����������, <u>OR</u> ��� ����, ������� ����� ���� � �����������, � <u>NOT</u> ��� ����, ������� � ����������� ���� �� ������. ����������� * � �������� ������� ��� ���������� ����������.';
$lang['Search_author'] = '����� �� ������';
$lang['Search_author_explain'] = '����������� * � �������� �������';

$lang['Search_for_any'] = '������ ����� �����/����� � ������ ��������';
$lang['Search_for_all'] = '������ ��� �����';
$lang['Search_title_msg'] = '������ � ��������� ��� � ������� ���������';
$lang['Search_msg_only'] = '������ ������ � ������� ���������';

$lang['Return_first'] = '���������� ������'; // followed by xxx characters in a select box
$lang['characters_posts'] = '�������� ���������';

$lang['Search_previous'] = '����� ����������'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = '����������� ��';
$lang['Sort_Time'] = '������� ����������';
$lang['Sort_Post_Subject'] = '��������� ���������';
$lang['Sort_Topic_Title'] = '����';
$lang['Sort_Author'] = '������';
$lang['Sort_Forum'] = '������';

$lang['Display_results'] = '���������� ���������� ���';
$lang['All_available'] = '��� ���������';
$lang['No_searchable_forums'] = '� ��� ��� ������� � ������ �� � ����� �� ������� �� �����.';

$lang['No_search_match'] = '���������� ��� ��� ��������� �� �������';
$lang['Found_search_match'] = '����������� ������: %d'; // eg. Search found 1 match
$lang['Found_search_matches'] = '����������� ������: %d'; // eg. Search found 24 matches

$lang['Close_window'] = '������� ����';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '��������, ������ %s ����� ��������� ���������� �� ���� ������.';
$lang['Sorry_auth_sticky'] = '��������, ������ %s ����� ��������� ������������ ���� �� ���� ������.';
$lang['Sorry_auth_read'] = '��������, ������ %s ����� ������ ��������� �� ���� ������.';
$lang['Sorry_auth_post'] = '��������, ������ %s ����� �������� ���� �� ���� ������.';
$lang['Sorry_auth_reply'] = '��������, ������ %s ����� �������� �� ��������� �� ���� ������.';
$lang['Sorry_auth_edit'] = '��������, ������ %s ����� ������������� ��������� �� ���� ������.';
$lang['Sorry_auth_delete'] = '��������, ������ %s ����� ������� ��������� �� ���� ������.';
$lang['Sorry_auth_vote'] = '��������, ������ %s ����� ���������� � ������� ����� ������.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>�����</b>';
$lang['Auth_Registered_Users'] = '<b>������������������ ������������</b>';
$lang['Auth_Users_granted_access'] = '<b>������������ �� ������������ ������� �������</b>';
$lang['Auth_Moderators'] = '<b>����������</b>';
$lang['Auth_Administrators'] = '<b>��������������</b>';

$lang['Not_Moderator'] = '�� �� ��������� ����������� ����� ������.';
$lang['Not_Authorised'] = '��� �������';

$lang['You_been_banned'] = '��� ��� ������ ������ � ������.<br />���������� � ���������� ��� �������������� ������� �� �������������� �����������.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '������ �� ������ ������������������ �������������: 0 � '; // There are 5 Registered and
$lang['Reg_users_online'] = '������ �� ������ ������������������ �������������:  %d � '; // There are 5 Registered and
$lang['Reg_user_online'] = '������ �� ������ ������������������ �������������: %d � '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '������� �������������: 0'; // 6 Hidden users online
$lang['Hidden_users_online'] = '������� �������������: %d'; // 6 Hidden users online
$lang['Hidden_user_online'] = '������� �������������: %d'; // 6 Hidden users online
$lang['Guest_users_online'] = '������ �� ������ ������: %d'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '������ �� ������ ������: 0'; // There are 10 Guest users online
$lang['Guest_user_online'] = '������ �� ������ ������: %d'; // There is 1 Guest user online
$lang['No_users_browsing'] = '���� ����� ������ ����� �� �������������';

$lang['Online_explain'] = '��� ������ �������� �� ���������� ������������� �� ��������� ���� �����';

$lang['Forum_Location'] = '����� �� ������';
$lang['Last_updated'] = '��������� ���������';

$lang['Forum_index'] = '������ �������';
$lang['Logging_on'] = '���� � �������';
$lang['Posting_message'] = '���������� ���������';
$lang['Searching_forums'] = '����� �� ������';
$lang['Viewing_profile'] = '�������� �������';
$lang['Viewing_online'] = '�������� &laquo;��� ������ �� ������&raquo;';
$lang['Viewing_member_list'] = '�������� ������ �������������';
$lang['Viewing_priv_msgs'] = '�������� ������ ���������';
$lang['Viewing_FAQ'] = '�������� FAQ';
$lang['Viewing_RSS'] = '�������� RSS';         // RSS Feed Mod 

//
// Moderator Control Panel
//
$lang['Mod_CP'] = '������ ���������';
$lang['Mod_CP_explain'] = '����� �� ������ ��������� �������� ��������� ����� ������. �� ������ ���������, ���������, ���������� ��� ������� ����� ���������� ���.';

$lang['Select'] = '�������';
$lang['Delete'] = '�������';
$lang['Move'] = '�����������';
$lang['Lock'] = '�������';
$lang['Unlock'] = '�������';

$lang['Topics_Removed'] = '��������� ���� ���� ������� ������� �� ���� ������.';
$lang['Topics_Locked'] = '��������� ���� ���� �������.';
$lang['Topics_Moved'] = '��������� ���� ���� ����������.';
$lang['Topics_Unlocked'] = '��������� ���� ���� �������.';
$lang['No_Topics_Moved'] = '�� ���� ���������� �� ����� ����.';

$lang['Confirm_delete_topic'] = '�� ������������� ������ ������� ��������� ����?';
$lang['Confirm_lock_topic'] = '�� ������������� ������ ������� ��������� ����?';
$lang['Confirm_unlock_topic'] = '�� ������������� ������ ������� ��������� ����?';
$lang['Confirm_move_topic'] = '�� ������������� ������ ����������� ��������� ����?';

$lang['Move_to_forum'] = '����������� � �����';
$lang['Leave_shadow_topic'] = '�������� ������ � ������ ������.';

$lang['Split_Topic'] = '���������� ����';
$lang['Split_Topic_explain'] = '� �������������� ���� ����� �� ������ ��������� ���� �� ��� ���� ������� ��������� �� ������, ���� ������ �� ���������� ���������';
$lang['Split_title'] = '��������� ����� ����';
$lang['Split_forum'] = '����� ��� ����� ����';
$lang['Split_posts'] = '�������� ��������� ���������';
$lang['Split_after'] = '�������� ��� ��������� ����� ����������';
$lang['Topic_split'] = '��������� ���� ���� ������� ��������';

$lang['Too_many_error'] = '�� ������� ������� ����� ���������. �� ������ ������� ������ ���� ���������, ����� �������� ��� ��������� ����� ����.';

$lang['None_selected'] = '�� �� ������� �� ����� ���� ��� ���������� ���� ��������. ��������� ����� � ��������.';
$lang['New_forum'] = '����� �����';

$lang['This_posts_IP'] = 'IP ����� ��� ����� ���������';
$lang['Other_IP_this_user'] = '������ IP ������ � ������� ����� ���� ������������';
$lang['Users_this_IP'] = '������������, �������� � ����� IP';
$lang['IP_info'] = '���������� �� IP ������';
$lang['Lookup_IP'] = '���������� ���� ��� IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = '������� ����: %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12';
$lang['-11'] = 'GMT - 11';
$lang['-10'] = 'GMT - 10';
$lang['-9'] = 'GMT - 9';
$lang['-8'] = 'GMT - 8';
$lang['-7'] = 'GMT - 7';
$lang['-6'] = 'GMT - 6';
$lang['-5'] = 'GMT - 5';
$lang['-4'] = 'GMT - 4';
$lang['-3.5'] = 'GMT - 3:30';
$lang['-3'] = 'GMT - 3';
$lang['-2'] = 'GMT - 2';
$lang['-1'] = 'GMT - 1';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1';
$lang['2'] = 'GMT + 2';
$lang['3'] = 'GMT + 3';
$lang['3.5'] = 'GMT + 3:30';
$lang['4'] = 'GMT + 4';
$lang['4.5'] = 'GMT + 4:30';
$lang['5'] = 'GMT + 5';
$lang['5.5'] = 'GMT + 5:30';
$lang['6'] = 'GMT + 6';
$lang['6.5'] = 'GMT + 6:30';
$lang['7'] = 'GMT + 7';
$lang['8'] = 'GMT + 8';
$lang['9'] = 'GMT + 9';
$lang['9.5'] = 'GMT + 9:30';
$lang['10'] = 'GMT + 10';
$lang['11'] = 'GMT + 11';
$lang['12'] = 'GMT + 12';
$lang['13'] = 'GMT + 13';

// ��� ��� ����������� ����
$lang['tz']['-12'] = '(GMT -12)';
$lang['tz']['-11'] = '(GMT -11)';
$lang['tz']['-10'] = '(GMT -10)';
$lang['tz']['-9'] = '(GMT -9)';
$lang['tz']['-8'] = '(GMT -8)';
$lang['tz']['-7'] = '(GMT -7)';
$lang['tz']['-6'] = '(GMT -6)';
$lang['tz']['-5'] = '(GMT -5)';
$lang['tz']['-4'] = '(GMT -4)';
$lang['tz']['-3.5'] = '(GMT -3:30)';
$lang['tz']['-3'] = '(GMT -3)';
$lang['tz']['-2'] = '(GMT -2)';
$lang['tz']['-1'] = '(GMT -1)';
$lang['tz']['0'] = '(GMT (����� �� ��������))';
$lang['tz']['1'] = '(GMT +1)';
$lang['tz']['2'] = '(GMT +2 (�������� �����))';
$lang['tz']['3'] = '(GMT +3 (���������� �����))';
$lang['tz']['3.5'] = '(GMT +3:30)';
$lang['tz']['4'] = '(GMT +4 (������ ���������� �����))';
$lang['tz']['4.5'] = '(GMT +4:30)';
$lang['tz']['5'] = '(GMT +5)';
$lang['tz']['5.5'] = '(GMT +5:30)';
$lang['tz']['5.75'] = '(GMT +5:45)';
$lang['tz']['6'] = '(GMT +6)';
$lang['tz']['6.5'] = '(GMT +6:30)';
$lang['tz']['7'] = '(GMT +7)';
$lang['tz']['8'] = '(GMT +8)';
$lang['tz']['9'] = '(GMT +9)';
$lang['tz']['9.5'] = '(GMT +9:30)';
$lang['tz']['10'] = '(GMT +10)';
$lang['tz']['11'] = '(GMT +11)';
$lang['tz']['12'] = '(GMT +12)';
$lang['tz']['13'] = '(GMT +13)';

$lang['datetime']['Sunday'] = '�����������';
$lang['datetime']['Monday'] = '�����������';
$lang['datetime']['Tuesday'] = '�������';
$lang['datetime']['Wednesday'] = '�����';
$lang['datetime']['Thursday'] = '�������';
$lang['datetime']['Friday'] = '�������';
$lang['datetime']['Saturday'] = '�������';
$lang['datetime']['Sun'] = '��';
$lang['datetime']['Mon'] = '��';
$lang['datetime']['Tue'] = '��';
$lang['datetime']['Wed'] = '��';
$lang['datetime']['Thu'] = '��';
$lang['datetime']['Fri'] = '��';
$lang['datetime']['Sat'] = '��';
$lang['datetime']['January'] = '������';
$lang['datetime']['February'] = '�������';
$lang['datetime']['March'] = '����';
$lang['datetime']['April'] = '������';
$lang['datetime']['May'] = '���';
$lang['datetime']['June'] = '����';
$lang['datetime']['July'] = '����';
$lang['datetime']['August'] = '������';
$lang['datetime']['September'] = '��������';
$lang['datetime']['October'] = '�������';
$lang['datetime']['November'] = '������';
$lang['datetime']['December'] = '�������';
$lang['datetime']['Jan'] = '���';
$lang['datetime']['Feb'] = '���';
$lang['datetime']['Mar'] = '���';
$lang['datetime']['Apr'] = '���';
$lang['datetime']['May'] = '���';
$lang['datetime']['Jun'] = '���';
$lang['datetime']['Jul'] = '���';
$lang['datetime']['Aug'] = '���';
$lang['datetime']['Sep'] = '���';
$lang['datetime']['Oct'] = '���';
$lang['datetime']['Nov'] = '���';
$lang['datetime']['Dec'] = '���';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = '����������';
$lang['Critical_Information'] = '����������� ����������';

$lang['General_Error'] = '����� ������';
$lang['Critical_Error'] = '����������� ������';
$lang['An_error_occured'] = '��������� ������';
$lang['A_critical_error'] = '��������� ����������� ������';

//
// Custom Title MOD
//
$lang['Custom_title'] = '�����';
$lang['Custom_title_toolong'] = '��������� ����� ������ ������� �� �����.';
$lang['Custom_title_explain'] = '������������ %s. ����������� ���������� ����� - %s ��������.';
$lang['Custom_title_independent_explain'] = '�������� ����� � ���� ���������';
$lang['Custom_title_replace_rank_explain'] = '�������� ��� ����. ��� �������� �����, �������� ���� ������.';
$lang['Custom_title_replace_both_explain'] = '�������� ��� ���� � ����������� �����. ��� �������� �����, �������� ���� ������.';

$lang['proxy_detected'] = '��������� �������� HTTP-Proxy ������ %s �� ����� %d.';
$lang['proxy_blocked'] = '����������� �������������.';
$lang['proxy_t0'] = '��������';
$lang['proxy_t1'] = '���������';
$lang['proxy_t2'] = '������� �����������';

// Additional Stuff for phpBB2 Plus only ! Translators should get original Language Files for phpBB 2.0.8
// for the language they want to translate from http://www.phpbb.com/downloads.php. Then they need to translate 
// the following stuff only and use the rest from the original language files !

//-- mod : mods settings ---------------------------------------------------------------------------
//-- add
$lang['Click_return_preferences'] = '������� %s�����%s ��� �������� � ����������';
//-- fin mod : mods settings -----------------------------------------------------------------------

// Start add - Birthday MOD
$lang['Birthday'] = '���� ��������';
$lang['No_birthday_specify'] = '�� ������';
$lang['Age'] = '�������';
$lang['Wrong_birthday_format'] = '������ ��� ��� �������� �����������.';
$lang['Birthday_to_high'] = '��������, �� ���� ���� �� ��������� ������������� ������ %d ���';
$lang['Birthday_require'] = '���� ���� �������� ���������� �� ���� �����';
$lang['Birthday_to_low'] = '��������, �� ���� ���� �� ��������� ������������� ������ %d ���';
$lang['Submit_date_format'] = 'd-m-Y'; //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different seperators are accepted)
$lang['Birthday_greeting_today'] = '�� ����� ��� ���������� � %s - ��������.<br /><br /> �������������';//%s is substituted with the users age
$lang['Birthday_greeting_prev'] = '�� ����� ������� ���������� � ����������� %s - �������� %s.<br /><br /> �������������';//%s is substituted with the users age, and birthday
$lang['Greeting_Messaging'] = '�����������';
$lang['Birthday_today'] = '������������, � ������� ������� ���� ��������:';
$lang['Birthday_week'] = '������������, � ������� ���� �������� � ������� %d ����:';
$lang['Nobirthday_week'] = '��� ������������� � ���� �������� � ������� %d ����'; // %d is substitude with the number of days
$lang['Nobirthday_today'] = '��� ������������� � ���� �������� �������';
$lang['Year'] = '���';
$lang['Month'] = '�����';
$lang['Day'] = '����';

// NOTE: Please do not translate the folowing 4 lines !
// They are automatically translated into your language
$lang['day_short'] = array ($lang['datetime']['Sun'],$lang['datetime']['Mon'],$lang['datetime']['Tue'],$lang['datetime']['Wed'],$lang['datetime']['Thu'],$lang['datetime']['Fri'],$lang['datetime']['Sat']);
$lang['day_long'] = array ($lang['datetime']['Sunday'],$lang['datetime']['Monday'],$lang['datetime']['Tuesday'],$lang['datetime']['Wednesday'],$lang['datetime']['Thursday'],$lang['datetime']['Friday'],$lang['datetime']['Saturday']);
$lang['month_short'] = array ($lang['datetime']['Jan'],$lang['datetime']['Feb'],$lang['datetime']['Mar'],$lang['datetime']['Apr'],$lang['datetime']['May'],$lang['datetime']['Jun'],$lang['datetime']['Jul'],$lang['datetime']['Aug'],$lang['datetime']['Sep'],$lang['datetime']['Oct'],$lang['datetime']['Nov'],$lang['datetime']['Dec']);
$lang['month_long'] = array ($lang['datetime']['January'],$lang['datetime']['February'],$lang['datetime']['March'],$lang['datetime']['April'],$lang['datetime']['May'],$lang['datetime']['June'],$lang['datetime']['July'],$lang['datetime']['August'],$lang['datetime']['September'],$lang['datetime']['October'],$lang['datetime']['November'],$lang['datetime']['December']);
// End add - Birthday MOD
// zodiacs used for birthday mod
$lang['Zodiac'] = '������';
$lang['Capricorn'] = '�������';
$lang['Aquarius'] = '�������';
$lang['Pisces'] = '����';
$lang['Aries'] = '����';
$lang['Taurus'] = '�����';
$lang['Gemini'] = '��������';
$lang['Cancer'] = '���';
$lang['Leo'] = '���';
$lang['Virgo'] = '����';
$lang['Libra'] = '����';
$lang['Scorpio'] = '��������';
$lang['Sagittarius'] = '�������';
// chinese zodiacs used for birthday mod
$lang['Chinese_zodiac']= '��������� ������';
$lang['Unknown'] = '�����������';
$lang['Rat'] = '�����';
$lang['Buffalo'] = '������';
$lang['Tiger'] = '����';
$lang['Cat'] = '���';
$lang['Dragon'] = '������';
$lang['Snake'] = '����';
$lang['Horse'] = '������';
$lang['Goat'] = '�����';
$lang['Monkey'] = '��������';
$lang['Cock'] = '�����';
$lang['Dog'] = '������';
$lang['Pig'] = '������';

// Start add - Gender MOD
$lang['Gender'] = '���';//used in users profile to display witch gender he/she is
$lang['Male'] = '�������';
$lang['Female']='�������';
$lang['No_gender_specify'] = '�� ������';
// End add - Gender MOD

// Start add - Last visit MOD
$lang['Last_logon'] = '��������� ���������';
$lang['Hidde_last_logon'] = '������';
$lang['Never_last_logon'] = '�������';
$lang['Users_today_zero_total'] = '����� <b>0</b> ������������� �������� ������ ������� :: ';
$lang['Users_today_total'] = '����� <b>%d</b> ������������ ������� ������ ������� :: ';
$lang['User_today_total'] = '����� <b>%d</b> ������������� �������� ������ ������� :: ';
$lang['Users_lasthour_explain'] = ', %d �� ��� �������� ��� �� ��������� ���.';
$lang['Users_lasthour_none_explain'] = ''; //showen of none have visited the last hour, fill if you like

$lang['Years'] = '���';
$lang['Year'] = '���';
$lang['Weeks'] = '������';
$lang['Week'] = '������';
$lang['Day'] = '����';
$lang['Total_online_time'] = '����� ������';
$lang['Last_online_time'] = '��������� ��� ������';
$lang['Number_of_visit'] = '����� ���������';
$lang['Number_of_pages'] = '����� ���������';
// End add - Last visit MOD

// FLAGHACK-start
$lang['Country_Flag'] = '���� ������';
$lang['Select_Country'] = '�������� ����' ;
// FLAGHACK-end

// Anti Robotic Registration
$lang['Wrong_reg_key'] = '������ ������������������ ��������';
$lang['Validation'] = '��������';
$lang['Validation_explain'] = '��� �������� ������� �������, ������� �� ������';

//
// Smartor's ezPortal
//
$lang['Home'] = '������';
$lang['Board_navigation'] = '���������';
$lang['Statistics'] = '����������';
$lang['total_topics'] = " �� <b>%s</b> ���"; // added in v2.1.6
$lang['Comments'] = '�����������';
$lang['Read_Full'] = '������ ���������';
$lang['View_comments'] = '�������� �����������';
$lang['Post_your_comment'] = '���������� �����������';
$lang['Welcome'] = '����� ����������';
$lang['Register_new_account'] = '�� ��� �� ����������������?<br />�� ������ %s������������������%s ���������';
$lang['Remember_me'] = '��������� ����';
$lang['View_complete_list'] = '�������� ������ ������';
$lang['Poll'] = '�����';
$lang['Login_to_vote'] = '�� ������ �������������� ��� �����������';
$lang['Vote'] = '����������';
$lang['No_poll'] = '��� ������ � ������ ������';

$lang['Download'] = '��������';
$lang['Viewing_Download'] = '��������';
$lang['Top_Downloads'] = '������ 10';
$lang['Newest_Downloads'] = '���������';
$lang['L_Word_on'] = '�';
$lang['L_Word_by'] = '';
$lang['News_Reply'] = '�������� �� ��� �������';
$lang['News_Print'] = '����������� ��� ����';
$lang['News_Email'] = '��������� �� E-Mail';
$lang['Save_Topic'] = '��������� ���� ��� ����';
$lang['News_Categories'] = '��������� ��������';
$lang['News_Archieves'] = '����� ��������';
$lang['News_Summary'] = '��� ������� �����';
$lang['News_Views'] = '����������';
$lang['News_And'] = '�';
$lang['News_Comments'] = '������������';
$lang['Credits'] = '���� � ��� ������';
$lang['News_Cats'] = '��������� ��������';
$lang['No_News_Cats'] = '��������, ��������� �������� ����������!';
$lang['Recent_files'] = '��������� �����';
$lang['Forum_Search'] = '����� �� ������';
$lang['About_us'] = '� ���';
$lang['Portal_Navigate'] = '���������';
$lang['Portal_Tools'] = '������';
$lang['Site_links'] = '������';
$lang['Site_Contact'] = '��������';
$lang['Last_Seen'] = '��������� ��������';
$lang['No_News'] = '��������, ��� ��������� ��������';
$lang['Quick_Search'] = '������� �����';
$lang['Advanced_Search'] = '����������� �����';

//
// Photo Album Addon v2.x.x by Smartor
//
$lang['Album'] = '������';
$lang['Personal_Gallery_Of_User'] = '������ ������� %s';
$lang['Newest_pic'] = '��������� ����';
//--- Album Category Hierarchy : begin
//--- Version : 1.2.0
$lang['Personal_Gallery_Of_User_Profile'] = '������ ������� %s (%d �����������)';
$lang['Show_All_Pic_View_Mode_Profile'] = '�������� ��� ����������� � ������ ������� %s (��� ���������)';
//--- Album Category Hierarchy : end

//
// Start add  - Photo Album Block
$lang['Newest_pics'] = '����� ����';
// End add  - Photo Album Block

// Start Quick Reply Mod
$lang['Quick_Reply'] = '������� �����';
$lang['Quick_quote'] = '������ ���������� ���������';
$lang['Quick_add_smilies'] = '��������';
$lang['QuoteSelelected'] = '������ ����������';
$lang['QuoteSelelectedEmpty'] = '�������� ����� �� �������� � ���������� ���';
$lang['Quick_Reply_smilies'] = '���';
// End Quick Reply Mod 

$lang['Recent_topics'] = '�������� ����'; // Recent Topics
$lang['No_recent_topics'] = '<br />��� ���� � ������ ������<br /><br />'; // No recent Topics
$lang['No_recent_files'] = '<br />��� ������ � ������ ������<br /><br />'; // No recent Files
$lang['No_articles'] = '<br />��� �������� � ������ ������<br /><br />'; // No News

//
// Online/Offline
//
$lang['Offline'] = '�������';
$lang['Online'] = '������';
$lang['Hidden'] = '�������';
$lang['On_off_status'] = '���������';

//
// Staff Site
//
$lang['Staff'] = '�������������';
$lang['Staff_about'] = '���������� � %s'; // %s = username
$lang['Staff_level'] = array('�������������', '���������');
$lang['Staff_forums'] = '������';
$lang['Staff_messenger'] = 'Messenger';
$lang['Staff_user_topic_day_stats'] = '%.2f ��� � ����'; // %.2f = topics
$lang['Staff_online'] = '<font color=#0000FF>������</font>';
$lang['Staff_year'] = '���';
$lang['Staff_years'] = '���';
$lang['Staff_week'] = '������';
$lang['Staff_weeks'] = '������';
$lang['Staff_day'] = '����';
$lang['Staff_days'] = '����';
$lang['Staff_hour'] = '���';
$lang['Staff_hours'] = '�����';
$lang['Staff_minute'] = '������';
$lang['Staff_minutes'] = '�����';
$lang['Staff_since'] = '(������� � %s)'; // %s = period
$lang['Staff_ago'] = '(%s �����)'; // %s = period


//
// Bookmark Mod
//
$lang['Bookmarks'] = '��������';
$lang['Set_Bookmark'] = '��������� �������� ��� ������ ����';
$lang['Remove_Bookmark'] = '������� �������� ��� ������ ����';
$lang['No_Bookmarks'] = '�� �� ��������� ��������';
$lang['Always_set_bm'] = '��������� �������� ������������� ��� ���������� ���������';
$lang['Found_bookmark'] = '�� ��������� %d ��������.'; // eg. Search found 1 match
$lang['Found_bookmarks'] = '�� ��������� %d ��������.'; // eg. Search found 24 matches
$lang['More_bookmarks'] = '������ ��������...'; // For mozilla navigation bar

// Start add - Fully integrated shoutbox MOD
$lang['Shoutbox'] = '�������';
$lang['Shoutbox_date'] = ' d m Y h:i:s';
$lang['Shout_censor'] = '���� ������!';
$lang['Shout_refresh'] = '��������';
$lang['Shout_text'] = '�����';
$lang['Viewing_Shoutbox']= '�������� ��������';
$lang['Censor'] ='������';
// End add - Fully integrated shoutbox MOD

$lang['bbcode_g_help'] = "��������: [glow=colour]�����[/glow] (alt+g)";
$lang['bbcode_d_help'] = "����: [shadow=colour]�����[/shadow] (alt+d)";
$lang['bbcode_e_help'] = "������������: [align=left|right|center|justify]�����[/align] (alt+e)";
$lang['bbcode_h_help'] = "���������: [fade]�����[/fade] (alt+h)";
$lang['bbcode_j_help'] = "����������� �����: [scroll**]�����[/scroll**] (alt+j)";
$lang['bbcode_k_help'] = "���������: [highlight=color]�����[/highlight] (alt+k)";
$lang['bbcode_m_help'] = "flash: [flash width= height= loop=]�����[/flash] (alt+m)";
$lang['bbcode_n_help'] = "��������: [flipv]�����[/flipv] (alt+n)";
$lang['bbcode_r_help'] = "��������: [fliph]�����[/fliph] (alt+r)";
$lang['bbcode_t_help'] = "��������� ����� (wma, mp3, mp2...): [stream]http://path_to_file.wma[/stream] (alt+t)";
$lang['bbcode_v_help'] = "���� �����: [left]Path_to_Picture[/left] (alt+v)";
$lang['bbcode_x_help'] = "���� ������: [right]Path_to_Picture[/right] (alt+x)";
$lang['PHPCode'] = 'PHP'; // PHP MOD
//
// Limit Image Width MOD
//

$lang['LIW_click_image'] = '������� �� �����������, ����� ������� ��� � ������ �������.';
$lang['LIW_click_image_explain'] = '������� �� �����������, ����� ������� ��� � ������ �������.';

//
// Limit Image Width MOD
//

$lang['bbcode_y_help'] = '��������� ���������� PHP. [php]<php code>[/php] (alt+y)'; // PHP MOD
$lang['bbcode_z_help'] = "Google: [google]������ ��� ������[/google] (alt+z)";
$lang['bbcode_sc_help'] = '��������� ���������: [schild=1]�����[/schild] ���������� �������';
$lang['bbcode_th_help'] = '�����������: [s]�����[/s] (alt+th)';
$lang['Smilie_creator'] = '��������� ���������';
$lang['SC_shieldtext'] = '����� ��������';
$lang['SC_fontcolor'] = '���� ������';
$lang['SC_shadowcolor'] = '���� �����';
$lang['SC_shieldshadow'] = '���� ������';
$lang['SC_shieldshadow_on'] = '������������';
$lang['SC_shieldshadow_off'] = '��������������';
$lang['SC_smiliechooser'] = '������� �������';
$lang['SC_random_smilie'] = '����� �������';
$lang['SC_default_smilie'] = '����������� �������';
$lang['SC_create_smilie'] = '�������';
$lang['SC_stop_creating'] = '������';
$lang['SC_error'] = '���� ������ - �� ������ �����...';
$lang['SC_another_shield'] = '������ ������� ������ �������?';
$lang['SC_notext_error'] = '�� �� ������ ��������� ������� ��� ������';

//
// TELL A FRIEND
$lang['Tell_Friend'] = "Email �����.";
$lang['Tell_Friend_Sender_User'] = "���� ���:";
$lang['Tell_Friend_Sender_Email'] = "��� Email:";
$lang['Tell_Friend_Reciever_User'] = "��� �����:";
$lang['Tell_Friend_Reciever_Email'] = "Email �����:";
$lang['Tell_Friend_Msg'] = "���������:";
$lang['Tell_Friend_Title'] = "����������";
$lang['Tell_Friend_Body'] = "������,\n� �������� ���� >>{TOPIC}<< �� {SITENAME} � �������, ��� �� ������ ���������������� ����. ����� ������: {LINK}\n\n��������! ����� ��������������� � ������, ��� �� ������� �� ����� ������.";

// Start add - Who viewed a topic MOD
$lang['Topic_view_users'] = '������ �������������, ������������� ����';
$lang['Topic_time'] = '��������� ��������';
$lang['Topic_count'] = '�������� �����';
$lang['Topic_view_count'] = '����� ���������� ���';
// End add - Who viewed a topic MOD

//
// Recent Topics
//
$lang['Recent_topics'] = '��������� ����';
$lang['Recent_today'] = '�������';
$lang['Recent_yesterday'] = '�����';
$lang['Recent_last24'] = '��������� 24 ����';
$lang['Recent_lastweek'] = '�� ������� ������';
$lang['Recent_lastXdays'] = '��������� %s ����';
$lang['Recent_last'] = '���������';
$lang['Recent_days'] = '����';
$lang['Recent_first'] = '�������� � %s';
$lang['Recent_first_poster'] = ' %s';
$lang['Recent_select_mode'] = '�������� �����:';
$lang['Recent_showing_posts'] = '�������� ���������:';
$lang['Recent_title_one'] = '<font size=4>%s</font> ��������� ���� %s'; // %s = topics; %s = sort method
$lang['Recent_title_more'] = '<font size=4>%s</font> ��������� ��� %s'; // %s = topics; %s = sort method
$lang['Recent_title_today'] = ' �� �������';
$lang['Recent_title_yesterday'] = ' �� �����';
$lang['Recent_title_last24'] = ' �� ��������� 24 ����';
$lang['Recent_title_lastweek'] = ' �� ��������� ������';
$lang['Recent_title_lastXdays'] = ' �� ��������� %s ����'; // %s = days
$lang['Recent_no_topics'] = '���� �� �������.';
$lang['Recent_wrong_mode'] = '���� ������ ������������ �����.';
$lang['Recent_click_return'] = '������� %s�����%s ��� �������� �����.';

// Bottom of Page Link MOD - Daz - ForumImages.com - START/END Line Below
$lang['Go_to_bottom'] = '����� ��������';

// Start add - Yellow card admin MOD
$lang['Give_G_card']='������ ������������ ������������';
$lang['Give_Y_card']='������� �������������� #%d';
$lang['Give_R_card']='�������� ������������ ������';
$lang['Ban_update_sucessful'] = '������ ����� ������� ��������';
$lang['Ban_update_green'] = '������������ ������ �����������';
$lang['Ban_update_yellow'] = '������������ ������� ��������������, ������ � ���� %d �������������� �� ������������ %d';
$lang['Ban_update_red'] = '������������ �������';
$lang['Ban_reactivate'] = '������� ������ �����������';
$lang['Ban_warning'] = '�� �������� ��������������';
$lang['Ban_blocked'] = '��� ������� ������������';
$lang['Click_return_viewtopic'] = '������� %s�����%s ��� �������� � ����';
$lang['Rules_ban_can'] = '�� <b>������</b> �������� ������ ������������� � ���� ������';
$lang['user_no_email'] = '� ������������ ��� email, ������� ��������� �� ����� ���� ����������. �� ������ ��������� �� ������������.';
$lang['user_already_banned'] = '��������� ������������ ��� �������';
$lang['Ban_no_admin'] ='���� ������������ - �������������, ������� �� �� ����� ���� ������������ ��� �������';
$lang['Rules_greencard_can'] = '�� <b>������</b> ��������� ������������� � ���� ������';
$lang['Rules_bluecard_can'] = '�� <b>������</b> ��������� ����� ����������� � ���� ������';
$lang['Give_b_card'] = '��������� ����� � ��������� ����������� ����� ������';
$lang['Clear_b_card'] = '� ��������� %d ����� ����. ����� �� ������ �� �� �������.';
$lang['No_moderators'] = '� ������ ������ ��� �����������, ����� �� ����� ���� ���������!';
$lang['Post_repported'] = '����� ��� ��������� %d �����������';
$lang['Post_repported_1'] = '����� ��� ��������� ����������';
$lang['Post_repport'] = '����� � ���������'; //Subject in email notification
$lang['Post_reset'] = '����� ����� ��� ����� ��������� �������';
$lang['Search_only_bluecards'] = '������ ������ ��������� � ������ �������';
$lang['Send_message'] = '������� %s�����%s ��� �������� ��������� ����������� ��� <br />';
$lang['Send_PM_user'] = '������� %s�����%s ��� �������� �� ������������ ���';
$lang['Link_to_post'] = '������� %s�����%s ��� �������� � ���������  <br/>--------------------------------<br/><br/>';
$lang['Post_a_report'] = '��������� �����';
$lang['Report_stored'] = '��� ����� ������� ������';
$lang['Send_report'] = '������� %s�����%s ��� �������� � ������������� ���������';
$lang['Red_card_warning'] = '�� ����������� ���� ������������ %s ������� �����, ��� �������� ������� ������������, �� �������?';
$lang['Yellow_card_warning'] = '�� ����������� ���� ������������ %s ������ �����, ��� �������� �������� ������������ ��������������, �� �������?';
$lang['Green_card_warning'] = '�� ����������� ���� ������������ %s ������� �����, ��� �������� �������� ������������, �� �������?';
$lang['Blue_card_warning'] = '�� ����������� ���� ��������� ����� �����, ��� �������� �������� ����������� �����������, �� ������������� ����� ������?';
$lang['Clear_blue_card_warning'] = '�� ����������� ������� ����� ����� � ����� ���������, �� �������?';
$lang['Warnings'] = '��������������: %d'; //shown beside users post, if any warnings given to the user
$lang['Banned'] = '��������';//shown beside users post, if user are banned

// Start add - Protect user account MOD
$lang['Error_login_tomutch']='�� ������� ��� ���������������� ������������, ���������� �������';
$lang['Password_not_complex'] ='��������� ������ �� ������������� ��������, �� ������ ���������, ��� ������ ';
$lang['Password_to_short'] = '��� ������� ������� �� %d ��������';
$lang['Password_mixed'] = '�������� ����� � �����';
$lang['Password_not_same'] = '�� ��������� � ������';
$lang['Time_format'] = 'D d. M, Y H:i:s';// how time should be shown in email notification 
$lang['Passwd_have_expired'] = '��� ������ ���������, �� ������ ������� �����';
$lang['Passwd_expired'] = '��� ������ ��������� � ������ ��������������. ������ �� ������ ������� �����. ����, �� �����-���� �������, �� �� ������ ������� ��� ������, �� ����������. �� ������ ��������� ��������� ������, ��������� ��������������� ������ ����� ������.';
$lang['Passwd_soon_expired'] = '��� ������ ����� ��������� � ������� %d ����. �� ����������� ��� ������� ��� ������. ���� ������ �����������, �� �� ������� ������������� ���, ����� �� ��������������� ������ ��� �����.';
$lang['Send_new_passwd'] = '��������� ��� ����� ������';
$lang['Passwd_updated'] = '������� <br />���� ����� ������ ��������';
$Lang['Passwd_title'] = '����������, ������� ��� ������';
// End add - Protect user account MOD

$lang['Topic_description'] = '�������� ����';
$lang['Description'] = '�������� ����';

// Start add - Topic in Who is online MOD
$lang['Browsing_topic'] = '������������ ������������� ����:';
// End add - Topic in Who is online MOD

//admin user list mail 
$lang['Usersname'] = "��� ������������";
$lang['Admin_Users_List_Mail_Title'] = "������ e-mail";
$lang['Admin_Users_List_Mail_Explain'] = "��� ������ e-mail-������� �������������";

// Moved Folder Image Mod
$lang['Moved'] = '����������';

//signature editor
$lang['sig_description'] = "������������� ������� (<b>������������ �������</b>)";
$lang['sig_edit'] = "������������� �������";
$lang['sig_current'] = "������� ������";
$lang['sig_none'] = "������� ����������";
$lang['sig_save'] = "���������";
$lang['sig_save_message'] = "������� ������� ���������!";

//Absent User Mod
$lang['On_holidays'] = '�� ��������';
$lang['User_ill'] = '�����';
$lang['Longer_absenct'] = '����� �� �����';
$lang['User_absence'] = '����������';
$lang['User_absence_mode'] = '������� ����������';
$lang['User_absence_text'] = '��������� ����������';
$lang['User_absent'] = '<b>��������� ����������:</b><br /><br />%s is %s.<br /><br /><i>%s</i><br /><br />�� �� ����� ��������� ��������� ��� %s!';
$lang['Absence_notify'] = '�� �������� ����������.<br />�� ������ ��������� ���?';
$lang['Absence_deleted'] = '�� ������� ��������� ����������.<br /><br />����� ���������� �����!';

// Top 5 Posters in EzPortal Mod
$lang['Top_Posters'] = '�������� ���������';
$lang['Top_Member'] = '������������';
$lang['Top_Posts'] = '���������';

// MOD MODCP EXTENSION BEGIN
$lang['Sticky_topic'] = '����������';
$lang['Announce_topic'] = '����������';
$lang['Normal_topic'] = '�������� ����';
$lang['Sticky'] = '����������';
$lang['Announce'] = '����������';
$lang['Normalise'] = '���������';
$lang['Topics_Stickyd'] = '��������� ���� ����������';
$lang['Topics_Announced'] = '��������� ���� ������ ����������';
$lang['Topics_Normalised'] = '��������� ���� �������������';
$lang['Check_All'] = '������� ���';
$lang['Uncheck_All'] = '��������� ���';
// MOD MODCP EXTENSION END
$lang['Search_new2'] = 'C�������� � ���������� ���������';

$lang['Search_for'] = "������";
$lang['Submit_search'] = "���������";
$lang['That_contains'] = "��������";

$lang['Name'] = '���';

// Contact Form Mod
// Kontakttext:
$lang['kontakt1'] = '<b>����������:</b> ���� � ��� ���� ������� �� ������������� �������, �� �������� <a href="faq.php"><b>FAQ</b></a>. ���� �� �� ������� ������ � FAQ, �� ��������� ������, ��������� ��� �����.<br><span class="gensmall">���������� ���� �������� *.</span>';
$lang['kontakt2'] = '���:*';
$lang['kontakt3'] = 'E-Mail:*';
$lang['kontakt4'] = '����:*';
$lang['kontakt5'] = '�����:*';
$lang['kontakt6'] = '���������';
$lang['kontakt7'] = '�������';
$lang['kontakt8'] = '������, �� ������� EMail!';
$lang['kontakt9'] = 'Email ���������!';
$lang['kontakt_js1'] = '�� ������ ������� ��������� ������?';
$lang['kontakt_js2'] = '������� ���!';
$lang['kontakt_js3'] = '������� ���������� EMail!';
$lang['kontakt_js4'] = '������������ EMail!';
$lang['kontakt_js5'] = '������� ����!';
$lang['kontakt_js6'] = '������� �����!';
$lang['Kontakt'] = '�������� ���������';

// Language Variables for phpBB2 Plus Forum Index Stats
$lang['Newest_user_plus'] = '<b>%s%s%s</b>'; // a href, username, /a
$lang['Live_Statistics'] = '����������';
$lang['Latest_Member'] = '���������';
$lang['New_Today'] = '����� �������';
$lang['New_Yesterday'] = '����� �����';
$lang['Members_Overall'] = '�����';
$lang['Online_Now'] = '������ ������';
$lang['Guests_P'] = '������';
$lang['Members_P'] = '�������������';
$lang['Box_Stats'] = '����������';
$lang['User_Record'] = '������ �������������';
$lang['Birthdays_P'] = '��� ��������';
$lang['Online_Members_P'] = '������';
$lang['Last_Visit'] = '����������';

// Google Visit Counter Mod
$lang['Google_Visit_counter'] = '��������� Google: <b>%d</b>';

//+MOD: Select Expand BBcodes MOD
$lang['Select'] = "�������� ��"; 
$lang['Expand'] = "�������� ���������"; 
$lang['Contract'] = "��������";
//-MOD: Select Expand BBcodes MOD

$lang['Click_larger'] = '�������� �� ��������, ����� ��������� �';

//BBCode Translations
$lang['B'] ='�';// Here the first letter of 'Bold' in your language
$lang['I'] ='�';// Here the first letter of 'Italic' in your language
$lang['U'] ='�';// Here the first letter of 'Underlined' in your language
$lang['Text'] ='�����';
$lang['Font_type'] = '��� ������';

//Portal Additions
$lang['KB_title'] = '���� ������';
$lang['Viewing_KB'] = '�������� KB';

// BEGIN Disable Registration MOD
$lang['registration_status'] = '��������, �� ����������� �� ���� ������ �������� ���. ���������� �����.';
// END Disable Registration MOD
$lang['Admin_reauthenticate'] = '��� ����������������� ������ �� ������ ������ ������ ���� ������.';
// [begin] Glance mod
$lang['Glance_anno'] = '���������� �������';
$lang['Glance_recent'] = '��������� ����';
// [end] Glance mod

//
// Jabber
//
$lang['JNotify'] = '�������� ��� � ��������� ������ �� Jabber ID';
$lang['Send_jabber'] = '��������� ��������� ';
$lang['Send_jabber_msg'] = '��������� jabber-���������';
$lang['JID'] = 'Jabber ID';
$lang['JID_explain'] = '������� ��� JabberID �� ������������ ������� jabber-�������';
$lang['Jabber_server'] = '������� Jabber-server, ������������ �������';
$lang['Jabber_language'] = '���� jabber ���������';
$lang['JID_not_specified'] = '������������ �� ������ ���� JabberID';
$lang['Jabber_reply'] = '������� ��� ����� � ����';
$lang['Jabber_reply_link'] = '������ ������:';
$lang['Always_jnotify'] = '������ �������� ��� �� ������� �� JabberID';
$lang['Always_jnotify_explain'] = '����� ���-������ ������� �� ����, � ������� �� ������, ��� ���������� ��������� �� JabberID. ��� ����� ����� ��������� ��� ���������� ���������.';
$lang['JID_invalid'] = '��������, ���� JabberID ����������';
$lang['Jabber_message_desc'] = '��������� ����� ���������� � ���� �������� ������, �� ��������� � ���� HTML ��� BBCode. � �������� ��������� ������ ����� ������������ ��� ����� JabberID.';
$lang['Sent_jabber_msg'] = '�������� ��� ���������';
$lang['Sent_from'] = '���������� � ������� ';

//+MOD: Search latest 24h 48h 72h
$lang['Search_latest'] = '����������� ��������� ��';
$lang['Search_latest_XXh'] = '%d ����';
//-MOD: Search latest 24h 48h 72h

//
// That's all, Folks!
// -------------------------------------------------


// PJIRC MOD
$lang['Chat_Room'] = '���';
$lang['IRC_commands'] = '������� IRC-����';
$lang['IRC_commands_explain'] = '��� �������� ����� ����������� ����� ���, ��� �� ������ �������������� � ����. ������� ������� � �������. <br />������:<br /> /msg ��� �� ������;<br />/beep';
$lang['IRC_disabled'] = '<b>��� � ������� ������ ������.</b> ���������� ���������� �����.';

$lang['top_referers'] = 'Top �������';

// ChanceAce
$lang['chance_title'] = "����";
// Slot machine
$lang['slotmachine_title'] = "������� ��������";

// Lottery Variables
$lang ['lottery_second'] = '�������';
$lang ['lottery_seconds'] = '������';
$lang ['lottery_minute'] = '������';
$lang ['lottery_minutes'] = '�����';
$lang ['lottery_hour'] = '���';
$lang ['lottery_hours'] = '�����';
$lang ['lottery_day'] = '����';
$lang ['lottery_days'] = '���';
$lang ['lottery_current_history'] = '������� �������';
$lang ['lottery_no_history'] = '� ��������� ����� ��� ������� � �������!';
$lang ['lottery_history_disabled'] = '������� ������� ��������� �� ������!';
$lang ['lottery_ticket_bought'] = '��� ����� � %s ��� ������� ������.';
$lang ['lottery_tickets_bought'] = '���� ������ (%s ��.) � %s ���� ������� �������.';
$lang ['lottery_purchased_ticket'] = ' ��� ������� ������!';
$lang ['lottery_purchased_tickets'] = ' ��� ������� %s �������!';
$lang ['lottery_purchased_ne'] = '� ��� ������������ ';
$lang ['lottery_too_many_tickets'] = '�� ��� ������ ����������� ���������� � ���� ������� ���������� �������! ���������� ����� �� ���������� ������.';
$lang ['lottery_information'] = '����������';
$lang ['lottery_actions'] = '��������� �������';
$lang ['lottery_disabled'] = '������� � ��������� ����� ���������! <br /><br />���������� �����.';
$lang ['lottery_ID'] = '������������� (ID)';
$lang ['lottery_winner'] = '����������';
$lang ['lottery_amount_won'] = '���������� �����';
$lang ['lottery_time_won'] = '����� ��������';
$lang ['lottery_total_history'] = '����� ���������� ������� � ������� �������: %s.';
$lang ['lottery_history'] = '�������';
$lang ['lottery_tickets_owned'] = '������� �������';
$lang ['lottery_ticket_cost'] = '��������� ������';
$lang ['lottery_base_pool'] = '�������� �������� ���';
$lang ['lottery_current_entries'] = '������ ����������';
$lang ['lottery_total_pool'] = '������ �������� ���';
$lang ['lottery_item_draw'] = '������������� �������';
$lang ['lottery_time_draw'] = '����� �� ��������';
$lang ['lottery_last_winner'] = '��������� ����������';
$lang ['lottery_buy_ticket'] = '������ �����';
$lang ['lottery_buy_tickets'] = '������ �������';
$lang ['lottery_view_history'] = '�������� ������� �������';
$lang ['lottery_view_phistory'] = '�������� ������ �������';
$lang['lottery'] = '�������';

// Lottery Error Variables
$lang ['lottery_error_updating'] = '������ ���������� ������� %s !';
$lang ['lottery_error_deleting'] = '������ �������� �� ������� %s !';
$lang ['lottery_error_selecting'] = '������ ��������� ���������� �� ������� %s !';
$lang ['lottery_error_inserting'] = '������ ������� � ������� %s !';
$lang ['lottery_error_variable'] = '�� ���� ��������� ���������� %s !';
$lang ['lottery_invalid_command'] = '�������� �������!';
$lang ['lottery_no_history_type'] = '�� ������ ��� �������!';

// Job Variables
$lang['jobs'] = '������';
$lang['jobs_unemployed'] = '�����������';
$lang['jobs_current'] = '������� ������';
$lang['jobs_available'] = '��������� ������';
$lang['jobs_youre_unemployed'] = '�� ������ �����������.';
$lang['jobs_cant_be_employed'] = '�� ������ �� ������ ���������������.';
$lang['jobs_not_employed'] = '�� �� ������ ���������� �� ������, �� ������� �� �� ������!';
$lang['jobs_quit'] = '�� ������ ���� � ������ ��� %s!';
$lang['jobs_now_employed'] = '�� ������ ��������� ��� %s!';
$lang['jobs_already_employed'] = '�� ������ ������ �� ��� ������!';
$lang['job_requires'] = '��� ������ ������� %s.';
$lang['jobs_item'] = '�������';
$lang['jobs_no_positions'] = '� ��������� ����� ��� ��������� ������!';
$lang['jobs_not_public'] = '��� ������ � ��������� ��������!';
$lang['jobs_not_exist'] = '��� ������ �� ����������!';
$lang['jobs_information'] = '���������� � ������';
$lang['jobs_job'] = '������';
$lang['jobs_pay'] = '������';
$lang['jobs_pay_length'] = '������ ������';
$lang['jobs_started'] = '�����';
$lang['jobs_last_paid'] = '��������� �������';
$lang['jobs_postions'] = '�������� ����';
$lang ['jobs_remaining_positions'] = '�������� ������� ����';
$lang ['jobs_taken_positions'] = '������� ������� ����';
$lang ['jobs_total_employed'] = '����� ������� ����';
$lang ['jobs_total_positions'] = '����� ������� ����';
$lang ['jobs_total_jobs'] = '����� �����';
$lang ['jobs_too_many'] = '�� ��� ������ ����������� ���������� ������� ����!';
$lang ['jobs_positions'] = '����';
$lang['jobs_second'] = '�������';
$lang['jobs_seconds'] = '������';
$lang['jobs_minute'] = '������';
$lang['jobs_minutes'] = '�����';
$lang['jobs_hour'] = '���';
$lang['jobs_hours'] = '�����';
$lang['jobs_day'] = '����';
$lang['jobs_days'] = '����';

// Job Buttons
$lang['jobs_button_accept'] = '�������';
$lang['jobs_button_quit'] = '�����!';

// Job Error Variables
$lang['jobs_error_updating'] = '������ ���������� ������� %s!';
$lang['jobs_error_deleting'] = '������ �������� �� ������� %s!';
$lang['jobs_error_selecting'] = '������ ��������� ���������� �� ������� %s!';
$lang['jobs_error_inserting'] = '������ ������� ������ � ������� %s!';
$lang['jobs_error_variable'] = '���������� ��������� ���������� %s!';

//
// These are UPDATED lang files. I've added this so you can easily find it with SEARCH. :)
// Ignore these comments if this is your first install, but make sure you include them all!
//
$lang ['jobs_requires_admin'] = '�� ������ ���� ���������������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_mod'] = '�� ������ ���� �����������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_male'] = '�� ������ ���� ��������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_female'] = '�� ������ ���� ��������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_nmale'] = '�� �� ������ ���� ��������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_nfemale'] = '�� �� ������ ���� ��������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_gil'] = '� ��� ������ ���� %s %s, ����� �������� �� ��� ������!';
$lang ['jobs_requires_ngil'] = '� ��� �� ������ ���� %s %s, ����� �������� �� ��� ������!';
$lang ['jobs_requires_mgil'] = '� ��� ������ ���� ������, ��� %s %s, ����� �������� �� ��� ������!';
$lang ['jobs_requires_lgil'] = '� ��� ������ ���� ������, ��� %s %s, ����� �������� �� ��� ������!';
$lang ['jobs_requires_posts'] = '� ��� ������ ���� %s ������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_nposts'] = '� ��� �� ������ ���� %s ������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_mposts'] = '� ��� ������ ���� ������, ��� %s ������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_lposts'] = '� ��� ������ ���� ������, ��� %s ������, ����� �������� �� ��� ������!';
$lang ['jobs_requires_item'] = '� ��� � ��������� ������ ���� %s, ����� �������� �� ��� ������!';
$lang ['jobs_requires_nitem'] = '� ��� � ��������� �� ������ ���� %s, ����� �������� �� ��� ������!';

$lang['Rabbitoshi_topic']='�������� ������������';

// [begin] Glance mod
$lang['Glance_anno'] = '���������� �������';
$lang['Glance_recent'] = '��������� ����';
// [end] Glance mod

//
// Password-protected topics
//
$lang['Topic_password'] = '������ �� ����';
$lang['Enter_topic__password'] = '����� ������';
$lang['Incorrect_topic_password'] = '�������� ������';
$lang['Password_login_success'] = '�� ����� ������ ������';
$lang['Click_return_page'] = '������� %s�����%s, ����� ��������� �� ��������';
$lang['Not_auth_edit_post'] = '�� �� ������ ����, ����� �������� ��� ���������';
$lang['Not_delete_password_topics'] = '�� �� ����� ����, ����� ������� ���� ���������� �������';
$lang['Only_alpha_num_chars'] = '������ ������ ��������� �� ������ 3 � �� ������ 20 ��������, � ����� �������� ������ �� ���� ���������� �������� � ���� (A-Z, a-z, 0-9).';

//
// Buddy list
//
$lang['Buddylist'] = '������ ������';
$lang['Buddy'] = '����';
$lang['Add_buddy'] = '�������� � ��� ������ ������';
$lang['Remove_buddy'] = '������� �� ������ ������ ������';
$lang['Buddy_added'] = '������������ ��� �������� � ��� ������ ������';
$lang['Buddy_removed'] = '������������ ��� ������ �� ������ ������ ������';
$lang['Click_return_page'] = '������� %s�����%s ����� ���������';
$lang['Confirm_remove_buddy'] = '�� ������� ��� ������ ������� ����� ������������ �� ������ ������ ������?';

$lang['Online'] = '� ����';
$lang['Offline'] = '���������';
$lang['Buddies_online'] = '������ � ����';
$lang['Buddies_offline'] = '������ ���������';
$lang['No_buddies'] = '��� ������ � ������';
$lang['No_buddies_online'] = '��� ������ � ����';
$lang['No_buddies_offline'] = '��� ������ �����������';



//
// That's all, Folks!
// -------------------------------------------------
//

//======================================================================= |
//==== Start: == Activity Mod Plus ====================================== |
//==== v1.1.0 =========================================================== |
//==== 
$lang['Activity'] = '����';
$lang['Trohpy'] = '������� ������';
//====
//==== Author: aUsTiN [austin@phpbb-amod.com] [http://phpbb-amod.com] === |
//==== End: ==== Activity Mod Plus ====================================== |	
//======================================================================= |
//
// That's all, Folks!
// -------------------------------------------------



// Start add - Search back MOD
$lang['View_posts_of_last'] = '����� ��������� �� ';
$lang['Select_time'] = "�������� �����";
$lang['Or'] = "���";
$lang['15_min'] = "15 �����";
$lang['30_min'] = "30 �����";
$lang['45_min'] = "45 �����";
$lang['1_Hour'] = "60 �����";
$lang['2_Hour'] = "2 ����";
$lang['6_Hour'] = "6 �����";
$lang['12_Hour'] = "12 �����";
// End add - Search back MOD

$lang['clock_name'] = '���� & ���������';

// XS News
$lang['xs_latest_news'] = '��������� �������';
$lang['xs_no_news'] = '��� ��������.';
$lang['xs_news_version'] = 'XS-News ������: %s';
$lang['xs_news_ticker_feed'] = 'XML-Feed ������: %s';
$lang['xs_no_ticker'] = '��� ���� ��������. �������� ������ ACP ��� ���������.';
$lang['xs_news_ticker_title'] = '����� ��������';
$lang['xs_news_tickers_title'] = '����� ��������';
$lang['xs_news_item_title'] = '�������';
$lang['xs_news_items_title'] = '�������';

// XS Nav Menus
$lang['nm_version_info'] = 'XS-Nav ������: %s';
// used if combining Google/Forum searches
$lang['nm_google_search'] = 'Google';
$lang['nm_forum_search'] = '�����';
// Used for Last # Topics
$lang['nm_last_topic_title'] = '��������� \'%s\' ���';
$lang['nm_last_topic_title_none'] = '��� ��������� ���';
// Used in viewforum forum search
$lang['nm_search_all'] = '����� �� ���� �������';
$lang['nm_search_this'] = '����� �� ����� ������';

// Page Loading MOD
$lang['Page_loading_wait'] = '�������� �����������... ����������, ���������!';
$lang['Page_loading_stop'] = '�������� �� ������������ ��� �� �� ������ �����? ������� <span onclick="hideLoadingPage()" style="cursor:hand"><u>�����</u></span>';

// Mouse Hover Topic Started Date MOD
$lang['Topic_started'] = '���� ������';

// Visit Counter
$lang['Visit_counter'] = '����� <b>%d</b> ����������� ���� �� �������';

//Header und Navigation
$lang['NP_NOT_ACTIVATED'] = '���� ��������� �� �������!<br><br>�� ������ ������� �� ������?';
$lang['NP_NOT_ACTIVATED_2'] = '�� ������� ������� ������ ���������!';
$lang['NP_NEEDED_POSTS'] = '� ��� ������ ���� ������� <b>'.$posts.'</b> ��������� ��� �������� ����������� ���������.';
$lang['NP_NICKPAGE_REQUEST'] = '������ ��������� ���������� �� ������:<br><br><b>nickpage.php?user=������������</b>';
$lang['NP_NICKPAGE_OF'] =  '��������� ';
$lang['NP_VOTE_FOR'] = '������� ���������';
$lang['NP_LAST_ONLINE'] = '��� ��������� ���';
$lang['NP_STATUS'] = '������';
$lang['NP_VISITS'] = '���������';
$lang['NP_NAVIGATION'] = '���������';
$lang['NP_HOME'] = '�������';
$lang['NP_SELFMADE'] = '���������';
$lang['NP_GALERIE'] = '��������';
$lang['NP_PM_ME'] = '��������� �� ��';
$lang['NP_GB_ENTRY'] = '��������� � ��������';
$lang['NP_ADMIN'] = '����������';
$lang['NP_FAVORTIE_URL'] = '������';
$lang['NP_BUDDY'] = '������';
$lang['NP_VOTES'] = '�������';
$lang['NP_YES'] = '��';
$lang['NP_NO'] = '���';
$lang['NP_STOP'] = '������ ������';
$lang['NP_WINDOW_CLOSE'] = '��� ���� ��������� ����� 5 ������.';
$lang['NP_BUDDY_ADD_ME'] = '������ ���� � ������';
	
//Allgemein
$lang['NP_NAME'] = '���';
$lang['NP_OLD'] = '�������';
$lang['NP_FROM'] = '�����';
$lang['NP_EMAIL'] = 'Email';
$lang['NP_WEBSITE'] = '����';
$lang['NP_INTERESTS'] = '�����';
$lang['NP_GUESTBOOK'] = '��������';
$lang['NP_SITE'] = '����';
$lang['NP_WRITE_ON'] = '������';
$lang['NP_NEXT_SITE'] = '����. ���.';
$lang['NP_SITE_BEFORE'] = '����. ���.';
$lang['NP_GB_BUTTON'] = '������� ���������';

//Galerie
$lang['NP_NEXT'] = '����.';
$lang['NP_BEFORE'] = '����.';
$lang['NP_PIC_ALT'] = 'hit';

//Guestbook Entry
$lang['NP_GUESTBOOK_AT'] = '�������� ��������� � �������� ';
$lang['NP_WARNING'] = '���� HTML <b><font color="red">���������</b></font>, BB-CODE <b><font color="green">��������</font></b>, , ������ <b><font color="green">��������</font></b>';
$lang['NP_YOUR_NAME'] = '���� ���';
$lang['NP_MESSAGE_TO'] = '��������� ���';
$lang['NP_ADD_ENTRY'] = '��������';
$lang['NP_RESET_ENTRY'] = '�����';
$lang['NP_GB_THX'] = '������� �� ��������� � ��������';
$lang['NP_GB_USER_WANTS'] = '������ ������������������ ������������ ����� ��������� ��������� � ��������';
$lang['NP_GB_REGISTERED_ONLY'] = '������ ������������������ ������������ ����� ��������� ��������� � ��������';
$lang['NP_GB_FORBIDDEN_FROM_ADMIN'] = '�������� ��������� ���������������';
	
//Vote
$lang['NP_VOTE'] = '�������';
$lang['NP_CHOOSE'] = '�������';
$lang['NP_FANTASTIC'] = '���������';
$lang['NP_GOOD'] = '������';
$lang['NP_NORMAL'] = '���������';
$lang['NP_BAD'] = '�����';
$lang['NP_VERY_BAD'] = '�������������';
$lang['NP_DO_VOTE'] = '�����';
$lang['NP_VOTES_BEFORE'] = '�� ��� ���������� �� ����� ������������ ;-).';
$lang['NP_NOT_ALLOWED'] = '�� ��� �� ���������� �� ����� ������������!';
$lang['NP_VOTE_THX'] = '������� �� ���� ������';
	
//Nickpage CMS
$lang['NP_BACK_TO_NICKPAGE'] = '����� � ���������';
$lang['NP_CONFIGURATION'] = '������������';
$lang['NP_SECURITY'] = '������';
$lang['NP_GUESTBOOK'] = '��������';
$lang['NP_BIRTHDAY'] = '���� �������� (��.��.����)';
$lang['NP_BIRTHDAY_COMMENT'] = '(���� �� �� ������ ���������� ���� �������,<br>�������� ��� 3 ���� �������!)';
$lang['NP_SHOW_EMAIL'] = '���������� ������ Email';
$lang['NP_SHOW_EMAIL_COMMENT'] = '(��� ��������� ������� <br>������� �� �������!)';
$lang['NP_INFORMATION'] = '����������';
$lang['NP_SPECIALNICKNAME'] = '����������� ���';
$lang['NP_USERPIC'] = '���������� (200x200,PNG/GIF/JPEG)';
$lang['NP_SAFE'] = '���������';
$lang['NP_SETBACK'] = '��������';
$lang['NP_ADD_LINK'] = '�������� ������';
$lang['NP_LINK_NAME'] = '��������';
$lang['NP_LINK_ADRESS'] = 'URL';
$lang['NP_EDIT_LINK'] = '������������� ������';
$lang['NP_EDIT'] = '�������������';
$lang['NP_DELETE'] = '�������';
$lang['NP_ADD_BUDDY'] = '�������� �����';
$lang['NP_NICKNAME'] = '���';
$lang['NP_NICKNAME_SEARCH'] = '����� ���';
$lang['NP_ADD_GALERIE'] = '�������� ����';
$lang['NP_PIC'] = '����';
$lang['NP_PIC_TITLE'] = '��������';
$lang['NP_ADD_SELFMADE'] = '������� ���������';
$lang['NP_SECURITY_SETTINGS'] = '������������� ��������� ������';
$lang['NP_REGISTERED_ONLY_VIEW'] = '������ ������������������ ������������ ����� ������ ��� ���������';
$lang['NP_REGISTERED_ONLY_GB'] = '������ ������������������ ������������ ����� ��������� ��������� � ���� ��������';
$lang['NP_MANAGE_GUESTBOOK'] = '������������� ������ � ��������';
$lang['NP_AUTHOR'] = '�����';
$lang['NP_DATE'] = '����';
$lang['NP_TIME'] = '�����';
$lang['NP_ENTRY'] = '�����';
$lang['NP_DELETE_PIC'] = '������� ����';
$lang['NP_GB_EMAIL'] = '�������� Email ��� ����� ���������� � ��������?';
//Notification
$lang['Notification_nickpage_subject'] = '����� ������ � ��������';

//Adminref
$lang['NICKPAGE'] = "�������� ���������";
$lang['Name'] = '���';
$lang['Alter'] = '�������';
$lang['Userpic'] = '����';
$lang['Eintraege'] = '��������';
$lang['Bilder'] = '��������';
$lang['Zugang'] = '�������';
$lang['Recent_Nickpages'] = "���������� ��������";
$lang['No_Recent_Nickpages'] = "��� ��������� ���������";
$lang['Nickpagelist'] = "������ ��������";

$lang['Watched_Topics'] = '����������� ����';
$lang['No_Watched_Topics'] = '� ��� ��� ����������� ���';
$lang['Watched_Topics_Started'] = '�������� ������';
$lang['Watched_Topics_Stop'] = '���������� ��������';
$lang['Check_All'] = '�������� ���';
$lang['UnCheck_All'] = '����� ���������';

?>