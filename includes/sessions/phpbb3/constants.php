<?php
/**
*
* @package Style
* @version $Id: constants.php,v 1.10 2013/06/28 15:33:47 orynider Exp $
* @copyright (c) 2002-2008 MX-Publisher Project Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License v2
* @link http://mxpcms.sourceforge.net/
*
*/

/**
* Modifications:
* define -> @define
* to supress any notices since in mx_constants.php some are allready @@defined
*/

// User related
@define('ANONYMOUS', 1);

@define('USER_ACTIVATION_NONE', 0);
@define('USER_ACTIVATION_SELF', 1);
@define('USER_ACTIVATION_ADMIN', 2);
@define('USER_ACTIVATION_DISABLE', 3);

@define('AVATAR_UPLOAD', 1);
@define('AVATAR_REMOTE', 2);
@define('AVATAR_GALLERY', 3);

@define('USER_NORMAL', 0);
@define('USER_INACTIVE', 1);
@define('USER_IGNORE', 2);
@define('USER_FOUNDER', 3);

@define('INACTIVE_REGISTER', 1);
@define('INACTIVE_PROFILE', 2);
@define('INACTIVE_MANUAL', 3);
@define('INACTIVE_REMIND', 4);

// ACL
@define('ACL_NEVER', 0);
@define('ACL_YES', 1);
@define('ACL_NO', -1);

// Login error codes
@define('LOGIN_CONTINUE', 1);
@define('LOGIN_BREAK', 2);
@define('LOGIN_SUCCESS', 3);
@define('LOGIN_SUCCESS_CREATE_PROFILE', 20);
@define('LOGIN_ERROR_USERNAME', 10);
@define('LOGIN_ERROR_PASSWORD', 11);
@define('LOGIN_ERROR_ACTIVE', 12);
@define('LOGIN_ERROR_ATTEMPTS', 13);
@define('LOGIN_ERROR_EXTERNAL_AUTH', 14);
@define('LOGIN_ERROR_PASSWORD_CONVERT', 15);

// SQL codes phpBB2
@define('BEGIN_TRANSACTION', 1);
@define('END_TRANSACTION', 2);

// Error codes (from phpbb2)
@define('GENERAL_MESSAGE', 200);
@define('GENERAL_ERROR', 202);
@define('CRITICAL_MESSAGE', 203);
@define('CRITICAL_ERROR', 204);

// Group settings
@define('GROUP_OPEN', 0);
@define('GROUP_CLOSED', 1);
@define('GROUP_HIDDEN', 2);
@define('GROUP_SPECIAL', 3);
@define('GROUP_FREE', 4);

// Forum/Topic states
@define('FORUM_CAT', 0);
@define('FORUM_POST', 1);
@define('FORUM_LINK', 2);
@define('ITEM_UNLOCKED', 0);
@define('ITEM_LOCKED', 1);
@define('ITEM_MOVED', 2);

// Forum Flags
@define('FORUM_FLAG_LINK_TRACK', 1);
@define('FORUM_FLAG_PRUNE_POLL', 2);
@define('FORUM_FLAG_PRUNE_ANNOUNCE', 4);
@define('FORUM_FLAG_PRUNE_STICKY', 8);
@define('FORUM_FLAG_ACTIVE_TOPICS', 16);
@define('FORUM_FLAG_POST_REVIEW', 32);

// Optional text flags
@define('OPTION_FLAG_BBCODE', 1);
@define('OPTION_FLAG_SMILIES', 2);
@define('OPTION_FLAG_LINKS', 4);

// Topic types
@define('POST_NORMAL', 0);
@define('POST_STICKY', 1);
@define('POST_ANNOUNCE', 2);
@define('POST_GLOBAL', 3);

// Lastread types
@define('TRACK_NORMAL', 0);
@define('TRACK_POSTED', 1);

// Notify methods
@define('NOTIFY_EMAIL', 0);
@define('NOTIFY_IM', 1);
@define('NOTIFY_BOTH', 2);

// Email Priority Settings
@define('MAIL_LOW_PRIORITY', 4);
@define('MAIL_NORMAL_PRIORITY', 3);
@define('MAIL_HIGH_PRIORITY', 2);

