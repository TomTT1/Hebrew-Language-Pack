<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 * 
 * $Id: misc.lang.php 5063 2010-07-02 08:09:12Z Tomm $
 */

$l['click_no_wait'] = "לחץ כאן אם אין ברצונך לחכות יותר.";
$l['redirect_return_forum'] = "<br /><br />באפשרותך גם, <a href=\"{1}\">לחזור לפורום</a>.";
$l['redirect_emailsent'] = "הודעות האמייל שלך נשלחה בהצלחה.";
$l['redirect_loggedin'] = "התחברת בהצלחה.<br />אתה  מועבר כעת למקום ממנו באת.";
$l['error_invalidpworusername'] = "שם המשתמש או הסיסמא שרשמת אינם נכונים. <br /><br />אם שכחת את סיסמאתך <a href=\"member.php?action=lostpw\">בקש אחת חדשה</a>.";
$l['error_incompletefields'] = "השארת שדה אחד או יותר ריקים. אנא חזור אחורה ומלא שדות דרושים.";
$l['error_alreadyuploaded'] = "בהודעה הזאת כבר קיים קובץ בעל אותו שם. אנא שנה את שם הקובץ ותעלה אותו שוב. על מנת לעדכן קובץ בחר אותו ולחץ עדכן קובץ.";
$l['error_nomessage'] = "מצטערים, לא נוכל לבצע מכיוון שלא כתבת הודעה חוקית. אנא חזור אחורה ועשה זאת.";
$l['error_invalidemail'] = "לא כתבת כתובת אמייל חוקית.";
$l['error_nomember'] = "המשתמש שציינת לא לא חוקי או לא קיים.";
$l['error_maxposts'] = "I'm sorry, but your daily post limit has been exceeded.  Please wait till tomorrow to post further or contact your administrator.<br /><br />The maximum amount of posts you may make in a day is {1}";
$l['error_nohostname'] = "לא נמצא שם מאחסן עבור כתובת הIP שציינת.";
$l['error_invalidthread'] = "האשכול שצויין לא קיים.";
$l['error_invalidpost'] = "ההודעה שצוינה לא קיימת.";
$l['error_invalidattachment'] = "הקובץ שצויין לא קיים.";
$l['error_invalidforum'] = "פורום לא חוקי";
$l['error_closedinvalidforum'] = "אתה לא יכול לכתוב בפורום זה מפני שהוא סגור, או מפני שזה קטגוריה.";
$l['error_attachtype'] = "סוג הקובץ של הקובץ שצירפת אינה חוקי. אנא הורד את הקובץ או שתבחר סוג אחר.
";
$l['error_attachsize'] = "הקובץ שצירפת גדול מידי. הגודל המקסימלי של קבצים מסוג זה הוא {1} kilobytes.";
$l['error_uploadsize'] = "הגודל של הקובץ שהעלת גדול מידי.";
$l['error_uploadfailed'] = "העלאת הקובץ נכשלה. אנא בחר קובץ תקני ותנסה להעלות שנית. ";
$l['error_uploadfailed_detail'] = "פרטי שגיאה: ";
$l['error_uploadfailed_php1'] = "PHP returned: Uploaded file exceeded upload_max_filesize directive in php.ini.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_php2'] = "גודל הקובץ שהועלה חורג ממגבלת הגודל המותרת.";
$l['error_uploadfailed_php3'] = "הקובץ שהעלתה הועלה רק באפון חלקי.";
$l['error_uploadfailed_php4'] = "אף קובץ לא הועלה.";
$l['error_uploadfailed_php6'] = "PHP returned: Missing a temporary folder.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_php7'] = "PHP returned: Failed to write the file to disk.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_phpx'] = "PHP returned error code: {1}.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_nothingtomove'] = "An invalid file was specified, so the uploaded file could not be moved to its destination.";
$l['error_uploadfailed_movefailed'] = "There was a problem moving the uploaded file to its destination.";
$l['error_uploadfailed_lost'] = "The attachment could not be found on the server.";
$l['error_emailmismatch'] = "כתובת האימייל שהכנסת אינה מתאימה. אנא תחזור ותנסה שוב.";
$l['error_nopassword'] = "אתה לא הכנסת סיסמא תקנית.";
$l['error_usernametaken'] = "שם המשתמש שבחרת כבר בשימוש.";
$l['error_nousername'] = "לא הכנסת שם משתמש.";
$l['error_invalidusername'] = "The username you have entered appears to be invalid.";
$l['error_invalidpassword'] = "הסיסמא שהכנסת לא נכונה. במקרה ושכחת את סיסמתך, תלחץ <a href=\"member.php?action=lostpw\">כאן</a>. אם לא, תחזור אחורה ונסה שנית.";
$l['error_postflooding'] = "We are sorry but we cannot process your post. The administrator has specified you are only allowed to post once every {1} seconds.";
$l['error_nopermission_guest_1'] = "כנראה שאתה לא מחובר או שאין לך גישה ליראות דף זה. זה יכול להיות בגלל אחד מסיבות אלה:";
$l['error_nopermission_guest_2'] = "אתה לא מחובר או רשום. אנא השתמש בטופס שבחלק העליון של הדף על מנת להתחבר.";
$l['error_nopermission_guest_3'] = "You do not have permission to access this page. Are you trying to access administrative pages or a resource that you shouldn't be?  Check in the forum rules that you are allowed to perform this action.";
$l['error_nopermission_guest_4'] = "Your account may have been disabled by an administrator, or it may be awaiting account activation.";
$l['error_nopermission_guest_5'] = "You have accessed this page directly rather than using appropriate forms or links.";
$l['login'] = "התחבר";
$l['need_reg'] = "צריך להרשם?";
$l['forgot_password'] = "שכחת את סיסמאתך?";
$l['error_nopermission_user_1'] = "You do not have permission to access this page. This could be because of one of the following reasons:";
$l['error_nopermission_user_ajax'] = "You do not have permission to access this page.";
$l['error_nopermission_user_2'] = "Your account has either been suspended or you have been banned from accessing this resource.";
$l['error_nopermission_user_3'] = "You do not have permission to access this page. Are you trying to access administrative pages or a resource that you shouldn't be? Check in the forum rules that you are allowed to perform this action.";
$l['error_nopermission_user_4'] = "Your account may still be awaiting activation or moderation.";
$l['error_nopermission_user_5'] = "You have accessed this page directly rather than using appropriate forms or link.";
$l['error_nopermission_user_resendactivation'] = "Resend Activation Code";
$l['error_nopermission_user_username'] = "You are currently logged in with the username: '{1}'";
$l['logged_in_user'] = "משתמש מחובר";
$l['error_too_many_images'] = "יותר מדי תמונות.";
$l['error_too_many_images2'] = "מצטערים, אך לא נוכל לשלוח את הודעתך מיוון שהיא מכילה יותר מידי תמונות. אנא מחק מספר תמונות מההודעה כדי להמשיך.";
$l['error_too_many_images3'] = "<b>הערה:</b> הסכום המקסימאלי לתתמונות בהודעה הוא";
$l['error_attach_file'] = "Error Attaching File";
$l['please_correct_errors'] = "אנא תקן את השגיאות הבאות לפני שתוכל להמשיך:";
$l['error_reachedattachquota'] = "מצטערים אך עברת את מכסת הקבצים המצורפים שאתה רשאי לשמור {1}";
$l['error_invaliduser'] = "המשתמש שצוין לא חוקי או לא קיים";
$l['error_invalidaction'] = "פעולה לא חוקית";
$l['error_messagelength'] = "Sorry, your message is too long and cannot be posted. Please try shortening your message and try again.";
$l['error_message_too_short'] = "מצטערים, ההודעה שלך קצרה מידי ולא תוכל להתפרסם.";
$l['failed_login_wait'] = "You have failed to login within the required number of attempts. You must now wait {1}h {2}m {3}s before you can login again.";
$l['failed_login_again'] = "<br />You have <strong>{1}</strong> more login attempts.";
$l['error_max_emails_day'] = "You cannot use the 'Send Thread to a Friend' or the 'Email User' features because you've already used up your allocated quota of sending {1} messages in the past 24 hours.";
$l['emailsubject_lostpw'] = "איפוס סיסמא ב{1}";
$l['emailsubject_passwordreset'] = "סיסמא חדשה ב{1}";
$l['emailsubject_subscription'] = "תגובה חדשה ל{1}";
$l['emailsubject_randompassword'] = "הסיסמא שלך עבור {1}";
$l['emailsubject_activateaccount'] = "הפעלת משתמש ב{1}";
$l['emailsubject_forumsubscription'] = "אשכול חדש ב{1}";
$l['emailsubject_reportpost'] = "הודעה שדווחה ב{1}";
$l['emailsubject_reachedpmquota'] = "עברת את מכסת ההודעות הפרטיות ב{1}";
$l['emailsubject_changeemail'] = "Change of Email at {1}";
$l['emailsubject_newpm'] = "New Private Message at {1}";
$l['emailsubject_sendtofriend'] = "Interesting Web Page at {1}";
$l['emailbit_viewthread'] = "... (visit the thread to read more..)";
$l['email_lostpw'] = "{1},

