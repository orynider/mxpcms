<?php
/**
*
* @package CH
* @version $Id: mx_functions_ch.php,v 1.16 2013/06/28 15:32:38 orynider Exp $
* @copyright (c) 2002-2008 MX-Publisher Project Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License v2
* @link http://mxpcms.sourceforge.net/
* @internal
*
*/

if ( !defined( 'IN_PORTAL' ) )
{
	die( "Hacking attempt" );
}

//
// This code is part of common.php in Categories Hierarchy 2.1.0
//

$starttime = microtime();
$trc_loc_start = $trc_loc_end = 0;


// include basic classes def
include($phpbb_root_path . 'includes/class_config.' . $phpEx);
include($phpbb_root_path . 'includes/class_groups.' . $phpEx);

// get config
$config = new config_class();
if ( !$config->read() )
{
	define('RUN_CH_INSTALL', true);
}
$board_config = $config->data;

// let's run the upgrade script
if ( !defined('IN_LOGIN') && !defined('IN_INSTALL') && (($config->data['mod_cat_hierarchy'] != CH_CURRENT_VERSION) || defined('RUN_CH_INSTALL')) )
{
	header('Location: ' . $phpbb_root_path . 'install_cat/install.' . $phpEx . (empty($SID) ? '' : '?' . $SID));
	exit;
}

// user objects
include($config->url('includes/class_user'));
include($config->url('includes/class_auth'));

// instantiate some objects
$user = new user();
$censored_words = new words();
$icons = new icons();
$navigation = new navigation();
$themes = '';
$smilies = new smilies();

// People never read achievement messages after after having seen "Succesfull !", tss tss :)
if ( file_exists($phpbb_root_path.'install_cat') && !defined('IN_LOGIN') && !defined('IN_INSTALL') )
{
	message_die(GENERAL_MESSAGE, 'Please ensure the install_cat/ directory is deleted');
}

// messages queue
$message_queue = '';
@include($config->url('includes/class_message'));
$message_queue = !defined('CH_message_queue') ? '' : new message_queue();

// include extra language key
$language = $userdata['user_lang'];

if( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_extend_cat_hierarchy.'.$phpEx) )
{
	$language = $board_config['default_lang'];
}

if( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_extend_cat_hierarchy.'.$phpEx) )
{
	$language = 'english';
}

include($phpbb_root_path . 'language/lang_' . $language . '/lang_extend_cat_hierarchy.' . $phpEx);

// include extra language key
$language = $userdata['user_lang'];

if( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_extend_cat_hierarchy.'.$phpEx) )
{
	$language = $board_config['default_lang'];
}

if( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_extend_cat_hierarchy.'.$phpEx) )
{
	$language = 'english';
}

include($phpbb_root_path . 'language/lang_' . $language . '/lang_extend_cat_hierarchy.' . $phpEx);

?>