// Log types
@define('LOG_ADMIN', 0);
@define('LOG_MOD', 1);
@define('LOG_CRITICAL', 2);
@define('LOG_USERS', 3);

// Private messaging - Do NOT change these values
@define('PRIVMSGS_HOLD_BOX', -4);
@define('PRIVMSGS_NO_BOX', -3);
@define('PRIVMSGS_OUTBOX', -2);
@define('PRIVMSGS_SENTBOX', -1);
@define('PRIVMSGS_INBOX', 0);

// Full Folder Actions
@define('FULL_FOLDER_NONE', -3);
@define('FULL_FOLDER_DELETE', -2);
@define('FULL_FOLDER_HOLD', -1);

// Download Modes - Attachments
@define('INLINE_LINK', 1);
// This mode is only used internally to allow modders extending the attachment functionality
@define('PHYSICAL_LINK', 2);

// Confirm types
@define('CONFIRM_REG', 1);
@define('CONFIRM_LOGIN', 2);
@define('CONFIRM_POST', 3);

// Categories - Attachments
@define('ATTACHMENT_CATEGORY_NONE', 0);
@define('ATTACHMENT_CATEGORY_IMAGE', 1); // Inline Images
@define('ATTACHMENT_CATEGORY_WM', 2); // Windows Media Files - Streaming
@define('ATTACHMENT_CATEGORY_RM', 3); // Real Media Files - Streaming
@define('ATTACHMENT_CATEGORY_THUMB', 4); // Not used within the database, only while displaying posts
@define('ATTACHMENT_CATEGORY_FLASH', 5); // Flash/SWF files
@define('ATTACHMENT_CATEGORY_QUICKTIME', 6); // Quicktime/Mov files

// BBCode UID length
@define('BBCODE_UID_LEN', 5);

// Number of core BBCodes
@define('NUM_CORE_BBCODES', 12);

// Magic url types
@define('MAGIC_URL_EMAIL', 1);
@define('MAGIC_URL_FULL', 2);
@define('MAGIC_URL_LOCAL', 3);
@define('MAGIC_URL_WWW', 4);

// Profile Field Types
@define('FIELD_INT', 1);
@define('FIELD_STRING', 2);
@define('FIELD_TEXT', 3);
@define('FIELD_BOOL', 4);
@define('FIELD_DROPDOWN', 5);
@define('FIELD_DATE', 6);

// referer validation
define('REFERER_VALIDATE_NONE', 0);
define('REFERER_VALIDATE_HOST', 1);
define('REFERER_VALIDATE_PATH', 2);

// phpbb_chmod() permissions
@define('CHMOD_ALL', 7);
@define('CHMOD_READ', 4);
@define('CHMOD_WRITE', 2);
@define('CHMOD_EXECUTE', 1);

// Captcha code length
define('CAPTCHA_MIN_CHARS', 4);
define('CAPTCHA_MAX_CHARS', 7);

// Additional constants
define('VOTE_CONVERTED', 127);

// Additional constants
@define('RANKS_PATH', 'images/ranks/');

