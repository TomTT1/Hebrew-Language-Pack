<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * $Id: datahandler_pm.lang.php 5016 2010-06-12 00:24:02Z RyanGordon $
 */

$l['eventdata_missing_name'] = "שם האירוע חסר. אנא ציין שם לאירוע.";
$l['eventdata_missing_description'] = "תיאור האירוע חסר. אנא ציין תיאור לאירוע.";
$l['eventdata_invalid_start_date'] = "תאריך ההתחלה שציינת עבור האירוע לא חוקי. עליך להיות בטוח שציינת את היום, את החודש ואת השנה כראוי ושהיום קיים באותו החודש.";
$l['eventdata_invalid_start_year'] = "אירועים יכולים להיווצר רק לחמש שנים הבאות. אנא בחר שנת התחלה רלוונטית מהרשימה.";
$l['eventdata_invalid_start_month'] = "חודש ההתחלה שציינת אינו חודש חוקי. אנא ציין חודש התחלה חוקי.";
$l['eventdata_invalid_end_date'] = "תאריך הסיום שציינת לאירוע לא חוקי. עליך להיות בטוח שציינת את היום, את החודש ואת השנה כראוי ושהיום קיים באותו החודש.";
$l['eventdata_invalid_end_year'] = "אירועים יכולים להיווצר רק לחמש שנים הבאות. אנא בחר שנת סיום רלוונטית מהרשימה.";
$l['eventdata_invalid_end_month'] = "חודש הסיום שציינת אינו חודש חוקי. אנא ציין חודש סיום חוקי.";
$l['eventdata_invalid_end_day'] = "יום הסיום שציינת לא חוקי. מספר היום שציינת גדול ממספר הימים שיש באותו החודש.";
$l['eventdata_cant_specify_one_time'] = "אם אתה מציין תאריך התחלה עליך לבחור תאריך סיום.";
$l['eventdata_start_time_invalid'] = "זמן ההתחלה שציינת לא חוקי. דוגמא לזמן חוקי היא 12am, 12:01am, 00:01.";
$l['eventdata_end_time_invalid'] = "זמן הסיום שציינת לא חוקי. דוגמא לזמן חוקי היא 12am, 12:01am, 00:01.";
$l['eventdata_invalid_timezone'] = "איזור הזמן שבחרת עבור אירוע זה לא חוקי.";
$l['eventdata_end_in_past'] = "תאריך או זמן הסיום שלך הינם לפני תאריך או זמן ההתחלה שלך.";
$l['eventdata_only_ranged_events_repeat'] = "רק אירועים בעלי טווח (אירועים עם תאריך התחלה ותאריך סיום) יכולים לחזור.";
$l['eventdata_invalid_repeat_day_interval'] = "רשמת טווח חזרה יומי לא חוקי.";
$l['eventdata_invalid_repeat_week_interval'] = "רשמת טווח חזרה שבועי לא חוקי.";
$l['eventdata_invalid_repeat_weekly_days'] = "לא בחרת שום יום בשבוע עבור אירוע זה.";
$l['eventdata_invalid_repeat_month_interval'] = "רשמת טווח חזרה חודשי לא חוקי.";
$l['eventdata_invalid_repeat_year_interval'] = "רשמת טווח חזרה שנתי לא חוקי.";
$l['eventdata_event_wont_occur'] = "שימוש בזמן ההתחלה ובזמן הסוף יחד עם ההגדרות הישנות של האירוע, האירוע הזה לא יתרחש.";
$l['eventdata_no_permission_private_event'] = "אין לך גישה ליצור אירועים פרטיים.";
$l['pmdata_too_long_subject'] = "הכותרת של ההודעה הפרטית שלך ארוכה מדי. אנא כתוב כותרת קצרה יותר.";
$l['pmdata_code_no_subject'] = "[אין כותרת]";
$l['pmdata_missing_subject'] = "לא כתבת כותרת להודעה שלך. אנא רשום כותרת.";
$l['pmdata_missing_message'] = "לא כתבת הודעה. אנא הכנס תוכן הודעה לשליחה.";
$l['pmdata_invalid_recipients'] = "אחד או יותר מהנמענים שלך אינם משתמשים רשומים: {1}";
$l['pmdata_no_recipients'] = "לא ציינת נמען אחד או יותר להודעה זו. אתה חייב לכתוב לפחות נמען אחד בשדה 'אל'.";
$l['pmdata_too_many_recipients'] = "אתה רשאי לשלוח למקסימום {1} משתמשים בכל הודעה.";
$l['pmdata_recipient_is_ignoring'] = "אתה לא יכול לשלוח הודעה ל{1} מכיוון שאתה ברשימת ההתעלמות שלו.";
$l['pmdata_recipient_has_buddy_only'] = "אתה לא יכול לשלוח הודעות ל{1} בגלל שאתה לא ברשימת החברים שלו.";
$l['pmdata_recipient_pms_disabled'] = "{1} ביטל את מערכת הודעות פרטיות. לא תוכל לשלוח הודעות פרטיות למשתמש זה.";
$l['pmdata_recipient_reached_quota'] = "{1} ניצל את נפח ההודעות הפרטיות שהוקצה לו לכן ההודעה לא תשלח.";
$l['pmdata_pm_flooding'] = "אתה מנסה לשלוח הודעה מהר מדי לאחר ההודעה הקודמת. אנא המתן עוד {1} שניות.";
$l['pmdata_pm_flooding_one_second'] = "אתה מנסה לשלוח הודעה מהר מדי לאחר ההודעה הקודמת. אנא המתן עוד שניה אחת.";
?>