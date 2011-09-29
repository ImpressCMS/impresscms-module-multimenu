<?php
//  ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System				//
//                    Copyright (c) 2004 XOOPS.org					//
//                       <http://www.xoops.org/>					//
//													//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)			//
//                                 	- herve (www.herve-thouzard.com)		//
//                                 	- Blueteen						//
//                  multiMenu v1.8								//
//  ------------------------------------------------------------------------	//


include_once( "admin_header.php" );
global $Menu;
xoops_cp_header();

include_once("../include/adminnav.php");
include_once("../include/helpnav.php");

echo '<br />'._AD_MULTIMENU_OPTIONS_TIPS.'<br /><br />';

echo '<p />
<div align="center">
<table class="outer" cellspacing="2" cellpadding="0" align="center">
<tr class="head">
<th colspan="2">'._AD_MULTIMENU_OPTIONS_BLOCKOPTIONS.'</th>
<th colspan="2" align="center">'._AD_MULTIMENU_OPTIONS_FORMAT.'</th>
<th colspan="2" align="center">'._AD_MULTIMENU_OPTIONS_LINKS.'</th>
<th colspan="2" align="center">'._AD_MULTIMENU_OPTIONS_TITLE.'</th>
<th colspan="2" align="center">'._AD_MULTIMENU_OPTIONS_PICTURES.'</th>
<th colspan="4" align="center">'._AD_MULTIMENU_OPTIONS_ANSET.'</th>
<th colspan="2" align="center">'._AD_MULTIMENU_OPTIONS_RANLINKS.'</th>
<th colspan="3" align="center">'._AD_MULTIMENU_OPTIONS_TPL.'</th>
</tr>
<tr class="even"><th>'._AD_MULTIMENU_OPTIONS_NUM.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MENU.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DESC.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLUMNS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TYPE.'</th>
<th>'._AD_MULTIMENU_OPTIONS_ORDER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXLENGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXWIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_WIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_HEIGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLOR.'</th>
<th>'._AD_MULTIMENU_OPTIONS_SPEED.'</th>
<th>'._AD_MULTIMENU_OPTIONS_RANLINKS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_NUMBER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_INTHEME.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TPL.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COMP.'</th>
</tr>
<tr class="odd">
<td align="right"><p align="center">1</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_PRINCMEN.'</p></td>
<td><p align="center"><nobr>'._AD_MULTIMENU_OPTIONS_DESC1.'</nobr></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_menu.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even">
<td align="right"><p align="center">2</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=220, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu02" target="wclose">'._AD_MULTIMENU_OPTIONS_SWITCHVERT.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC2.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_TYPE2.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_dyn_switchvert.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="odd">
<td align="right"><p align="center">3</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=280, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu03" target="wclose">'._AD_MULTIMENU_OPTIONS_DROPDOWNVERT.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC3.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_WIDTH3.'</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_dyn_vert.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even">
<td align="right"><p align="center">4</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=380, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu04" target="wclose">'._AD_MULTIMENU_OPTIONS_DROPDOWNVERT2.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC31.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="left">multimenu_dyn_vert2.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>

<tr class="even">
<td align="right"><p align="center">5</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=350, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu05" target="wclose">'._AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC32.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="left">multimenu_dyn_vert_css.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>

<tr class="even"><th>'._AD_MULTIMENU_OPTIONS_NUM.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MENU.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DESC.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLUMNS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TYPE.'</th>
<th>'._AD_MULTIMENU_OPTIONS_ORDER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXLENGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXWIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_WIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_HEIGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLOR.'</th>
<th>'._AD_MULTIMENU_OPTIONS_SPEED.'</th>
<th>'._AD_MULTIMENU_OPTIONS_RANLINKS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_NUMBER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_INTHEME.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TPL.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COMP.'</th>
</tr>

<tr class="even">
<td align="right"><p align="center">6</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=180, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu06" target="wclose">'._AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC4.'</p></td>
<td><p align="center">x</p></td></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_WIDTH4.'</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="left">multimenu_dyn_horiz.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>

<tr class="even">
<td align="right"><p align="center">7</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=250, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu07" target="wclose">'._AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC41.'</p></td>
<td><p align="center">x</p></td></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_WIDTH4.'</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="left">multimenu_dyn_horiz_css.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>