// Table names
@define('ACL_GROUPS_TABLE',			$table_prefix . 'acl_groups');
@define('ACL_OPTIONS_TABLE',			$table_prefix . 'acl_options');
@define('ACL_ROLES_DATA_TABLE',		$table_prefix . 'acl_roles_data');
@define('ACL_ROLES_TABLE',			$table_prefix . 'acl_roles');
@define('ACL_USERS_TABLE',			$table_prefix . 'acl_users');
@define('ATTACHMENTS_TABLE',			$table_prefix . 'attachments');
@define('BANLIST_TABLE',				$table_prefix . 'banlist');
@define('BBCODES_TABLE',				$table_prefix . 'bbcodes');
@define('BOOKMARKS_TABLE',			$table_prefix . 'bookmarks');
@define('BOTS_TABLE',				$table_prefix . 'bots');
@define('CONFIG_TABLE',				$table_prefix . 'config');
@define('CONFIRM_TABLE',				$table_prefix . 'confirm');
@define('DISALLOW_TABLE',			$table_prefix . 'disallow');
@define('DRAFTS_TABLE',				$table_prefix . 'drafts');
@define('EXTENSIONS_TABLE',			$table_prefix . 'extensions');
@define('EXTENSION_GROUPS_TABLE',	$table_prefix . 'extension_groups');
@define('FORUMS_TABLE',				$table_prefix . 'forums');
@define('FORUMS_ACCESS_TABLE',		$table_prefix . 'forums_access');
@define('FORUMS_TRACK_TABLE',		$table_prefix . 'forums_track');
@define('FORUMS_WATCH_TABLE',		$table_prefix . 'forums_watch');
@define('GROUPS_TABLE',				$table_prefix . 'groups');
@define('ICONS_TABLE',				$table_prefix . 'icons');
@define('LANG_TABLE',				$table_prefix . 'lang');
@define('LOG_TABLE',					$table_prefix . 'log');
@define('MODERATOR_CACHE_TABLE',		$table_prefix . 'moderator_cache');
@define('MODULES_TABLE',				$table_prefix . 'modules');
@define('POLL_OPTIONS_TABLE',		$table_prefix . 'poll_options');
@define('POLL_VOTES_TABLE',			$table_prefix . 'poll_votes');
@define('POSTS_TABLE',				$table_prefix . 'posts');
@define('PRIVMSGS_TABLE',			$table_prefix . 'privmsgs');
@define('PRIVMSGS_FOLDER_TABLE',		$table_prefix . 'privmsgs_folder');
@define('PRIVMSGS_RULES_TABLE',		$table_prefix . 'privmsgs_rules');
@define('PRIVMSGS_TO_TABLE',			$table_prefix . 'privmsgs_to');
@define('PROFILE_FIELDS_TABLE',		$table_prefix . 'profile_fields');
@define('PROFILE_FIELDS_DATA_TABLE',	$table_prefix . 'profile_fields_data');
@define('PROFILE_FIELDS_LANG_TABLE',	$table_prefix . 'profile_fields_lang');
@define('PROFILE_LANG_TABLE',		$table_prefix . 'profile_lang');
@define('RANKS_TABLE',				$table_prefix . 'ranks');
@define('REPORTS_TABLE',				$table_prefix . 'reports');
@define('REPORTS_REASONS_TABLE',		$table_prefix . 'reports_reasons');
@define('SEARCH_RESULTS_TABLE',		$table_prefix . 'search_results');
@define('SEARCH_WORDLIST_TABLE',		$table_prefix . 'search_wordlist');
@define('SEARCH_WORDMATCH_TABLE',	$table_prefix . 'search_wordmatch');
@define('SESSIONS_TABLE',			$table_prefix . 'sessions');
@define('SESSIONS_KEYS_TABLE',		$table_prefix . 'sessions_keys');
@define('SITELIST_TABLE',			$table_prefix . 'sitelist');
@define('SMILIES_TABLE',				$table_prefix . 'smilies');
@define('STYLES_TABLE',				$table_prefix . 'styles');
@define('STYLES_TEMPLATE_TABLE',		$table_prefix . 'styles_template');
@define('STYLES_TEMPLATE_DATA_TABLE',$table_prefix . 'styles_template_data');
@define('STYLES_THEME_TABLE',		$table_prefix . 'styles_theme');
@define('STYLES_IMAGESET_TABLE',		$table_prefix . 'styles_imageset');
@define('STYLES_IMAGESET_DATA_TABLE',$table_prefix . 'styles_imageset_data');
@define('TOPICS_TABLE',				$table_prefix . 'topics');
@define('TOPICS_POSTED_TABLE',		$table_prefix . 'topics_posted');
@define('TOPICS_TRACK_TABLE',		$table_prefix . 'topics_track');
@define('TOPICS_WATCH_TABLE',		$table_prefix . 'topics_watch');
@define('USER_GROUP_TABLE',			$table_prefix . 'user_group');
@define('USERS_TABLE',				$table_prefix . 'users');
@define('WARNINGS_TABLE',			$table_prefix . 'warnings');
@define('WORDS_TABLE',				$table_prefix . 'words');
@define('ZEBRA_TABLE',				$table_prefix . 'zebra');

// Additional tables

// Additional constants
@define('INHERIT_LANG_NONE', 0);
@define('INHERIT_LANG_EN', 1);
@define('INHERIT_LANG_DEFAULT', 2);
?>