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
define("_MI_MULTIMENU_MM_INDEX_".$idMenu, "Afficher dans l'index le menu ".$idMenu);
define("_MI_MULTIMENU_MM_TITLE_".$idMenu,	"Titre du Menu".$idMenu);
}

define("_MI_MULTIMENU_NAME_A",	"multiMenu A");
define("_MI_MULTIMENU_NAME_B",	"multiMenu B");
define("_MI_MULTIMENU_DESC",		"Permet de cr�er jusqu'� 8 menus personnalis�s diff�rents.");

define("_MI_MULTIMENU_NAME_ADMIN",	"Bloc Admin");
define("_MI_MULTIMENU_TEXT_INDEX",	"Texte d'introduction de la page d'index");
define("_MI_MULTIMENU_TEXT_INDEXDSC","Ins�rez ici le texte d'introduction<br />� afficher dans la page d'accueil");
define("_MI_MULTIMENU_WELCOME",	"<div align='center'>Bienvenue dans multiMenu 1.8. 
<i>\"Quand multiMenu devient Dynamique !\"</i>


Pour plus d'informations ou pour rapporter d'�ventuels beugs, visitez <a href='http://www.wolfpackclan.com/wolfactory/' target='_blank'>WolFactory</a>.

:-D
</div>
<div align='left'>Solo</div>

<div align='left'>Note : pour �diter ce texte, allez dans les pr�f�rences du module.</div>");
define("_MI_MULTIMENU_SHOW_MAIN",	"Afficher la page principale :");
define("_MI_MULTIMENU_DISPLAY_NAV",	"Afficher le menu de navigation :");

define("_MI_MULTIMENU_MM01_INDEX",	"Afficher Menu 1 dans l'index");
define("_MI_MULTIMENU_MM02_INDEX",	"Afficher Menu2 dans l'index");
define("_MI_MULTIMENU_MM03_INDEX",	"Afficher Menu3 dans l'index");
define("_MI_MULTIMENU_MM04_INDEX",	"Afficher Menu4 dans l'index");
define("_MI_MULTIMENU_MM05_INDEX",	"Afficher Liens Admin dans l'index");

define("_MI_MULTIMENU_MM01_TITLE",	"Titre Menu 1");
define("_MI_MULTIMENU_MM02_TITLE",	"Titre Menu 2");
define("_MI_MULTIMENU_MM03_TITLE",	"Titre Menu 3");
define("_MI_MULTIMENU_MM04_TITLE",	"Titre Menu 4");
define("_MI_MULTIMENU_MM05_TITLE",	"Titre Menu Admin");

define("_MI_MULTIMENU_INDEX",		"Index");
define("_MI_MULTIMENU_ADMIN",		"Admin");
define("_MI_MULTIMENU_READ",		"Lectures : ");
define("_MI_MULTIMENU_IMAGE_WIDTH",	"Largeur d'image par d�faut : ");
define("_MI_MULTIMENU_ICONS",		"Afficher les ic�nes : ");

define("_MI_MULTIMENU_BANNER_DISP",	"Afficher la banni�re :");
define("_MI_MULTIMENU_BANNER",	"Banni�re");
define("_MI_MULTIMENU_MODULENAME",	"Nom du module");
define("_MI_MULTIMENU_NONE",		"- Rien -");
define("_MI_MULTIMENU_THEME_TYPE",	"Type de menu � afficher dans le th�me :");
define("_MI_MULTIMENU_THEME_TABLE",	"Table");
define("_MI_MULTIMENU_THEME_PATH",	"Chemin");

?>