<tr class="odd">
<td align="right"><p align="center">8</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_TABHORIZ.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC5.'</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_dyn_linkshoriz.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even">
<td align="right"><p align="center">9</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=250, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu09" target="wclose">'._AD_MULTIMENU_OPTIONS_CONTEXT.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC6.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="left">multimenu_dyn_context.html</p></td>
<td class="xl95"><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even">
<td align="right"><p align="center">10</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=350, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu10" target="wclose">'._AD_MULTIMENU_OPTIONS_CONTEXT2.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC61.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="left">multimenu_dyn_context2.html</p></td>
<td class="xl95"><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even">
<td align="right"><p align="center">11</p></td>
<td><p align="center"><a onclick="window.open(\'\', \'wclose\', \'width=650, height=360, toolbar=no, scrollbars=yes, status=no, resizable=yes, titlebar=no, left=40, top=40\', \'false\')" href="options_help.php?op=menu11" target="wclose">'._AD_MULTIMENU_OPTIONS_TREE.'</a></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC62.'</p></td>
<td><p align="center"></p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_TYPE21.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="left">multimenu_dyn_tree.html</p></td>
<td class="xl95"><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even"><th>'._AD_MULTIMENU_OPTIONS_NUM.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MENU.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DESC.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLUMNS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TYPE.'</th>
<th>'._AD_MULTIMENU_OPTIONS_ORDER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXLENGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXWIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_WIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_HEIGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLOR.'</th>
<th>'._AD_MULTIMENU_OPTIONS_SPEED.'</th>
<th>'._AD_MULTIMENU_OPTIONS_RANLINKS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_NUMBER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_INTHEME.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TPL.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COMP.'</th>
</tr>
<tr class="even">
<td align="right"><p align="center">12</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_PICTURE.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC7.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_pic.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="odd">
<td align="right"><p align="center">13</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_SCROLLING.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC8.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_TYPE8.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_pic.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEMARQUEE.'</p></td>
</tr>
<tr class="even">
<td align="right"><p align="center">14</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_SLIDING.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC9.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_WIDTH9.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_HEIGHT9.'</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_picslide.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even"><th>'._AD_MULTIMENU_OPTIONS_NUM.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MENU.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DESC.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLUMNS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TYPE.'</th>
<th>'._AD_MULTIMENU_OPTIONS_ORDER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXLENGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXWIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_WIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_HEIGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLOR.'</th>
<th>'._AD_MULTIMENU_OPTIONS_SPEED.'</th>
<th>'._AD_MULTIMENU_OPTIONS_RANLINKS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_NUMBER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_INTHEME.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TPL.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COMP.'</th>
</tr>
<tr class="even">
<td align="right"><p align="center">15</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_LIST.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC10.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_list.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="odd">
<td align="right"><p align="center">16</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_ORDERED.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC11.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_list.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even">
<td align="right"><p align="center">17</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_SCROLLING.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC12.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_list.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEMARQUEE.'</p></td>
</tr>
<tr class="odd">
<td align="right"><p align="center">18</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_SLIDING.'</p></td>
<td x:str="Sliding up "><p align="center">'._AD_MULTIMENU_OPTIONS_DESC13.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_list.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEMARQUEE.'</p></td>
</tr>
<tr class="even"><th>'._AD_MULTIMENU_OPTIONS_NUM.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MENU.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DESC.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLUMNS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TYPE.'</th>
<th>'._AD_MULTIMENU_OPTIONS_ORDER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXLENGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_DISPHI.'</th>
<th>'._AD_MULTIMENU_OPTIONS_MAXWIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_WIDTH.'</th>
<th>'._AD_MULTIMENU_OPTIONS_HEIGHT.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COLOR.'</th>
<th>'._AD_MULTIMENU_OPTIONS_SPEED.'</th>
<th>'._AD_MULTIMENU_OPTIONS_RANLINKS.'</th>
<th>'._AD_MULTIMENU_OPTIONS_NUMBER.'</th>
<th>'._AD_MULTIMENU_OPTIONS_INTHEME.'</th>
<th>'._AD_MULTIMENU_OPTIONS_TPL.'</th>
<th>'._AD_MULTIMENU_OPTIONS_COMP.'</th>
</tr>
<tr class="odd">
<td align="right"><p align="center">19</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DROPDOWN.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC14.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_TYPE14_15.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_NOPICT.'</p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="left">multimenu_droplist.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
<tr class="even">
<td style="height: 13.5pt" align="right" height="18"><p align="center">20</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_SELBOX.'</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_DESC15.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_TYPE14_15.'</p></td>
<td><p align="center">x</p></td>
<td><p align="center"></p></td>
<td><p align="center">x</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_NOPICT.'</p></td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>x</td>
<td>x</td>
<td></td>
<td><p align="left">multimenu_droplist.html</p></td>
<td><p align="center">'._AD_MULTIMENU_OPTIONS_IEFF.'</p></td>
</tr>
</table>
</div>
';

xoops_cp_footer();
?>