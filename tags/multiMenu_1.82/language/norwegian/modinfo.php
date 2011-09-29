<?php
//  ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System				//
//                    Copyright (c) 2004 XOOPS.org					//
//                       <http://www.xoops.org/>					//
//													//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)			//
//                                 	- herve (www.herve-thouzard.com)		//
//                  multiMenu v1.8								//
//  ------------------------------------------------------------------------	//

define("_MI_MULTIMENU_MODULE",	"multiMenu");
define("_MI_MULTIMENU_NAME_",		"multiMenu ");

for ($i = 1; $i <= 8; $i++) {
$idMenu = sprintf("%02d",$i);
define("_MI_MULTIMENU_NAME_".$idMenu,	"multiMenu ".$idMenu);
define("_MI_MULTIMENU_MM_INDEX_".$idMenu, "Vis i oversikt multiMenu ".$idMenu);
define("_MI_MULTIMENU_MM_TITLE_".$idMenu,	"Menytittel ".$idMenu);
}
define("_MI_MULTIMENU_NAME_A",	"multiMenu A");
define("_MI_MULTIMENU_NAME_B",	"multiMenu B");
define("_MI_MULTIMENU_NAME_ADMIN",	"Adminblokk");
define("_MI_MULTIMENU_DESC",		"Tillater oppretting av opp til 7 forskjellige egendefinerte menyer.");

define("_MI_MULTIMENU_TEXT_INDEX",	"Introduksjonstekst");
define("_MI_MULTIMENU_TEXT_INDEXDSC","Oppgi teksten som skal vises på forsiden");
define("_MI_MULTIMENU_WELCOME",	"Velkommen til multiMenu*. 

For mer informasjon eller bugrapportèring om denne modulen kan du besøke <a href='http://www.wolfpackclan.com/wolfactory/' target='_blank'>WolFactory</a>.

:-D

<div align='right'>Solo</div>

<div align='left'>*Endre denne teksten ved å gå til modulinnstillingene.</div>");
define("_MI_MULTIMENU_SHOW_MAIN",	"Vis hovedsiden");
define("_MI_MULTIMENU_DISPLAY_NAV",	"Vis navigasjonsbjelken");

define("_MI_MULTIMENU_INDEX",		"Indeks");
define("_MI_MULTIMENU_ADMIN",		"Admin");
define("_MI_MULTIMENU_READ",		"Les: ");
define("_MI_MULTIMENU_IMAGE_WIDTH",	"Standard bildebredde: ");
define("_MI_MULTIMENU_ICONS",		"Vis ikoner: ");
define("_MI_MULTIMENU_THEME",		"Meny som vises i utseendet:<br /><br />
Sett inn utseendet :<br /><font color='blue'><nobr><{include file=\"../modules/multiMenu/theme/multimenu.php\"}></nobr></font><br /><br />
<font color='red'> Merk: Bare '<i>hovedlenker</i>' vises i utseendet !</font>");

define("_MI_MULTIMENU_BANNER_DISP",	"Vis banner:");
define("_MI_MULTIMENU_BANNER",	"Banner");
define("_MI_MULTIMENU_MODULENAME",	"Modulnavn");
define("_MI_MULTIMENU_NONE",		"Ingen");
define("_MI_MULTIMENU_THEME_TYPE",	"Visningsmodus for menyen i utseendet");
define("_MI_MULTIMENU_THEME_TABLE",	"Tabell");
define("_MI_MULTIMENU_THEME_PATH",	"Bane");

?>