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
<link rel="stylesheet" href="{U_PHPBB_ROOT_PATH}{TEMPLATE_ROOT_PATH}{T_HEAD_STYLESHEET}" type="text/css" >
<!-- Then load addon template *.css definition for mx, located in the the portal template folder -->
<link rel="stylesheet" href="{U_PORTAL_ROOT_PATH}{TEMPLATE_ROOT_PATH}mx_addon.css" type="text/css" >

<!-- Optionally, redefine some defintions for gecko browsers -->
<!-- BEGIN switch_gecko -->
<link rel="stylesheet" href="{U_PORTAL_ROOT_PATH}{TEMPLATE_ROOT_PATH}/gecko.css" type="text/css" > 
<!-- END switch_gecko -->

{MX_ADDITIONAL_CSS_FILES}
{MX_ICON_CSS}

<!-- IF ENABLE_PM_POPUP -->
<script language="javascript" type="text/javascript"><!--
	if( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');
	}
// --></script>
<!-- ENDIF -->

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

<script language="javascript" type="text/javascript" src="{U_PORTAL_ROOT_PATH}modules/mx_shared/lib/rollout.js"></script>
<script language="javascript" type="text/javascript" src="{U_PORTAL_ROOT_PATH}modules/mx_shared/lib/rollout_main.js"></script>
<script language="javascript" type="text/javascript" src="{U_PORTAL_ROOT_PATH}modules/mx_shared/lib/Common.js"></script>
<script language="javascript" type="text/javascript" src="{U_PORTAL_ROOT_PATH}modules/mx_shared/lib/Toggle.js"></script>
{MX_ADDITIONAL_JS_FILES}
{MX_ADDITIONAL_HEADER_TEXT}

</head>
<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">

<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="1" border="0" align="center" class="mx_main_table">
	<tr>
		<td class="bodyline">

			<table width="100%" cellspacing="0" cellpadding="2" border="0" class="mx_header_table">
				<tr>
					<td class="row3" width="25%" align="left" valign="top"><a href="{U_INDEX}"><img src="{LOGO}" border="0" alt="{L_INDEX}" vspace="1"/></a></td>
					<td class="row3" width="50%" align="center" valign="middle">{PAGE_ICON}<span class="pagetitle">{PAGE_TITLE}</span></td>
					<td class="row3" width="25%" align="right" valign="top"><span class="sitetitle">{SITENAME}</span><br /><span class="sitetitle_desc">{SITE_DESCRIPTION}</span></td>
				</tr>
				<tr>
					<td class="row2" align="center" valign="middle" colspan="3">
						{OVERALL_NAVIGATION}
					</td>
				</tr>

				<tr>
					<td class="cat" align="center" valign="middle" colspan="3">
						<table cellspacing="1" cellpadding="1" border="0">
							<tr>
								<td align="center" valign="middle" nowrap >
											<a href="{U_INDEX}" class="mainmenu"><img src="{NAV_IMAGES_HOME}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_HOME}</a></span>
								</td>
								<td align="center" valign="middle" nowrap>
											<a href="{U_INDEX_FORUM}" class="mainmenu"><img src="{NAV_IMAGES_FORUM}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_INDEX_FORUM}" class="mainmenu">{L_FORUM}</a></span>
								</td>
								<td align="center" valign="middle" nowrap>
											<!-- IF USER_LOGGED_IN -->
											<a href="{U_PROFILE}" class="mainmenu"><img src="{NAV_IMAGES_PROFILE}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_PROFILE}" class="mainmenu">{L_PROFILE}</a></span>
											<!-- ENDIF -->
								</td>
								<td align="center" valign="middle" nowrap>
											<a href="{U_FAQ}" class="mainmenu"><img src="{NAV_IMAGES_FAQ}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_FAQ}" class="mainmenu">{L_FAQ}</a></span>
								</td>
								<!--
										<td align="center" valign="middle" nowrap>
											<a href="{U_SEARCH}" class="mainmenu"><img src="{NAV_IMAGES_SEARCH}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_SEARCH}" class="mainmenu">{L_SEARCH}</a></span>
										</td>
								-->
								<td align="center" valign="middle" nowrap>
											<a href="{U_MEMBERLIST}" class="mainmenu"><img src="{NAV_IMAGES_MEMBERS}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_MEMBERLIST}" class="mainmenu">{L_MEMBERLIST}</a></span>
								</td>
								<td align="center" valign="middle" nowrap>
											<a href="{U_GROUP_CP}" class="mainmenu"><img src="{NAV_IMAGES_GROUPS}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS}</a></span>
								</td>
								<td align="center" valign="middle" nowrap>
								<!-- IF USER_LOGGED_IN -->
									<a href="{U_PRIVATEMSGS}" class="mainmenu"><img src="{NAV_IMAGES_PRIVMSG}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_PRIVATEMSGS}" class="mainmenu">{L_PRIVATEMSGS}</a></span>
								<!-- ENDIF -->
								</td>
							</tr>

						</table>
					</td>
				</tr>

				<!-- BEGIN editcp -->
				<tr>
					<td class="row2" align="center" valign="middle" colspan="3">
						<div class="editCP_switch" style="display: {editcp.EDITCP_SHOW};">
							<form action="{editcp.EDIT_ACTION}" method="post" class="mx_editform">
								<table width="100%" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td align="right">
											{editcp.EDIT_IMG}
											{editcp.S_HIDDEN_FORM_FIELDS}
										</td>
									</tr>
								</table>
							</form>
						</div>
					</td>
				</tr>
				<!-- END editcp -->

			</table>

			<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
				<tr>
					<td align="center" valign="middle" nowrap>
						<a href="{U_LOGIN_LOGOUT}" class="mainmenu"><img src="{NAV_IMAGES_LOGIN_LOGOUT}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_LOGIN_LOGOUT}" class="mainmenu">{L_LOGIN_LOGOUT}</a></span>
					</td>
					<td align="center" valign="middle" nowrap>
						<!-- IF USER_LOGGED_OUT -->
						<a href="{U_REGISTER}" class="mainmenu"><img src="{NAV_IMAGES_REGISTER}" class="mx_icon" border="0" alt="" hspace="1" align="middle" /></a><span class="mainmenu"><a href="{U_REGISTER}" class="mainmenu">{L_REGISTER}</a></span>
						<!-- ENDIF -->
					</td>
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

			<!-- IF PHPBB_STATS -->
			<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
				<tr>
					<td align="left" valign="top" ><span class="gensmall">
						<!-- IF USER_LOGGED_IN -->
						{LAST_VISIT_DATE}<br />
						<!-- ENDIF -->
						{CURRENT_TIME}<br /></span>
					</td>
					<td align="right" valign="top" >
						<!-- IF USER_LOGGED_IN -->
						<a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a><br /><a href="{U_SEARCH_SELF}" class="gensmall">{L_SEARCH_SELF}</a><br />
						<!-- ENDIF -->
						<a href="{U_SEARCH_UNANSWERED}" class="gensmall">{L_SEARCH_UNANSWERED}</a>
					</td>
				</tr>
			</table>
			<!-- ENDIF -->
