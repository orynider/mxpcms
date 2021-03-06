<style type="text/css">
<!--
.ddmx {
    font: 11px {T_FONTFACE1};
}
.ddmx .item1,
.ddmx .item1:hover,
.ddmx .item1-active,
.ddmx .item1-active:hover {
    padding: 3px 10px 3px 10px;
    background: {T_TR_COLOR2};
    font: 12px arial;
    color: {T_BODY_VLINK};
    font-weight: bold;
    text-decoration: none;
    display: block;
    white-space: nowrap;
    position: relative;
    line-height: normal;
    border: 1px solid {T_TR_COLOR2};
}
.ddmx .item1:hover {
    line-height: normal;
    border: 1px solid {T_TR_COLOR1};
}
.ddmx .item1-active:hover {
    line-height: normal;
    border: 1px solid {T_TR_COLOR1};
}
.ddmx .item1 img,
.ddmx .item1-active img{
    position: absolute;
    top: 4px;
    right: 1px;
    border: 0;
}
.ddmx .item2,
.ddmx .item2:hover,
.ddmx .item2-active,
.ddmx .item2-active:hover {
    padding: 3px 8px 4px 8px;
    font: 11px {T_FONTFACE1};
    color: {T_BODY_VLINK};
    font-weight: bold;
    text-decoration: none;
    display: block;
    white-space: nowrap;
    position: relative;
    z-index: 500;
}
.ddmx .item2 {
    background: {T_TR_COLOR1};
}
.ddmx .item2:hover,
.ddmx .item2-active,
.ddmx .item2-active:hover {
    background: {T_TR_COLOR2};
}
.ddmx .arrow,
.ddmx .arrow:hover {
    padding: 3px 16px 4px 8px;
}
.ddmx .item2 img,
.ddmx .item2-active img{
    position: absolute;
    top: 4px;
    right: 1px;
    border: 0;
}
.ddmx .section {
    border: 1px solid {T_TH_COLOR1};
    position: absolute;
    visibility: hidden;
    z-index: -1;
}

* html .ddmx td { position: relative; } /* ie 5.0 fix */
-->
</style>

<script type="text/javascript" src="{MX_ROOT_PATH}modules/mx_shared/mygosumenu/ie5.js"></script>
<script type="text/javascript" src="{MX_ROOT_PATH}modules/mx_shared/mygosumenu/1.1/DropDownMenuX.js"></script>

<table width="100%" cellpadding="0" cellspacing="1" border="0" class="forumline" style="border-top:none;">
    <tr>
        <td align="center">

			<table width="100%" cellspacing="0" cellpadding="0" id="menu{MENU_ID}" class="ddmx">
			<!-- BEGIN catrow -->
		    <tr>

		        <td>
		            <a class="item1" href="{catrow.CATEGORY_URL}">{catrow.CATEGORY_NAME}<img src="{TEMPLATE_IMAGES_PATH}/arrow_right.gif" width="10" height="12" alt="" /></a>
		            <div class="section">
		            	<!-- BEGIN menurow -->
		                <a class="item2" href="{catrow.menurow.U_MENU_URL}" target="{catrow.menurow.U_MENU_URL_TARGET}">{catrow.menurow.MENU_NAME}</a>
		                <!-- END menurow -->
		            </div>
		        </td>

		    </tr>
		    <!-- END catrow -->
		    </table>

		</td>
	</tr>
</table>

<!--
	/* Type of the menu: "horizontal" or "vertical" */
    this.type = "horizontal";

    /* Delay (in miliseconds >= 0): show-hide menu
     * Hide must be > 0 */
    this.delay = {
        "show": 0,
        "hide": 400
    }
    /* Change the default position of sub-menu by Y pixels from top and X pixels from left
     * Negative values are allowed */
    this.position = {
        "level1": { "top": 0, "left": 0},
        "levelX": { "top": 0, "left": 0}
    }

    /* fix ie selectbox bug ? */
    this.fixIeSelectBoxBug = true;

    /* Z-index property for .section */
    this.zIndex = {
        "visible": 500,
        "hidden": -1
    };

    // Browser detection
    this.browser = {
        "ie": Boolean(document.body.currentStyle),
        "ie5": (navigator.appVersion.indexOf("MSIE 5.5") != -1 || navigator.appVersion.indexOf("MSIE 5.0") != -1),
        "ie6": (navigator.appVersion.indexOf("MSIE 6.0") != -1)
    };

    if (!this.browser.ie) {
        this.browser.ie5 = false;
        this.browser.ie6 = false;
    }
-->

<script type="text/javascript">
 	var ddmx = new DropDownMenuX('menu' + '{MENU_ID}');
   	ddmx.type = "vertical";
 	ddmx.delay.show = 0;
 	ddmx.delay.hide = 400;
 	ddmx.position.levelX.left = 2;
 	ddmx.init();
</script>