To complete the phase of resetting your account password at {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=resetpassword&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=resetpassword

You will need to enter the following:
Username: {1}
Activation Code: {5}

Thank you,
{2} Staff";
$l['email_reportpost'] = "{1} from {2} has reported this post:

{3}
{4}/{5}

The reason this user gave for reporting this post:
{7}

This message has been sent to all moderators of this forum, or all administrators and super moderators if there are no moderators.

Please check this post out as soon as possible.";
$l['email_passwordreset'] = "{1},

Your password at {2} has been reset.

Your new password is: {3}

You will need this password to login to the forums, once you login you should change it by going to your User Control Panel.

Thank you,
{2} Staff";
$l['email_randompassword'] = "{1},

Thank you for registering on {2}. Below is your username and the randomly generated password. To login to {2}, you will need these details.

Username: {3}
Password: {4}

It is recommended you change your password immediately after you login. You can do this by going to your User CP then clicking Change Password on the left menu.

Thank you,
{2} Staff";
$l['email_sendtofriend'] = "Hello,

{1} from {2} thought you may be interested in reading the following web page:

{3}

{1} included the following message:
------------------------------------------
{4}
------------------------------------------

Thank you,
{2} Staff
";
$l['email_forumsubscription'] = "{1},

{2} has just started a new thread in {3}. This is a forum you have subscribed to at {4}.

The thread is titled {5}

Here is an excerpt of the message:
--
{6}
--

To view the thread, you can go to the following URL:
{7}/{8}

There may also be other new threads and replies but you will not receive anymore notifications until you visit the board again.

Thank you,
{4} Staff

------------------------------------------
Unsubscription Information:

If you would not like to receive any more notifications of new threads in this forum, visit the following URL in your browser:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}&my_post_key={10}

