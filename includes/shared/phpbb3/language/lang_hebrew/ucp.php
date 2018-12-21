<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'בעת הגישה אל “%1$s” (להלן “אנחנו”, “אותנו”, “שלנו”, “%1$s”, “%2$s”), אתה מסכים לציית לתנאים הבאים. אם אינך מסכים לציית לכל התנאים הבאים, אנא אל תיגש ו/או תשתמש ב־“%1$s”. אנו יכולים לשנות תנאים אלו בכל זמן נתון ונשקיע את מירב מאמצינו כדי לידע אותך, אך יהיה זה נבון מצידך לסקור תנאים אלו בקביעות כחלק מהשימוש המתמשך ב־“%1$s”. לאחר שינויים אתה מסכים לציית לתנאים אלו כאשר הם מעודכנים ו/או מתוקנים.<br />
	<br />
	הפורומים שלנו מבוססים על phpBB (להלן “הם”, “אותם”, “שלהם”, “מערכת phpBB”, “www.phpbb.co.il”, “קבוצת phpBB”, “צוות phpBB הישראלי”) אשר הינה מערכת בולטיין המשוחררת תחת הסכם “<a href="http://www.opensource.org/licenses/gpl-2.0.php">רישיון ציבורי כללי v2</a>” (להלן “GPL”) וניתנת להורדה דרך אתר <a href="http://www.phpbb.co.il/">www.phpbb.co.il</a>. מערכת phpBB מקלה על האינטרנט המבוסס דיונים בלבד, קבוצת phpBB אינה אחראית לכל מה שאנו מאפשרים ו/או לא מאפשרים בתור תוכן מורשה ו/או מנוהל. למידע נוסף לגבי phpBB, ראה: <a href="http://www.phpbb.co.il/">http://www.phpbb.co.il/</a>.<br />
	<br />
	אתה מסכים לא לשלוח דברים גסים, גזעניים, אלימים, פוגעים, בלתי חוקיים או כל חומר אחר אשר שנוי במחלוקת במדינה שלך, במדינה בה “%1$s” מאוחסנת או בחוק הבינלאומי. אם תעשה זאת תוביל את עצמך לחסימה מיידית ולצמיתות, עם הודעה לספק שירות האינטרנט אם זה יראה לנו דרוש. כתובות ה־IP של כל ההודעות נשמרות כדי לעזור בכפיית תנאים אלו. אתה מסכים של “%1$s” יש את הזכות להסיר, לערוך, להעביר או לסגור כל נושא בכל זמן נתון הנראה לנו מתאים. בתור משתמש אתה מסכים שכל המידע אשר אתה מזין יאוחסן בבסיס הנתונים. בעוד שמידע זה לא ייחשף לשום צד שלישי ללא הסכמתך, לא “%1$s” ולא phpBB ישאו באחריות לכל ניסיון פריצה אשר יכול להוסיף לחשיפת המידע.
	',

	'PRIVACY_POLICY'		=> 'הסכם זה מסביר בפירוט כיצד “%1$s” יחד עם החברות הקשורות אליה (להלן “אנחנו”, “אותנו”, “שלנו”, “%1$s”, “%2$s”) ו־phpBB (להלן “הם”, “אותם”, “שלהם”, “מערכת phpBB”, “www.phpbb.co.il”, “קבוצת phpBB”, “צוות phpBB הישראלי”) משתמשים בכל מידע אשר נאסף במשך כל חיבור בשימוש שלך (להלן “המידע שלך”).<br />
	<br />
	המידע שלך נאסף בעזרת שתי דרכים. ראשונה, הגלישה אל “%1$s” תגרום למערכת phpBB ליצור מספר של עוגיות, אשר הם קבצי טקסט קטנים אשר מאוחסנים בתיקיית הקבצים הזמניים של דפדפן האינטרנט של המחשב שלך. שתי העוגיות הראשונות מכילות רק זיהות משתמש (להלן “זיהוי משתמש”) וזיהוי חיבור אנונימי (להלן “זיהוי חיבור”), הנקבעים אצל באופן אוטומטי על־ידי מערכת phpBB. עוגייה שלישית תיווצר לאחר שעיינת בנושאים ב־“%1$s” ובשימוש כדי לסמן את הנושאים אשר נקראו, כדי לשפר את הנאת השימוש.<br />
	<br />
	אנו יכולים גם ליצור עוגיות אשר אינן קשורות למערכת phpBB בזמן הגלישה ב־“%1$s”, אך הן מחוץ להיקף מסמך זה אשר מיועד לכסות על העמודים אשר נוצרו על־ידי מערכת phpBB בלבד. הדרך השנייה בה אנו אוספים את המידע שלך היא על־ידי מה שאתה שולח לנו. זה יכול להיות, ואינו מוגבל ל: שליחה בתור אורח (להלן “הודעות אנונימיות”), הרשמה ל־“%1$s” (להלן “החשבון שלך”) והודעות אשר נרשמו על־ידיך לאחר הרשמתך ובעודך מחובר (להלן “ההודעות שלך”).<br />
	<br />
	החשבון שלך יהיה בחשיפה מינימלית המכיל שם זיהוי ייחודי (להלן “שם המשתמש שלך”), ססמה אישית אשר בשימוש להתחברות לחשבון שלך (להלן “הססמה שלך”) וכתובת דואר אלקטרוני אישית וחוקית (להלן “הדואר האלקטרוני שלך”). המידע שלך לחשבון שלך ב־“%1$s” מוגן על־ידי חוקי הגנת נתונים המיושמים במדינה אשר מאחסנת אותנו. כל מידע מעבר לשם המשתמש שלך, הססמה שלך וכתובת הדואר האלקטרוני שלך הנדרש על־ידי “%1$s” במשך תהליך ההרשמה הנו חובה או רשות, לפי ההחלטה של “%1$s”. בכל המקרים, יש לך את האפשרות של איזה מידע בחשבונך יוצג לציבור. יותך מכך, בתוך החשבון שלך, יש לך את האפשרות לבחור או לבטל הודעות דואר אלקטרוני אשר נוצרות באופן אוטומטי על־ידי מערכת phpBB.<br />
	<br />
	הססמה שלך מוצפנת (הצפנה לכיוון אחד) כך שהיא מאובטחת. עם זאת, מומלץ שאתה לא תבצע שימוש חוזר באותה הססמה במספר אתרים שונים. הססמה שלך היא האמצעי לגישה לחשבון שלך ב־“%1$s”, אז אנא שמור עליה בבטחה ותחת שום מצב שבו מישהו הקשור ל־“%1$s”, phpBB או כל צד שלישי אחר, יבקש את ססמתך בדרך לא חוקית. אם תשכח את הססמה לחשבון שלך, תוכל להשתמש במאפיין “שכחתי את ססמתי” המסופק על־ידי מערכת phpBB. תהליך זה יבקש ממך להזין את שם המשתמש שלך והדואר האלקטרוני שלך, לאחר מכן מערכת phpBB תיצור ססמה חדשה כדי להשיב את חשבונך.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'חשבונך הופעל. תודה שנרשמת.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'החשבון הופעל.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'חשבונך הופעל מחדש בהצלחה.',
	'ACCOUNT_ADDED'					=> 'תודה שנרשמת, חשבונך נוצר. תוכל להתחבר כעת עם שם המשתמש והססמה שלך.',
	'ACCOUNT_COPPA'					=> 'חשבונך נוצר אבל צריך לקבל אישור, בדוק את תיבת הדואר האלקטרוני שלך לפרטים נוספים.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'חשבונך עודכן, אך המערכת דורשת הפעלת חשבון מחדש בעת שינוי דואר אלקטרוני. קישור להפעלה נשלח לכתובת הדואר האלקטרוני שסיפקת. בדוק את תיבת הדואר האלקטרוני שלך לפרטים נוספים.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'חשבונך עודכן, אך המערכת דורשת הפעלת חשבון מחדש על־ידי מנהל ראשי בעת שינוי דואר אלקטרוני. הודעה נשלחה אל המנהלים הראשיים ואתה תקבל הודעה כאשר חשבונך יופעל מחדש.',
	'ACCOUNT_INACTIVE'				=> 'חשבונך נוצר, אך המערכת דורשת הפעלת חשבון, קישור להפעלה נשלח לתיבת הדואר האלקטרוני שסיפקת. בדוק את תיבת הדואר האלקטרוני שלך לפרטים נוספים בנוסף מומלץ לבדוק בדואר הזבל. ייתכן ויקח זמן לקבלת הדואר האלקטרוני כתלות בספק הדואר האלקטרוני שלך.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'חשבונך נוצר, אך המערכת דורשת הפעלת חשבון על־ידי מנהל ראשי. הודעה נשלחה אל המנהלים הראשיים ואתה תקבל הודעה כאשר חשבונך יופעל.',
	'ACTIVATION_EMAIL_SENT'			=> 'הדואר האלקטרוני שמכיל את קישור ההפעלה נשלח אל תיבת הדואר שלך.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'הדואר האלקטרוני שמכיל את קישור ההפעלה נשלח אל תיבת הדואר של המנהלים הראשיים.',
	'ADD'							=> 'הוסף',
	'ADD_BCC'						=> 'הוסף [מקור חסוי]',
	'ADD_FOES'						=> 'הוספת נודניקים חדשים',
	'ADD_FOES_EXPLAIN'				=> 'תוכל להזין כמה שמות משתמשים בשורות נפרדות.',
	'ADD_FOLDER'					=> 'הוספת תיקייה',
	'ADD_FRIENDS'					=> 'הוספת חברים חדשים',
	'ADD_FRIENDS_EXPLAIN'			=> 'אתה יכול להזין כמה שמות משתמשים בשורות נפרדות.',
	'ADD_NEW_RULE'					=> 'הוספת כלל חדש',
	'ADD_RULE'						=> 'הוסף כלל',
	'ADD_TO'						=> 'הוסף [נמען]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'כאן אתה יכול לצרף משתמשים חדשים לקבוצה. אתה יכול לבחור שקבוצה זו תהפוך לקבוצת ברירת המחדל למשתמשים הנבחרים. אנא הכנס כל שם משתמש בשורה חדשה.',
	'ADMIN_EMAIL'					=> 'מנהלים ראשיים יכולים לשלוח אלי מידע',
	'AGREE'							=> 'אני מסכים לתנאים אלו',
	'ALLOW_PM'						=> 'אפשר למשתמשים לשלוח אליך הודעות פרטיות',
	'ALLOW_PM_EXPLAIN'				=> 'שים לב שמנהלים ראשיים ומנהלים יוכלו תמיד לשלוח אליך הודעות.',
	'ALREADY_ACTIVATED'				=> 'כבר הפעלת את חשבונך.',
	'ATTACHMENTS_EXPLAIN'			=> 'זוהי רשימת הקבצים אשר צירפת להודעות בפורומים.',
	'ATTACHMENTS_DELETED'			=> 'הקבצים המצורפים נמחקו בהצלחה.',
	'ATTACHMENT_DELETED'			=> 'הקובץ המצורף נמחק בהצלחה.',
	'AUTOLOGIN_SESSION_KEYS_DELETED'=> 'מפתחות הכניסה האוטומטית שנבחרו נמחקו בהצלחה.',
	'AVATAR_CATEGORY'				=> 'קטגוריה',
	'AVATAR_DRIVER_GRAVATAR_TITLE'	=> 'Gravatar',
	'AVATAR_DRIVER_GRAVATAR_EXPLAIN'=> 'Gravatar הוא שירות המאפשר לך לשמור את אותו סמל אישי על פני מספר אתרי אינטרנט. בקר ב-<a href="http://www.gravatar.com/">Gravatar</a> לקבלת מידע נוסף.',
	'AVATAR_DRIVER_LOCAL_TITLE'		=> 'גלרית סמלים אישיים',
	'AVATAR_DRIVER_LOCAL_EXPLAIN'	=> 'אתה יכול לבחור את הסמל האישי שלך מאוסף מקומי של סמלים אישיים.',
	'AVATAR_DRIVER_REMOTE_TITLE'	=> 'סמל אישי מרוחק',
	'AVATAR_DRIVER_REMOTE_EXPLAIN'	=> 'קשר לסמלים אישיים מאתר אחר.',
	'AVATAR_DRIVER_UPLOAD_TITLE'	=> 'העלאת סמל אישי',
	'AVATAR_DRIVER_UPLOAD_EXPLAIN'	=> 'העלה את הסמל האישי שלך.',
	'AVATAR_EXPLAIN'				=> 'ממדים מירביים; רוחב: %1$s, גובה: %2$s, גודל קובץ: %3$.2f KiB.',
	'AVATAR_EXPLAIN_NO_FILESIZE'	=> 'Maximum dimensions; width: %1$s, height: %2$s.',
	'AVATAR_FEATURES_DISABLED'		=> 'אפשרות הסמל האישי כבויה כרגע.',
	'AVATAR_GALLERY'				=> 'גלריה מקומית',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'לא ניתן להעלות סמל אישי אל %s.',
	'AVATAR_NOT_ALLOWED'			=> 'לא ניתן להציג את הסמל האישי שלך מכיוון שסמלים אישיים נהפכו ללא מורשים.',
	'AVATAR_PAGE'					=> 'עמוד',
	'AVATAR_SELECT'					=> 'בחר את הסמל האישי שלך',
	'AVATAR_TYPE'					=> 'סוג הסמל האישי',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'לא ניתן להציג את הסמל האישי הנוכחי שלך בגלל שסוגו נהפך ללא מורשה.',

	'BACK_TO_DRAFTS'			=> 'חזור לטיוטות השמורות',
	'BACK_TO_LOGIN'				=> 'חזור למסך ההתחברות',
	'BIRTHDAY'					=> 'יום הולדת',
	'BIRTHDAY_EXPLAIN'			=> 'הגדרת השנה תרשום את גילך בזמן יום ההולדת שלך.',
	'BOARD_DATE_FORMAT'			=> 'תבנית התאריך שלי',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'התחביר שבשימוש זהה לפונקציית ה־PHP <a href="http://www.php.net/date">date()</a>.',
	'BOARD_LANGUAGE'			=> 'השפה שלי',
	'BOARD_STYLE'				=> 'עיצוב המערכת שלי',
	'BOARD_TIMEZONE'			=> 'אזור הזמן שלי',
	'BOOKMARKS'					=> 'מועדפים',
	'BOOKMARKS_EXPLAIN'			=> 'אתה יכול לסמן נושאים כמועדפים לשימוש עתידי. בחר בתיבת הסימון של כל פריט מועדף אשר אתה מעוניין למחוק, ולחץ על הכפתור <em>הסר פריטי מועדפים מסומנים</em>.',
	'BOOKMARKS_DISABLED'		=> 'אפשרות המועדפים כבויה במערכת זו.',
	'BOOKMARKS_REMOVED'			=> 'פריטי המועדפים הוסרו בהצלחה.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'אתה לא יכול לערוך או למחוק יותר הודעה זו.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'לא ניתן להעביר הודעות אל התיקייה אשר אתה מעוניין למחוק.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'לא ניתן להעביר הודעות מתיבת הדואר היוצא.',
	'CANNOT_RENAME_FOLDER'		=> 'לא ניתן לשנות את שם התיקייה הזו.',
	'CANNOT_REMOVE_FOLDER'		=> 'לא ניתן להסיר את התיקייה הזו.',
	'CHANGE_DEFAULT_GROUP'		=> 'שנה קבוצה כברירת מחדל',
	'CHANGE_PASSWORD'			=> 'שנה ססמה',
	'CLICK_GOTO_FOLDER'			=> '%1$sעבור לתיקיית “%3$s” שלך%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sחזור לתיקיית “%3$s” שלך%2$s',
	'CONFIRMATION'				=> 'אישור הרשמה',
	'CONFIRM_CHANGES'			=> 'אישור שינויים',
	'CONFIRM_EXPLAIN'			=> 'כדי להימנע מהרשמות אוטומטיות, המערכת דורשת ממך להזין קוד אישור. הקוד מוצג בתמונה אשר אתה אמור לראות להלן. אם אינך מצליח לקרוא את הקוד מכל סיבה שהיא, צור קשר עם %sהמנהל הראשי%s.',
	'VC_REFRESH'				=> 'רענן קוד אישור',
	'VC_REFRESH_EXPLAIN'		=> 'אם אינך מצליח לקרוא את הקוד תוכל לבקש אחד חדש בעזרת לחיצה על הכפתור.',

	'CONFIRM_PASSWORD'			=> 'אישור ססמה',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'אתה צריך לאשר את ססמתך אם שינית את הקודמת בלבד.',
	'COPPA_BIRTHDAY'			=> 'כדי להמשיך בתהליך ההרשמה, אנא ספר לנו מתי נולדת.',
	'COPPA_COMPLIANCE'			=> 'התאמת COPPA',
	'COPPA_EXPLAIN'				=> 'שים לב שלחיצה על שלח תיצור את חשבונך, אך הוא לא יופעל עד שהורה או אפוטרופוס יאשר את הרשמתך. ישלח אליך עותק של הטופס הנדרש כולל פרטים לגבי כתובת הנמען.',
	'CREATE_FOLDER'				=> 'הוסף תיקייה…',
	'CURRENT_IMAGE'				=> 'תמונה נוכחית',
	'CURRENT_PASSWORD'			=> 'ססמה נוכחית',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'אתה חייב להזין את ססמתך הנוכחית אם ברצונך לשנות את כתובת הדואר האלקטרוני שלך או את שם המשתמש.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'על מנת לשנות את ססמתך, כתובת הדואר האלקטרוני שלך, או שם המשתמש שלך, אתה חייב להזין את ססמתך הנוכחית.',
	'CUR_PASSWORD_EMPTY'		=> 'לא הזנת את הססמה הנוכחית.',
	'CUR_PASSWORD_ERROR'		=> 'הססמה הנוכחית שהזנת שגויה.',
	'CUSTOM_DATEFORMAT'			=> 'מותאם אישית…',

	'DEFAULT_ACTION'			=> 'פעולה כברירת מחדל',
	'DEFAULT_ACTION_EXPLAIN'	=> 'פעולה זו תתבצע אם אף אחד מהקודמות ברות-ישום.',
	'DEFAULT_ADD_SIG'			=> 'צרף את החתימה שלי כברירת מחדל',
	'DEFAULT_BBCODE'			=> 'הפעל BBCode כברירת מחדל',
	'DEFAULT_NOTIFY'			=> 'הודע לי בעת תגובות כברירת מחדל',
	'DEFAULT_SMILIES'			=> 'הפעל סמיילים כברירת מחדל',
	'DEFINED_RULES'				=> 'כללים מוגדרים',
	'DELETED_TOPIC'				=> 'הנושא הוסר.',
	'DELETE_ATTACHMENT'			=> 'מחק קובץ מצורף',
	'DELETE_ATTACHMENTS'		=> 'מחק קבצים מצורפים',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'אתה בטוח שאתה רוצה למחוק קובץ מצורף זה?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'אתה בטוח שאתה רוצה למחוק קבצים מצורפים אלו?',
	'DELETE_AVATAR'				=> 'מחק תמונה',
	'DELETE_COOKIES_CONFIRM'	=> 'אתה בטוח שאתה רוצה למחוק את כל העוגיות אשר נקבעו על־ידי המערכת?',
	'DELETE_MARKED_PM'			=> 'מחק הודעות מסומנות',
	'DELETE_MARKED_PM_CONFIRM'	=> 'אתה בטוח שאתה רוצה למחוק את כל ההודעות המסומנות?',
	'DELETE_OLDEST_MESSAGES'	=> 'מחק הודעות ישנות יותר',
	'DELETE_MESSAGE'			=> 'מחק הודעה',
	'DELETE_MESSAGE_CONFIRM'	=> 'אתה בטוח שאתה רוצה למחוק הודעה פרטית זו?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'מחק את כל ההודעות בתוך התיקייה שהוסרה',
	'DELETE_RULE'				=> 'מחק כלל',
	'DELETE_RULE_CONFIRM'		=> 'אתה בטוח שאתה רוצה למחוק כלל זה?',
	'DEMOTE_SELECTED'			=> 'בטל נבחרים',
	'DISABLE_CENSORS'			=> 'הפעלת צנזור מילים',
	'DISPLAY_GALLERY'			=> 'הצג גלריה',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'כתובת הדואר האלקטרוני שהוזנה אינה בעלת רשומת MX חוקית.',
	'DOWNLOADS'					=> 'הורדות',
	'DRAFTS_DELETED'			=> 'כל הטיוטות הנבחרות הוסרו בהצלחה.',
	'DRAFTS_EXPLAIN'			=> 'כאן אתה יכול לראות, לערוך ולמחוק את הטיוטות השמורות שלך.',
	'DRAFT_UPDATED'				=> 'הטויטה עודכנה בהצלחה.',

	'EDIT_DRAFT_EXPLAIN'		=> 'כאן אתה יכול לערוך את הטיוטה שלך. הטיוטות אינן מכילות קבצים מצורפים ופרטי סקר.',
	'EMAIL_BANNED_EMAIL'		=> 'כתובת הדואר האלקטרוני שהזנת אינה מורשת לשימוש.',
	'EMAIL_REMIND'				=> 'כתובת הדואר האלקטרוני חייבת להיות אותה הכתובת המשותפת עם החשבון שלך. אם אינך שינית אותה דרך לוח הבקרה למשתמש שלך אז זו אותה הכתובת אשר רשמת איתה את חשבונך.',
	'EMAIL_TAKEN_EMAIL'			=> 'כתובת הדואר האלקטרוני שהוזנה כבר בשימוש.',
	'EMPTY_DRAFT'				=> 'אתה חייב להזין הודעה כדי לשלוח את השינויים שלך.',
	'EMPTY_DRAFT_TITLE'			=> 'אתה חייב להזין כותרת לטיוטה.',
	'EXPORT_AS_XML'				=> 'יצא בתור XML',
	'EXPORT_AS_CSV'				=> 'יצא בתור CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'יצא בתור CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'יצא בתור TXT',
	'EXPORT_AS_MSG'				=> 'יצא בתור MSG',
	'EXPORT_FOLDER'				=> 'יצא תצוגה זו',

	'FIELD_REQUIRED'					=> 'השדה “%s” חייב להיות שלם.',
	'FIELD_TOO_SHORT'					=> array(
		1	=> 'The field “%2$s” is too short, a minimum of %1$d character is required.',
		2	=> 'The field “%2$s” is too short, a minimum of %1$d characters is required.',
	),
	'FIELD_TOO_LONG'					=> array(
		1	=> 'The field “%2$s” is too long, a maximum of %1$d character is allowed.',
		2	=> 'The field “%2$s” is too long, a maximum of %1$d characters is allowed.',
	),
	'FIELD_TOO_SMALL'								=> 'הערך של “%2$s” קטן מידי, לפחות %1$d תווים נדרשים.',
	'FIELD_TOO_LARGE'								=> 'הערך של “%2$s” גדול מידי, ערך מירבי של %1$d תווים מורשים.',
	'FIELD_INVALID_CHARS_INVALID'					=> 'השדה "%s" מכיל תווים לא חוקיים.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'				=> 'השדה “%s” מכיל תווים לא חוקיים, מספרים בלבד מורשים.',
	'FIELD_INVALID_CHARS_ALPHA_DOTS'				=> 'השדה "%s" מכיל תווים לא חוקיים, רק תווים אלפאנומריים או נקודות מותרים.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'				=> 'השדה “%s” מכיל תווים לא חוקיים, תווי אותיות בלבד מורשים.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'			=> 'השדה "%s" מכיל תווים לא חוקיים, רק תווים אלפאנומריים או _,-. מותרים והתו הראשון חייב להיות אלפביתי.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'				=> 'השדה "%s" מכיל תווים לא חוקיים, רק תווים אלפאנומריים, רווחים או -+_[] מותרים.',
		'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'			=> 'השדה “%s” מכיל תווים לא מותרים, רק תווים אותיות ו_ מותרים לשימוש.',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'			=> 'השדה “%s” מכיל תווים לא מותרים, רק אותיות מספרים ו. מותרים לשימוש.',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'			=> 'השדה “%s” מכיל תווים לא מותרים,רק אותיות ומספרים מותרים לשימוש.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> 'השדה “%s”מכיל תווים לא חוקיים,רק אותיות מספרים ו _,-. הם תווים חוקיים, והאות הראשונה חייבת להיות אלפביתית.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> 'השדה “%s” מכיל תווים לא מותרים, רק אותיות מספרים ורווחים ו -+_[] הם תווים מותרים.',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> 'השדה “%s” מכיל תווים לא מותרים, רק אותיות מספרים ו _ מותרים בשימוש.',
	'FIELD_INVALID_DATE'							=> 'השדה “%s” מכיל תאריך לא חוקי.',
	'FIELD_INVALID_URL'								=> 'השדה "%s" מכיל כתובת אתר לא חוקית.',
	'FIELD_INVALID_VALUE'							=> 'השדה “%s” מכיל ערך לא חוקי.',

	'FOE_MESSAGE'				=> 'הודעה מנודניק',
	'FOES_EXPLAIN'				=> 'נודניקים הם משתמשים אשר אתה מתעלם מהם כברירת מחדל. הודעות אשר נשלחות על-ידי משתמשים אלו לא יוצגו לגמרי. הודעות פרטיות מהנודניקים עדיין מותרות. שים לב שאתה לא יכול להתעלם ממנהלים או מנהלים ראשיים.',
	'FOES_UPDATED'				=> 'רשימת הנודניקים שלך עודכנה בהצלחה.',
	'FOLDER_ADDED'				=> 'התיקיה נוספה בהצלחה.',
	'FOLDER_MESSAGE_STATUS'		=> array(
		1	=> '%2$d מתוך %1$s מאוחסן',
		2	=> '%2$d מתוך %1$s מאוחסן',
	),
	'FOLDER_NAME_EMPTY'			=> 'אתה חייב להזין שם לתיקיה זו.',
	'FOLDER_NAME_EXIST'			=> 'התיקייה <strong>%s</strong> כבר קיימת.',
	'FOLDER_OPTIONS'			=> 'אפשרויות תיקייה',
	'FOLDER_RENAMED'			=> 'שם התיקייה שונה בהצלחה.',
	'FOLDER_REMOVED'			=> 'התיקייה הוסרה בהצלחה.',
	'FOLDER_STATUS_MSG'			=> array(
		1	=> 'התיקייה %3$d%% מלאה (%2$d מתוך %1$s מאוחסנות)',
		2	=> 'התיקייה %3$d%% מלאה (%2$d מתוך %1$s מאוחסנות)',
	),
	'FORWARD_PM'				=> 'העבר הודעה פרטית',
	'FORCE_PASSWORD_EXPLAIN'	=> 'לפני שתוכל להמשיך לגלוש במערכת אתה נדרש לשנות את סיסמתך.',
	'FRIEND_MESSAGE'			=> 'הודעה מחבר',
	'FRIENDS'					=> 'חברים',
	'FRIENDS_EXPLAIN'			=> 'חברים מאפשרים לך גישה מהירה למשתמשים אשר איתם אתה משוחח בקביעות. אם לעיצוב המערכת יש את התמיכה הנדרשת, כל הודעות אשר נשלחות על-ידי חברים יודגשו.',
	'FRIENDS_OFFLINE'			=> 'מנותק',
	'FRIENDS_ONLINE'			=> 'מחובר',
	'FRIENDS_UPDATED'			=> 'רשימת החברים שלך עודכנה בהצלחה.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'הפעולה לביצוע כאשר תיקיה מלאה שונתה בהצלחה.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- הודעה מקורית --------',
	'FWD_SUBJECT'				=> 'נושא: %s',
	'FWD_DATE'					=> 'תאריך: %s',
	'FWD_FROM'					=> 'מאתר: %s',
	'FWD_TO'					=> 'אל: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'הכרזה כללית',

	'GRAVATAR_AVATAR_EMAIL'			=> 'דוא"ל ה-Gravatar',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN'	=> 'הזן את כתובת הדוא"ל שבה השתמש לרישום החשבון שלך ב-<a href="http://www.gravatar.com/">Gravatar</a>.',
	'GRAVATAR_AVATAR_SIZE'			=> 'מימדי הסמל האישי',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'	=> 'ציין את הרוחב והגובה של הסמל האישי, השאר ריק כדי לבצע בדיקה אוטומטית של המימדים.',

	'HIDE_ONLINE'				=> 'הסתר את מצב החיבור שלי',
	'HIDE_ONLINE_EXPLAIN'		=> 'שינוי הגדרה זו לא תפעל עד ביקורך הבא במערכת.',
	'HOLD_NEW_MESSAGES'			=> 'אל תקבל הודעות חדשות (הודעות חדשות יהיו בהמתנה עד אשר יהיה מספיק מקום)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'הודעות חדשות יהיו בהמתנה',

	'IF_FOLDER_FULL'			=> 'אם התיקיה מלאה',
	'IMPORTANT_NEWS'			=> 'הכרזות חשובות',
	'INVALID_USER_BIRTHDAY'         => 'תאריך יום ההולדת שהוזן אינו תיקני.',
	'INVALID_CHARS_USERNAME'	=> 'שם המשתמש מכיל תווים אסורים.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'הסיסמה אינה מכילה את התווים הנדרשים.',
	'ITEMS_REQUIRED'			=> 'הפריטים המסומנים עם * הינם שדות פרופיל נדרשים וחייבים לקבל ערכים.',

	'JOIN_SELECTED'				=> 'צרף נבחרים',

	'LANGUAGE'					=> 'שפה',
	'LINK_REMOTE_AVATAR'			=> 'קישור לאתר חיצוני',
	'LINK_REMOTE_AVATAR_EXPLAIN'	=> 'הזן את כתובת המיקום המכיל את תמונת הסמל האישי אשר אתה מעוניין לקשר.',
	'LINK_REMOTE_SIZE'				=> 'ממדי סמל אישי',
	'LINK_REMOTE_SIZE_EXPLAIN'		=> 'ציין את הרוחב והגובה של הסמל האישי, השאר ריק כדי לנסות לבדוק אוטומטית.',
	'LOGIN_EXPLAIN_UCP'				=> 'נא התחבר כדי לגשת ללוח הבקרה למשתמש.',
	'LOGIN_LINK'					=> 'קשר או רשום את החשבון שלך בשירות חיצוני עם חשבון המערכת שלך',
	'LOGIN_LINK_EXPLAIN'			=> 'ניסית להתחבר באמצעות שירות חיצוני שאינו מקושר עדיין לחשבונך במערכת זו. כעת עליך לקשר חשבון זה לחשבון קיים או ליצור חשבון חדש.',
	'LOGIN_LINK_MISSING_DATA'		=> 'נתונים שהכרחיים לביצוע הקישור של החשבון שלך עם שירות חיצוני אינם זמינים. נסה מחדש את תהליך הכניסה.',
	'LOGIN_LINK_NO_DATA_PROVIDED'	=> 'לא סופקו נתונים לדף זה כדי לקשר חשבון חיצוני לחשבון מערכת פורומים זו. אנא צור קשר עם המנהל הראשי של המערכת אם אתה ממשיך להיתקל בבעיות.',
	'LOGIN_KEY'					=> 'מפתח כניסה',
	'LOGIN_TIME'				=> 'זמן התחברות',
	'LOGIN_REDIRECT'				=> 'התחברת בהצלחה.',
	'LOGOUT_FAILED'					=> 'אינך מנותק, מפני שהבקשה אינה התאימה לחיבור שלך. צור קשר עם המנהל הראשי אם אתה ממשיך להיתקל בבעיות.',
	'LOGOUT_REDIRECT'				=> 'התנתקת בהצלחה.',

	'MARK_IMPORTANT'				=> 'סמן/בטל סימון כחשוב',
	'MARKED_MESSAGE'				=> 'הודעה מסומנת',
	'MAX_FOLDER_REACHED'			=> 'המספר המרבי המורשה של תיקיות המוגדרות על־ידי המשתמש התקבל.',
	'MESSAGE_BY_AUTHOR'				=> 'על־ידי',
	'MESSAGE_COLOURS'				=> 'צבעי הודעה',
	'MESSAGE_DELETED'				=> 'ההודעה נמחקה בהצלחה.',
	'MESSAGE_EDITED'				=> 'ההודעה נערכה בהצלחה.',
	'MESSAGE_HISTORY'				=> 'היסטורית ההודעה',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'הודעה זו נמחקה על ידי הכותב שלה.',
	'MESSAGE_SENT_ON'				=> 'ב',
	'MESSAGE_STORED'				=> 'ההודעה נשלחה בהצלחה.',
	'MESSAGE_TO'					=> 'אל',
	'MESSAGES_DELETED'				=> 'ההודעות נמחקו בהצלחה',
	'MOVE_DELETED_MESSAGES_TO'		=> 'העבר הודעות מהתיקייה שהוסרה אל',
	'MOVE_DOWN'						=> 'העבר למטה',
	'MOVE_MARKED_TO_FOLDER'			=> 'העבר מסומנים אל %s',
	'MOVE_PM_ERROR'					=> array(
		1	=> 'אירעה שגיאה בעת העברת ההודעה לתיקייה החדשה, רק %2$d מתוך %1$s הועברה.',
		2	=> 'אירעה שגיאה בעת העברת ההודעות לתיקייה החדשה, רק %2$d מתוך %1$s הועברו.',
	),
	'MOVE_TO_FOLDER'				=> 'העבר לתיקייה',
	'MOVE_UP'						=> 'העבר למעלה',

	'NEW_FOLDER_NAME'				=> 'השם החדש לתיקייה',
	'NEW_PASSWORD'					=> 'ססמה חדשה',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'לא הזנת את הססמה בשנית.',
	'NEW_PASSWORD_ERROR'			=> 'הססמאות שהזנת אינן תואמות.',

	'NOTIFICATIONS_MARK_ALL_READ'						=> 'סמן כל ההתרעות כנקראו',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'				=> 'האם אתה בטוח שברצונך לסמן את כל ההודעות כנקראו?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'				=> 'כל ההתרעות סומנו כנקראו',
	'NOTIFICATION_GROUP_MISCELLANEOUS'					=> 'הודעות שונות',
	'NOTIFICATION_GROUP_MODERATION'						=> 'התרעות ניהוליות',
	'NOTIFICATION_GROUP_ADMINISTRATION'					=> 'הודעות ניהוליות',
	'NOTIFICATION_GROUP_POSTING'						=> 'פרסום הודעות',
	'NOTIFICATION_METHOD_BOARD'							=> 'התראות',
	'NOTIFICATION_METHOD_EMAIL'							=> 'דוא"ל',
	'NOTIFICATION_METHOD_JABBER'						=> 'Jabber',
	'NOTIFICATION_TYPE'									=> 'סוג התראה',
	'NOTIFICATION_TYPE_BOOKMARK'						=> 'מישהו הגיב לנושא שסימנת',
	'NOTIFICATION_TYPE_GROUP_REQUEST'					=> 'מישהו מבקש להצטרף לקבצוה שאתה מנהל',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'				=> 'נושא שצריך אישור',
	'NOTIFICATION_TYPE_MODERATION_QUEUE'				=> 'הנושאים/ההודעות שלך יאושרו או לא יאושרו על ידי מנהל',
	'NOTIFICATION_TYPE_PM'								=> 'מישהו שלח לך הודעה פרטית',
	'NOTIFICATION_TYPE_POST'							=> 'מישהו הגיב לנושא שבו אתה מנוי',
	'NOTIFICATION_TYPE_QUOTE'							=> 'מישהו ציטט אותך בהודעה',
	'NOTIFICATION_TYPE_REPORT'							=> 'דיווח של מישהו על הודעה',
	'NOTIFICATION_TYPE_TOPIC'							=> 'מישהו יוצר נושא בפורום שבו אתה מנוי',
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'				=> 'משתמש שנדרש הפעלת חשבון',

	'NOTIFY_METHOD'					=> 'אמצעי התראה',
	'NOTIFY_METHOD_BOTH'			=> 'שניהם',
	'NOTIFY_METHOD_EMAIL'			=> 'דואר אלקטרוני בלבד',
	'NOTIFY_METHOD_EXPLAIN'			=> 'שיטה להעברת ההודעות שנשלחו דרך המערכת.',
	'NOTIFY_METHOD_IM'				=> 'Jabber בלבד',
	'NOTIFY_ON_PM'					=> 'הודע לי בעת הודעות פרטיות חדשות',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'אתה לא יכול להוסיף את משתמש האורח אל רשימת החברים שלך.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'אתה לא יכול להוסיף רובוטים אל רשימת החברים שלך.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'אתה לא יכול להוסיף משתמשים לרשימת החברים שלך אשר נמצאים ברשימת הנודניקים שלך.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'אתה לא יכול להוסיף את עצמך לרשימת החברים שלך.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'אתה לא יכול להוסיף מנהלים ראשיים ומנהלים לרשימת הנודניקים שלך.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'אתה לא יכול להוסיף את משתמש האורח לרשימת הנודניקים שלך.',
	'NOT_ADDED_FOES_BOTS'			=> 'אתה לא יכול להוסיף רובוטים לרשימת הנודניקים שלך.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'אתה לא יכול להוסיף משתמשים לרשימת הנודניקים שלך אשר נמצאים ברשימת החברים שלך.',
	'NOT_ADDED_FOES_SELF'			=> 'אתה לא יכול להוסיף את עצמך לרשימת הנודניקים.',
	'NOT_AGREE'						=> 'אני לא מסכים לתנאים אלו',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'תיקיית היעד “%s” נראית מלאה. הפעולה המבוקשת לא התבצעה.',
	'NOT_MOVED_MESSAGES'			=> array(
		1	=> 'יש לך הודעה פרטית %d כרגע בהמתנה בגלל שהתיקייה מלאה.',
		2	=> 'יש לך %d הודעות פרטיות כרגע בהמתנה בגלל שהתיקייה מלאה.',
	),
	'NO_ACTION_MODE'				=> 'לא צוינה פעולת הודעה.',
	'NO_AUTHOR'						=> 'לא מוגדר כותב להודעה זו',
	'NO_AVATAR'						=> 'לא נבחר סמל אישי',
	'NO_AVATAR_CATEGORY'			=> 'ללא',

	'NO_AUTH_DELETE_MESSAGE'		=> 'אינך מורשה למחוק הודעות פרטיות.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'אינך מורשה לערוך הודעות פרטיות.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'אינך מורשה להעביר הודעות פרטיות.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'אינך מורשה לשלוח הודעות פרטיות לקבוצות.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'אינך מורשה לבקש ססמה חדשה.',
	'NO_AUTH_PROFILEINFO'			=> 'אינך מורשה לשנות את פרטי הפרופיל שלך.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'אינך מורשה לקרוא הודעות פרטיות אשר בהמתנה.',
	'NO_AUTH_READ_MESSAGE'			=> 'אינך מורשה לקרוא הודעות פרטיות.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'אתה לא יכול לקרוא הודעה זו מפני שהיא הוסרה על־ידי הכותב.',
	'NO_AUTH_SEND_MESSAGE'			=> 'אינך מורשה לשלוח הודעות פרטיות.',
	'NO_AUTH_SIGNATURE'				=> 'אינך מורשה להגדיר חתימה.',

	'NO_BCC_RECIPIENT'			=> 'ללא',
	'NO_BOOKMARKS'				=> 'אין לך פריטים מועדפים.',
	'NO_BOOKMARKS_SELECTED'		=> 'לא בחרת פריטים מועדפים.',
	'NO_EDIT_READ_MESSAGE'		=> 'ההודעה הפרטית אינה ניתנת לעריכה מפני שהיא כבר נקראה.',
	'NO_EMAIL_USER'				=> 'פרטי הדואר האלקטרוני/שם המשתמש שנשלחו לא נמצאו.',
	'NO_FOES'					=> 'אין נודניקים מוגדרים כרגע',
	'NO_FRIENDS'				=> 'אין חברים מוגדרים כרגע',
	'NO_FRIENDS_OFFLINE'		=> 'אין חברים מנותקים',
	'NO_FRIENDS_ONLINE'			=> 'אין חברים מחוברים',
	'NO_GROUP_SELECTED'			=> 'לא צויינה קבוצה.',
	'NO_IMPORTANT_NEWS'			=> 'אין הכרזות חשובות כרגע.',
	'NO_MESSAGE'				=> 'ההודעה הפרטית לא נמצאה.',
	'NO_NEW_FOLDER_NAME'		=> 'אתה חייב לציין שם לתיקיה החדשה.',
	'NO_NEWER_PM'				=> 'אין הודעות חדשות יותר.',
	'NO_OLDER_PM'				=> 'אין הודעות ישנות יותר.',
	'NO_PASSWORD_SUPPLIED'		=> 'אתה לא יכול להתחבר ללא סיסמה.',
	'NO_RECIPIENT'				=> 'לא מוגדר נמען.',
	'NO_RULES_DEFINED'			=> 'לא מוגדרים כללים.',
	'NO_SAVED_DRAFTS'			=> 'אין טיוטות שמורות.',
	'NO_TO_RECIPIENT'			=> 'ללא',
	'NO_WATCHED_FORUMS'			=> 'אינך רשום לקבלת עדכונים לאף פורום.',
	'NO_WATCHED_SELECTED'		=> 'לא בחרת להרשם לאף פורום או נושא.',
	'NO_WATCHED_TOPICS'			=> 'אינך רשום לקבלת עדכונים לאף נושא.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'הסיסמה חייבת להיות בין %1$s  ל-  %2$s  באורך,  וחייבת להכיל אותיות במשפט מעורבב כולל מספרים.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'חייבת להיות בין %1$s עד %2$s.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'הסיסמה חייבת להיות בין %1$s  ל-  %2$s  באורך,  וחייבת להכיל אותיות במשפט מעורבב.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'הסיסמה חייבת להיות בין %1$s  ל-  %2$s  באורך,  וחייבת להכיל אותיות במשפט מעורבב כולל מספרים וסימנים.',
	'PASSWORD'					=> 'סיסמה',
	'PASSWORD_ACTIVATED'		=> 'הססמה החדשה שלך הפועלה.',
	'PASSWORD_UPDATED'			=> 'ססמה חדשה נשלחה לדואר האלקטרוני שלך.',
	'PERMISSIONS_RESTORED'		=> 'ההרשאות המקוריות שוחזרו בהצלחה.',
	'PERMISSIONS_TRANSFERRED'	=> 'ההרשאות הועברו בהצלחה מ־<strong>%s</strong>, תוכל לגלוש כעת במערכת עם הרשאות משתמש זה.<br />שים לב שהרשאות מנהל ראשי לא הועברו. תוכל לחזור להרשאות אשר נקבעו לך בכל זמן נתון.',
	'PM_DISABLED'				=> 'אפשרות ההודעות הפרטיות כבויה במערכת זו.',
	'PM_FROM'					=> 'מאת',
	'PM_FROM_REMOVED_AUTHOR'	=> 'This message was sent by a user no longer registered.',
	'PM_ICON'					=> 'סמל ההודעה הפרטית',
	'PM_INBOX'					=> 'תיבת דואר נכנס',
	'PM_MARK_ALL_READ'			=> 'סמן את כל ההודעות שנקראו',
	'PM_MARK_ALL_READ_SUCCESS'	=> 'All private messages in this folder have been marked read',
	'PM_NO_USERS'				=> 'The requested users to be added do not exist.',
	'PM_OUTBOX'					=> 'תיבת דואר יוצא',
	'PM_SENTBOX'				=> 'שלח הודעות',
	'PM_SUBJECT'				=> 'נושא ההודעה',
	'PM_TO'						=> 'שלח אל',
	'PM_TOOLS'					=> 'כלי ההודעות',
	'PM_USERS_REMOVED_NO_PERMISSION'	=> 'לא ניתן להוסיף חלק מהמשתמשים מכיוון שאין להם הרשאה לקרוא הודעות פרטיות.',
	'PM_USERS_REMOVED_NO_PM'	=> 'כמה מהמשתמשים לא נתנו להוספה מפני שהם כיבו את קבלת ההודעות הפרטיות.',
	'POST_EDIT_PM'				=> 'ערוך הודעה',
	'POST_FORWARD_PM'			=> 'הגב להודעה',
	'POST_NEW_PM'				=> 'צור הודעה',
	'POST_PM_LOCKED'			=> 'אפשרות ההודעות הפרטיות נעולה.',
	'POST_PM_POST'				=> 'צטט הודעה',
	'POST_QUOTE_PM'				=> 'צטט הודעה',
	'POST_REPLY_PM'				=> 'העבר הודעה',
	'PRINT_PM'					=> 'הצג הדפסה',
	'PREFERENCES_UPDATED'		=> 'ההעדפות שלך עודכנו.',
	'PROFILE_INFO_NOTICE'		=> 'שים לב שמידע זה ניתן לצפיה על-ידי המשתמשים האחרים. הזהר מלכלול פרטים אישיים. כל השדות המסומנים עם * חייבים להיות שלמים.',
	'PROFILE_UPDATED'			=> 'הפרופיל שלך עודכן.',
	'PROFILE_AUTOLOGIN_KEYS'	=> 'מפתחות ההתחברות "זכור אותי" מחברים אותך אוטומטית כשאתה מבקר במערכת הפורומים. אם התנתקת, מפתח ההתחברות "זכור אותי" ימחק רק במחשב בו אתה משתמש כדי להתנתק. כאן אתה יכול לראות את מפתחות ההתחברות שנוצרו במחשבים אחרים שבו השתמשת כדי להתחבר לאתר זה.',
	'PROFILE_NO_AUTOLOGIN_KEYS'	=> 'לא קיימים מפתחות כניסה "זכור אותי".',

	'RECIPIENT'							=> 'נמען',
	'RECIPIENTS'						=> 'נמענים',
	'REGISTRATION'						=> 'הרשמה',
	'RELEASE_MESSAGES'					=> '%sפתח את כל ההודעות שבהמתנה%s… הן ימוינו מחדש אל התיקייה המתאימה אם מספיק מקום זמין.',
	'REMOVE_ADDRESS'					=> 'הסר כתובת',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'הסר פריטי מועדפים נבחרים',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'אתה בטוח שאתה רוצה למחוק את כל פריטי המועדפים הנבחרים?',
	'REMOVE_BOOKMARK_MARKED'			=> 'הסר פריטי מועדפים מסומנים',
	'REMOVE_FOLDER'						=> 'הסר תיקייה',
	'REMOVE_FOLDER_CONFIRM'				=> 'אתה בטוח שאתה רוצה להסיר תיקייה זו?',
	'RENAME'							=> 'שנה שם',
	'RENAME_FOLDER'						=> 'שנה שם תיקייה',
	'REPLIED_MESSAGE'					=> 'הגיב להודעה',
	'REPLY_TO_ALL'						=> 'הגב לשולח ולכל הנמענים.',
	'REPORT_PM'							=> 'דווח על הודעה פרטית זו',
	'RESIGN_SELECTED'					=> 'רשום מחדש נבחרים',
	'RETURN_FOLDER'						=> '%1$sחזור לתיקייה הקודמת%2$s',
	'RETURN_UCP'						=> '%sחזור ללוח הבקרה למשתמש%s',
	'RULE_ADDED'						=> 'הכלל נוסף בהצלחה.',
	'RULE_ALREADY_DEFINED'				=> 'כלל זה הוגדר כבר קודם לכן.',
	'RULE_DELETED'						=> 'הכלל הוסר בהצלחה.',
	'RULE_LIMIT_REACHED'				=> 'אינך יכול להוסיף יותר כללים להודעות הפרטיות. הגעת למקסימום הכללים שניתן להגדיר.',
	'RULE_NOT_DEFINED'					=> 'הכלל לא צוין כראוי.',
	'RULE_REMOVED_MESSAGES'				=> array(
		1	=> 'הודעה פרטית %d הוסרה עקב מסנני ההודעות הפרטיות.',
		2	=> '%d הודעות פרטיות הוסרו עקב מסנני ההודעות הפרטיות.',
	),

	'SAME_PASSWORD_ERROR'		=> 'הססמה החדשה שהזנת זהה לססמתך הנוכחית.',
	'SEARCH_YOUR_POSTS'			=> 'הצג את ההודעות שלך',
	'SEND_PASSWORD'				=> 'שלח סיסמה',
	'SENT_AT'					=> 'שלח',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'משתמשים יכולים ליצור איתי קשר בעזרת דואר אלקטרוני',
	'SIGNATURE_EXPLAIN'			=> 'זהו חלק טקסט אשר מתווסף להודעות שלך בפורומים. ישנה הגבלה של %d תווים.',
	'SIGNATURE_PREVIEW'			=> 'כך תיראה חתימתך בהודעות',
	'SIGNATURE_TOO_LONG'		=> 'חתימתך ארוכה מידי.',
	'SELECT_CURRENT_TIME'		=> 'בחר זמן נוכחי',
	'SELECT_TIMEZONE'			=> 'בחר אזור זמן',
	'SORT'						=> 'מיין',
	'SORT_COMMENT'				=> 'תיאור הקובץ',
	'SORT_DOWNLOADS'			=> 'הורדות',
	'SORT_EXTENSION'			=> 'סיומת',
	'SORT_FILENAME'				=> 'שם קובץ',
	'SORT_POST_TIME'			=> 'זמן פרסום',
	'SORT_SIZE'					=> 'גודל קובץ',

	'TIMEZONE'					=> 'אזור זמן',
	'TIMEZONE_DATE_SUGGESTION'	=> 'הצעה: %s',
	'TIMEZONE_INVALID'			=> 'אזור הזמן שבחרת לא תקין.',
	'TO'						=> 'אל',
	'TO_MASS'					=> 'נמענים',
	'TO_ADD'					=> 'הוסף נמען',
	'TO_ADD_MASS'				=> 'הוסף נמענים',
	'TO_ADD_GROUPS'				=> 'הוסף קבוצות',
	'TOO_MANY_RECIPIENTS'		=> 'ניסית לשלוח הודעה פרטית ליותר מדי נמענים.',
	'TOO_MANY_REGISTERS'		=> 'עברת את המספר המרבי של ניסיונות הרשמה לחיבור זה. נסה שנית מאוחר יותר.',

	'UCP'						=> 'לוח בקרה למשתמש',
	'UCP_ACTIVATE'				=> 'הפעל חשבון',
	'UCP_ADMIN_ACTIVATE'		=> 'שים לב שאתה צריך להזין כתובת דואר אלקטרוני חוקית לפני שחשבונך יופעל. המנהל הראשי יסקור את חשבונך ואם יאשר, תקבל הודעת דואר אלקטרוני לכתובת שציינת.',
	'UCP_ATTACHMENTS'			=> 'קבצים מצורפים',
	'UCP_AUTH_LINK'				=> 'חשבונות חיצוניים',
	'UCP_AUTH_LINK_ASK'			=> 'אין לך כרגע חשבון קשור לשירות חיצוני זה. לחץ על הכפתור מטה כדי לקשר את החשבון שלך במערכת לחשבון בשירות החיצוני הזה.',
	'UCP_AUTH_LINK_ID'			=> 'מזהה ייחודי',
	'UCP_AUTH_LINK_LINK'		=> 'קשר',
	'UCP_AUTH_LINK_MANAGE'		=> 'ניהול חיבורי חשבונות חיצוניים',
	'UCP_AUTH_LINK_NOT_SUPPORTED'	=> 'קישור חשבונות במערכת לשירותים חיצוניים אינו נתמך על ידי שיטת האימות הנוכחית של מערכת הפורומים הזו.',
	'UCP_AUTH_LINK_TITLE'		=> 'נהל את חיבורי החשבונות החיצוניים שלך',
	'UCP_AUTH_LINK_UNLINK'		=> 'נתק',
	'UCP_COPPA_BEFORE'			=> 'לפני %s',
	'UCP_COPPA_ON_AFTER'		=> 'בתאריך או לאחר %s',
	'UCP_EMAIL_ACTIVATE'		=> 'שים לב שאתה צריך להזין כתובת דואר אלקטרוני חוקית לפני שחשבונך יופעל. תקבל הודעת דואר אלקטרוני לכתובת שציינת אשר מכילה קישור להפעלת החשבון.',
	'UCP_JABBER'				=> 'כתובת Jabber',
	'UCP_LOGIN_LINK'			=> 'הגדר חיבור עם חשבון חיצוני',

	'UCP_MAIN'					=> 'סקירה כללית',
	'UCP_MAIN_ATTACHMENTS'		=> 'ניהול קבצים מצורפים',
	'UCP_MAIN_BOOKMARKS'		=> 'ניהול מועדפים',
	'UCP_MAIN_DRAFTS'			=> 'נהל טיוטות',
	'UCP_MAIN_FRONT'			=> 'עמוד ראשי',
	'UCP_MAIN_SUBSCRIBED'		=> 'ניהול הרשמות',

	'UCP_NO_ATTACHMENTS'		=> 'לא שלחת קבצים.',

	'UCP_NOTIFICATION_LIST'				=> 'ניהול התראות',
	'UCP_NOTIFICATION_LIST_EXPLAIN'		=> 'כאן תוכל להציג את כל ההתרעות הקודמות.',
	'UCP_NOTIFICATION_OPTIONS'			=> 'ערוך אפשרויות התרעה',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN'	=> 'כאן באפשרותך להגדיר במערכת את שיטות ההתרעה המועדפות עליך',

	'UCP_PREFS'					=> 'עדפות מערכת',
	'UCP_PREFS_PERSONAL'		=> 'עריכת הגדרות כלליות',
	'UCP_PREFS_POST'			=> 'עריכת הגדרות שליחה',
	'UCP_PREFS_VIEW'			=> 'עריכת אפשרויות תצוגה',

	'UCP_PM'					=> 'הודעות פרטיות',
	'UCP_PM_COMPOSE'			=> 'צור הודעה',
	'UCP_PM_DRAFTS'				=> 'ניהול טיוטות הודעות פרטיות',
	'UCP_PM_OPTIONS'			=> 'כללים, תיקיות והגדרות',
	'UCP_PM_UNREAD'				=> 'הודעות שלא נקראו',
	'UCP_PM_VIEW'				=> 'הצג הודעות',

	'UCP_PROFILE'				=> 'פרופיל',
	'UCP_PROFILE_AVATAR'		=> 'ערוך סמל אישי',
	'UCP_PROFILE_PROFILE_INFO'	=> 'ערוך פרופיל',
	'UCP_PROFILE_REG_DETAILS'	=> 'ערוך הגדרות חשבון',
	'UCP_PROFILE_SIGNATURE'		=> 'ערוך חתימה',
	'UCP_PROFILE_AUTOLOGIN_KEYS'=> 'ניהול מפתחות כניסה של "זכור אותי"',

	'UCP_USERGROUPS'			=> 'קבוצות משתמשים',
	'UCP_USERGROUPS_MEMBER'		=> 'Edit memberships',
	'UCP_USERGROUPS_MANAGE'		=> 'ניהול קבוצות',

	'UCP_PASSWORD_RESET_DISABLED'	=> 'לא ניתן לבצע איפוס ססמה במערכת פורומים זו. אם אתה צריך עזרה בגישה לחשבון שלך, אנא צור קשר עם %sמנהל מערכת הפורומים%s',
	'UCP_REGISTER_DISABLE'			=> 'יצירת חשבון חדש כרגע בלתי אפשרית.',
	'UCP_REMIND'					=> 'שלח ססמה',
	'UCP_RESEND'					=> 'שלח קישור להפעלה לדואר אלקטרוני',
	'UCP_WELCOME'					=> 'ברוך הבא ללוח הבקרה למשתמש. מכאן אתה יכול לפקח, לראות ולעדכן את הפרופיל, ההעדפות והנושאים והפורומים אליהם אתה רשום. אתה יכול גם לשלוח הודעות למשתמשים אחרים (אם ניתן). וודא שקראת את כל ההכרזות לפני שתמשיך.',
	'UCP_ZEBRA'						=> 'חברים ונודניקים',
	'UCP_ZEBRA_FOES'				=> 'ניהול נודניקים',
	'UCP_ZEBRA_FRIENDS'				=> 'ניהול חברים',
	'UNDISCLOSED_RECIPIENT'			=> 'נמען בלתי מזוהה',
	'UNKNOWN_FOLDER'				=> 'תיקייה לא ידועה',
	'UNWATCH_MARKED'				=> 'הפסק לעקוב אחר מסומנים',
	'UPLOAD_AVATAR_FILE'			=> 'העלה מהמחשב שלך',
	'UPLOAD_AVATAR_URL'				=> 'העלה מכתובת',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'הזן את כתובת המיקום המכיל את התמונה, התמונה תועתק לאתר זה.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'שם המשתמש חייב להיות בין %1$s לבין %2$s ולהכיל אותיות בלבד.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'שם המשתמש חייב להיות בין %1$s לבין %2$s ולהכיל אותיות, רווח או -+_[].',
	'USERNAME_ASCII_EXPLAIN'		=> 'שם המשתמש חייב להיות בין %1$s לבין %2$s ולהכיל תווי ASCII בלבד, ללא תווים מיוחדים.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'שם המשתמש חייב להיות בין %1$s לבין %2$s ולהכין אותיות ומספרים בלבד.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'שם המשתמש חייב להיות בין %1$s לבין %2$s ולהכין אותיות, מספרים, רווח או -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'האורך חייב להיות בין %1$s לבין %2$s.',
	'USERNAME_TAKEN_USERNAME'		=> 'שם המשתמש שבחרת כבר בשימוש, אנא בחר בשם אחר.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'שם המשתמש שהזנת לא מורשה או מכיל מילה לא מורשת. אנא בחר בשם אחר.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'שמות המשתמשים שציינת לא נמצאו או שלא הופעלו.',

	'VIEW_AVATARS'				=> 'הצג סמלים אישיים',
	'VIEW_EDIT'					=> 'ראה/ערוך',
	'VIEW_FLASH'				=> 'הצג אנימציות פלאש',
	'VIEW_IMAGES'				=> 'הצג תמונות בהודעות',
	'VIEW_NEXT_HISTORY'			=> 'הודעה פרטית הבאה בהיסטוריה',
	'VIEW_NEXT_PM'				=> 'הודעה פרטית הבאה',
	'VIEW_PM'					=> 'צפה בהודעה',
	'VIEW_PM_INFO'				=> 'פרטי ההודעה',
	'VIEW_PM_MESSAGES'			=> array(
		1	=> '%d הודעה',
		2	=> '%d הודעות',
	),
	'VIEW_PREVIOUS_HISTORY'		=> 'הודעה פרטית קודמת בהיסטוריה',
	'VIEW_PREVIOUS_PM'			=> 'הודעה פרטית קודמת',
	'VIEW_PROFILE'				=> 'צפה בפרופיל',
	'VIEW_SIGS'					=> 'הצג חתימות',
	'VIEW_SMILIES'				=> 'הצג סמיילים כתמונות',
	'VIEW_TOPICS_DAYS'			=> 'הצג נושאים מימים קודמים',
	'VIEW_TOPICS_DIR'			=> 'הצג כיוון סדר נושא',
	'VIEW_TOPICS_KEY'			=> 'הצג סידור נושאים על-ידי',
	'VIEW_POSTS_DAYS'			=> 'הצג הודעות מימים קודמים',
	'VIEW_POSTS_DIR'			=> 'הצג כיוון סדר הודעה',
	'VIEW_POSTS_KEY'			=> 'הצג סידור הודעות על-ידי',

	'WATCHED_EXPLAIN'			=> 'זוהי רשימת הפורומים והנושאים אשר נרשמת אליהם. תקבל הודעה על הודעות חדשות בהם. כדי לבטל הרשמה סמן את הפורום או הנושא ולחץ על הכפתור <em>בטל הרשמתך</em>.',
	'WATCHED_FORUMS'			=> 'פורומים אחריהם אתה עוקב',
	'WATCHED_TOPICS'			=> 'נושאים אחריהם אתה עוקב',
	'WRONG_ACTIVATION'			=> 'קישור ההפעלה שסיפקת אינו תואם לזה שבבסיס הנתונים.',

	'YOUR_DETAILS'				=> 'הפעילות  שלך',
	'YOUR_FOES'					=> 'הנודניקים שלך',
	'YOUR_FOES_EXPLAIN'			=> 'כדי להסיר שמות משתמשים בחר אותם ולחץ על שלח.',
	'YOUR_FRIENDS'				=> 'החברים שלך',
	'YOUR_FRIENDS_EXPLAIN'		=> 'כדי להסיר שמות משתמשים בחר אותם ולחץ על שלח.',
	'YOUR_WARNINGS'				=> 'רמת האזהרה שלך',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'הכנס לתוך תיקייה',
		'MARK_AS_READ'		=> 'סמן כנקרא',
		'MARK_AS_IMPORTANT'	=> 'סמן הודעה',
		'DELETE_MESSAGE'	=> 'מחק הודעה',
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'כותרת נושא',
		'SENDER'	=> 'שולח',
		'MESSAGE'	=> 'הודעה',
		'STATUS'	=> 'מצב הודעה',
		'TO'		=> 'נשלח אל',
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'דומה',
		'IS_NOT_LIKE'	=> 'לא דומה',
		'IS'			=> 'הוא',
		'IS_NOT'		=> 'לא',
		'BEGINS_WITH'	=> 'מתחיל ב',
		'ENDS_WITH'		=> 'מסתיים ב',
		'IS_FRIEND'		=> 'חבר',
		'IS_FOE'		=> 'נודניק',
		'IS_USER'		=> 'משתמש',
		'IS_GROUP'		=> 'בקבוצת משתמשים',
		'ANSWERED'		=> 'נענתה',
		'FORWARDED'		=> 'הועברה',
		'TO_GROUP'		=> 'אל קבוצת ברירת המחדל שלי',
		'TO_ME'			=> 'אלי',
	),

	'GROUPS_EXPLAIN'	=> 'קבוצות משתמשים מאפשרות למנהלים ראשיים של המערכת לנהל טוב יותר את המשתמשים במערכת. כברירת מחדל, אתה תכנס לקבוצה מסויימת, קבוצת ברירת המחדל שלך. קבוצה זו מגדירה כיצד תופיע למשתמשים האחרים, למשל צבע שם המשתמש שלך, סמל אישי, דירוג, ועוד. במידה והמנהל הראשי מאפשר - תוכל לשנות את קבוצת ברירת המחדל שלך, תוכל להצטרף או לבקש להצטרף לקבוצות אחרות במידה וכאלה קיימות. קבוצות שונות יכולות לתת לך הרשאות נוספות לצפיה בתוכן \ פורומים נוספים ו\או להגדלת ההרשאות שלך באיזורים מסויימים.',
	'GROUP_LEADER'		=> 'מנהל קבוצות',
	'GROUP_MEMBER'		=> 'חבר בקבוצות',
	'GROUP_PENDING'		=> 'חברויות בהמתנה',
	'GROUP_NONMEMBER'	=> 'ללא חברויות',
	'GROUP_DETAILS'		=> 'פרטי קבוצות',

	'NO_LEADER'		=> 'אין ניהולי קבוצות',
	'NO_MEMBER'		=> 'אין חברויות קבוצות',
	'NO_PENDING'	=> 'אין בקשות חברות בהמתנה',
	'NO_NONMEMBER'	=> 'אין קבוצות ללא חברות',
));
