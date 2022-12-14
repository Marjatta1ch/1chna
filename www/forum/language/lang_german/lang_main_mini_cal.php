<?php
/***************************************************************************
 *                            lang_main_mini_cal.php
 *                            ----------------------
 *   Author  		: 	Mark Fyvie mark@fyvie.net
 *   Created 		: 	Friday, Jan 16, 2003
 *	 Last Updated	:	Thursday, March 25, 2004
 *
 *	 Version		: 	MINI_CAL - 2.0.4
 *
 ***************************************************************************/

$lang['Mini_Cal_calendar'] = 'Kalender';
$lang['Mini_Cal_add_event'] = 'Neuer Termin';
$lang['Mini_Cal_events'] = 'Kommende Events';
$lang['Mini_Cal_no_events'] = 'Keine';


// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
$lang['Mini_Cal_date_format'] = '%b %e';
$lang['Mini_Cal_date_format_Time'] = '%H:%i';


// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa'; 
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su'; 
$lang['mini_cal']['day'][1] = 'Mo'; 
$lang['mini_cal']['day'][2] = 'Di'; 
$lang['mini_cal']['day'][3] = 'Mi'; 
$lang['mini_cal']['day'][4] = 'Do'; 
$lang['mini_cal']['day'][5] = 'Fr'; 
$lang['mini_cal']['day'][6] = 'Sa'; 
$lang['mini_cal']['day'][7] = 'So'; 

$lang['mini_cal']['month'][1] = 'Jan'; 
$lang['mini_cal']['month'][2] = 'Feb'; 
$lang['mini_cal']['month'][3] = 'M?r'; 
$lang['mini_cal']['month'][4] = 'Apr'; 
$lang['mini_cal']['month'][5] = 'Mai'; 
$lang['mini_cal']['month'][6] = 'Jun'; 
$lang['mini_cal']['month'][7] = 'Jul'; 
$lang['mini_cal']['month'][8] = 'Aug'; 
$lang['mini_cal']['month'][9] = 'Sep'; 
$lang['mini_cal']['month'][10] = 'Okt'; 
$lang['mini_cal']['month'][11] = 'Nov'; 
$lang['mini_cal']['month'][12] = 'Dec'; 

$lang['mini_cal']['long_month'][1] = 'Januar'; 
$lang['mini_cal']['long_month'][2] = 'Februar'; 
$lang['mini_cal']['long_month'][3] = 'M?rz'; 
$lang['mini_cal']['long_month'][4] = 'April'; 
$lang['mini_cal']['long_month'][5] = 'Mai'; 
$lang['mini_cal']['long_month'][6] = 'Juni'; 
$lang['mini_cal']['long_month'][7] = 'Juli'; 
$lang['mini_cal']['long_month'][8] = 'August'; 
$lang['mini_cal']['long_month'][9] = 'September'; 
$lang['mini_cal']['long_month'][10] = 'Oktober'; 
$lang['mini_cal']['long_month'][11] = 'November'; 
$lang['mini_cal']['long_month'][12] = 'Dezember'; 
?>

