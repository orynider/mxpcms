<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">
<!-- BEGIN switch_set_base -->
<base href="{U_PORTAL_ROOT_PATH}" >
<!-- END switch_set_base -->
{META}
{NAV_LINKS}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<!-- First load standard template *.css definition, located in the the phpbb template folder -->
<link rel="stylesheet" href="{U_PHPBB_ROOT_PATH}{TEMPLATE_ROOT_PATH}{T_PHPBB_STYLESHEET}" type="text/css" >
<!-- Then load MX-Publisher template *.css definition for mx, located in the the portal template folder -->
<link rel="stylesheet" href="{U_PORTAL_ROOT_PATH}{TEMPLATE_ROOT_PATH}{T_MXBB_STYLESHEET}" type="text/css" >
<!-- Optionally, redefine some defintions for gecko browsers -->
<!-- BEGIN switch_gecko --><link rel="stylesheet" href="{U_PORTAL_ROOT_PATH}{TEMPLATE_ROOT_PATH}{T_GECKO_STYLESHEET}" type="text/css" ><!-- END switch_gecko -->

{MX_ADDITIONAL_CSS}
{MX_ICON_CSS}

<!-- BEGIN switch_enable_pm_popup -->
<script language="javascript" type="text/javascript"><!--
	if( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');
	}
// --></script>
<!-- END switch_enable_pm_popup -->

<script language="javascript" type="text/javascript"><!--
function checkSearch()
{
	if (document.search_block.search_engine.value == 'google')
	{
		window.open('http://www.google.com/search?q=' + document.search_block.search_keywords.value, '_google', '');
		return false;
	}
	else if (document.search_block.search_engine.value == 'site')
	{
		window.open('{U_SEARCH_SITE}&search_keywords=' + document.search_block.search_keywords.value, '_self', '');
		return false;
	}
	else if (document.search_block.search_engine.value == 'kb')
	{
		window.open('{U_SEARCH_KB}&search_keywords=' + document.search_block.search_keywords.value, '_self', '');
		return false;
	}
	else if (document.search_block.search_engine.value == 'pafiledb')
	{
		window.open('{U_SEARCH_PAFILEDB}&search_keywords=' + document.search_block.search_keywords.value, '_self', '');
		return false;
	}
	else
	{
		return true;
	}
}
// --></script>

<script language="javascript" type="text/javascript" src="modules/mx_shared/lib/Common.js"></script>
<script language="javascript" type="text/javascript" src="modules/mx_shared/lib/Toggle.js"></script>

</head>
<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">

<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
	<tr>
		<td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td><a href="{U_INDEX}"><img src="{U_PORTAL_ROOT_PATH}{TEMPLATE_ROOT_PATH}images/logo.gif" border="0" alt="{L_INDEX}" vspace="1" /></a></td>
				<td align="center" width="100%" valign="middle"><span class="maintitle">{SITENAME}</span><br /><span class="gen">{SITE_DESCRIPTION}<br />&nbsp; </span>
				<table cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="{U_FAQ}" class="mainmenu"><img src="{U_PHPBB_ROOT_PATH}templates/subSilver/images/icon_mini_faq.gif" width="12" height="13" border="0" alt="{L_FAQ}" hspace="3" />{L_FAQ}</a>&nbsp; &nbsp;<a href="{U_SEARCH}" class="mainmenu"><img src="{U_PHPBB_ROOT_PATH}templates/subSilver/images/icon_mini_search.gif" width="12" height="13" border="0" alt="{L_SEARCH}" hspace="3" />{L_SEARCH}</a>&nbsp; &nbsp;<a href="{U_MEMBERLIST}" class="mainmenu"><img src="{U_PHPBB_ROOT_PATH}templates/subSilver/images/icon_mini_members.gif" width="12" height="13" border="0" alt="{L_MEMBERLIST}" hspace="3" />{L_MEMBERLIST}</a>&nbsp; &nbsp;<a href="{U_GROUP_CP}" class="mainmenu"><img src="{U_PHPBB_ROOT_PATH}templates/subSilver/images/icon_mini_groups.gif" width="12" height="13" border="0" alt="{L_USERGROUPS}" hspace="3" />{L_USERGROUPS}</a>&nbsp;
						<!-- BEGIN switch_user_logged_out -->
						&nbsp;<a href="{U_REGISTER}" class="mainmenu"><img src="{U_PHPBB_ROOT_PATH}templates/subSilver/images/icon_mini_register.gif" width="12" height="13" border="0" alt="{L_REGISTER}" hspace="3" />{L_REGISTER}</a>&nbsp;
						<!-- END switch_user_logged_out -->
						</span></td>
					</tr>
					<tr>
						<td height="25" align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="{U_PROFILE}" class="mainmenu"><img src="{U_PHPBB_ROOT_PATH}templates/subSilver/images/icon_mini_profile.gif" width="12" height="13" border="0" alt="{L_PROFILE}" hspace="3" />{L_PROFILE}</a>&nbsp; &nbsp;<a href="{U_PRIVATEMSGS}" class="mainmenu"><img src="{U_PHPBB_ROOT_PATH}templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="{PRIVATE_MESSAGE_INFO}" hspace="3" />{PRIVATE_MESSAGE_INFO}</a>&nbsp; &nbsp;<a href="{U_LOGIN_LOGOUT}" class="mainmenu"><img src="{U_PHPBB_ROOT_PATH}templates/subSilver/images/icon_mini_login.gif" width="12" height="13" border="0" alt="{L_LOGIN_LOGOUT}" hspace="3" />{L_LOGIN_LOGOUT}</a>&nbsp;</span></td>
					</tr>
				</table></td>
			</tr>
		</table>

		<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
			<tr>
				<td valign="top" align="right" width="100%" height="5" >
					<form name="search_block" method="post" action="{U_SEARCH}" onsubmit="return checkSearch()">
						<a href="{U_SEARCH}" class="gen"><span class="gen">{L_SEARCH}</span></a>:
						<input class="post" type="text" name="search_keywords" size="15" value="...?"
							onfocus="if(this.value=='...?'){this.value='';}"
							onblur="if(this.value==''){this.value='...?';}">
						<select class="post" name="search_engine">
							{L_SEARCH_SITE}
							{L_SEARCH_FORUM}
							{L_SEARCH_KB}
							{L_SEARCH_PAFILEDB}
							{L_SEARCH_GOOGLE}
						</select>
						<input type="hidden" name="search_fields" value="all">
						<input type="hidden" name="show_results" value="topics">
						<input class="mainoption" type="submit" value="Search">
					</form>
				</td>
				<td valign="top" align="left" width="5" height="5" >&nbsp;</td>
			</tr>
		</table>

		<!-- BEGIN phpbb_stats -->
		<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
			<tr>
				<td align="left" valign="top" ><span class="gensmall">
					<!-- BEGIN switch_user_logged_in -->
					{LAST_VISIT_DATE}<br />
					<!-- END switch_user_logged_in -->
					{CURRENT_TIME}<br /></span>
				</td>
				<td align="right" valign="top" >
					<!-- BEGIN switch_user_logged_in -->
					<a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a><br /><a href="{U_SEARCH_SELF}" class="gensmall">{L_SEARCH_SELF}</a><br />
					<!-- END switch_user_logged_in -->
					<a href="{U_SEARCH_UNANSWERED}" class="gensmall">{L_SEARCH_UNANSWERED}</a>
				</td>
			</tr>
		</table>
		<!-- END phpbb_stats -->