------------------------------------------";
$l['email_activateaccount'] = "{1},

To complete the registration process on {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=activate&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=activate

You will need to enter the following:
Username: {1}
Activation Code: {5}

Thank you,
{2} Staff";
$l['email_subscription'] = "{1},

{2} has just replied to a thread which you have subscribed to at {3}. This thread is titled {4}.

Here is an excerpt of the message:
------------------------------------------
{5}
------------------------------------------

To view the thread, you can go to the following URL:
{6}/{7}

There may also be other replies to this thread but you will not receive anymore notifications until you visit the board again.

Thank you,
{3} Staff

------------------------------------------
Unsubscription Information:

If you would not like to receive any more notifications of replies to this thread, visit the following URL in your browser:
{6}/usercp2.php?action=removesubscription&tid={8}&key={9}&my_post_key={10}

------------------------------------------";
$l['email_reachedpmquota'] = "{1},

This is an automated email from {2} to let you know that your Private Messaging inbox has reached its capacity.

One or more users may have tried to send you private messages and were unsuccessful in doing so because of this.

Please delete some of your private messages you currently have stored, remembering to also delete them from the 'Trash Can'.

Thank you,
{2} Staff
{3}";
$l['email_changeemail'] = "{1},

We have received a request on {2} to change your email address (see details below).

Old Email Address: {3}
New Email Address: {4}

If these changes are correct, please complete the validation process on {2} by going to the following URL in your web browser.

{5}/member.php?action=activate&uid={8}&code={6}

If the above link does not work correctly, go to

{5}/member.php?action=activate

You will need to enter the following:
Username: {7}
Activation Code: {6}

If you choose not to validate your new email address your profile will not be updated and will still contain your existing email address.

Thank you,
{2} Staff
{5}";
$l['email_newpm'] = "{1},
		
You have received a new private message on {3} from {2}. To view this message, you can follow this link:

{4}/private.php

Please note that you will not receive any further notifications of new messages until you visit {3}.

You can disable new message notifications on your account options page:

{4}/usercp.php?action=options

Thank you,
{3} Staff
{4}";
$l['email_emailuser'] = "{1},

{2} from {3} has sent you the following message:
------------------------------------------
{5}
------------------------------------------

Thank you,
{3} Staff
{4}

------------------------------------------
Don't want to receive email messages from other members?

If you don't want other members to be able to email you please visit your User Control Panel and enable the option 'Hide your email from other members':
{4}/usercp.php?action=options

------------------------------------------";
$l['nav_helpdocs'] = "מסמכי עזרה";
$l['nav_smilies'] = "רשימת סמיילים";
$l['nav_syndication'] = "סינדיקציית אשכול אחרונה (RSS)";
$l['aol_im'] = "AOL IM";
$l['msn'] = "MSN Messenger";
$l['yahoo_im'] = "Yahoo IM";
$l['msn_messenger_center'] = "מרכז MSN Messenger";
$l['msn_address_is'] = "כתובת הMSN Messenger של {1}:";
$l['yahoo_center'] = "מרכז Yahoo!";
$l['send_y_message'] = "שלח ל{1} הודעת Yahoo!.";
$l['view_y_profile'] = "הצג את הפרופיל Yahoo! של {1}.";
$l['aim_center'] = "מרכז AOL IM";
$l['download_aim'] = "הורד AIM";
$l['aim_remote'] = "AIM מרוחק";
$l['send_me_instant'] = "שלח לי הודעה מיידית";
$l['add_me_buddy_list'] = "הוסף אותי לרשימת החברים שלך";
$l['add_remote_to_page'] = "Add Remote to Your Page";
$l['download_aol_im'] = "הורד AOL מסרים מידיים";
$l['buddy_list'] = "רשימת חברים";
$l['online'] = "מחובר";
$l['offline'] = "מנותק";
$l['delete_buddy'] = "X";
$l['pm_buddy'] = "שלח הודעה פרטית";
$l['last_active'] = "<strong>פעיל לאחרונה:</strong> {1}";
$l['close'] = "סגור";
$l['no_buddies'] = "<em>רשימת החברים שלך ריקה כרגע. השתמש בלוח הבקרה למשתמש או בפרופילי משתמשים על מנת להוסיף משתמשים לרשימת החברים שלך.</em>";
$l['help_docs'] = "מסמכי עזרה";
$l['smilies_listing'] = "רשימת סמיילים";
$l['name'] = "שם";
$l['abbreviation'] = "Abbreviation";
$l['click_to_add'] = "לחץ על סמיילי כדי להוסיף אותו להודעתך";
$l['close_window'] = "סגור חלון";
$l['who_posted'] = "מי פרסם?";
$l['total_posts'] = "סך הכל הודעות:";
$l['user'] = "משתמש";
$l['num_posts'] = "# הודעות";
$l['forum_rules'] = "כללי {1}";
$l['error_invalid_limit'] = "הגבלת ערוץ שהזנת לא חוקית. אנא ציין הגבלה חוקית.";
$l['syndication'] = "סינדיקציית אשכול אחרונה";
$l['syndication_generated_url'] = "כתובת הסינדיקציה שלך:";
$l['syndication_note'] = "למטה תוכל לייצר קישור לערוץ RSS ספציפי. קישורים יכולים להיווצר עבור כל הפורומים,פורום מסויים ופורומים מסויימים. לאחר מכן יוצג לך קישור לערוץ RSS בו תוכל להשתמש בתוכנה לקריאת RSS למשל <a href=\"http://www.sharpreader.net/\">SharpReader</a>. <i><a href=\"http://www.xml.com/pub/a/2002/12/18/dive-into-xml.html\">מה זה RSS?</a></i>";
$l['syndication_forum'] = "פורום לסינכרון:";
$l['syndication_forum_desc'] = "אתה בחר פורום משמאל. השתמש בCTRL כדי לבחור מספר רב של פורומים.";
$l['syndication_version'] = "גירסאת ערוץ:";
$l['syndication_version_desc'] = "אנא בחר את גירסאת הערוץ שאתה רוצה לייצר.";
$l['syndication_version_atom1'] = "Atom 1.0";
$l['syndication_version_rss2'] = "RSS 2.00 (ברירת מחדל)";
$l['syndication_generate'] = "ייצר כתובת סינדיקצייה";
$l['syndication_limit'] = "הגבלה:";
$l['syndication_limit_desc'] = "סכום האשכולות שברצונך להוריד בכל פעם. לא מומלץ מעל ל50.";
$l['syndication_threads_time'] = "אשכולות בכל פעם";
$l['syndicate_all_forums'] = "סנכרן את כל הפורומים";
$l['redirect_markforumread'] = "הפורומים שנבחר סומן שכנקרא.";
$l['redirect_markforumsread'] = "כל הפורומים סומנו כנקראו.";
$l['redirect_forumpasscleared'] = "הסיסמא השמורה לפורום זה נוקתה.";
$l['redirect_cookiescleared'] = "כל העוגיות נמחקו.";
$l['error_invalidimtype'] = "למשתמש זה אין שום משתמש הודעות מידיות שהוא ציין בפרופיל שלו.";
$l['error_invalidhelpdoc'] = "קובץ העזרה שצויין לא קיים.";
$l['error_invalidkey'] = "You could not be verified to clear cookies.  This may have been because a malicious Javascript was attempting to clear your cookies automatically. If you intended to clear your cookies, please view the \"Use of Cookies on MyBB\" help document.";
$l['dst_settings_updated'] = "הגדרות שעון הקיץ שלך הוגדרו באופן אוטומטי.<br /><br />אתה מועבר כעת חזרה לדף הראשי של הפורום.";
?>