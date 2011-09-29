<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//                       				                             //
//                  Author : solo (www.wolfpackclan.com)                     //
//                  multiMenu v1.8				                             //
//  ------------------------------------------------------------------------ //

global $xoopsModuleConfig, $xoopsModule, $xoopsConfig;
$Help = isset($_GET['Help']) ? intval($_GET['Help']) : 1;
$Help = sprintf("%02d",$Help);
$myts =& MyTextSanitizer::getInstance();

	$tblcolor=Array();
	$tblcolor[1]=$tblcolor[2]=$tblcolor[3]=$tblcolor[4]=$tblcolor[5]=$tblcolor[6]="#DDE";
	$tblcolor[0]="#DDE";

	if ($Help == '01') { $help = _AD_MULTIMENU_GUIDE_GENERAL ; }
	if ($Help == '02') { $help = _AD_MULTIMENU_GUIDE_PREF ; }
	if ($Help == '03') { $help = _AD_MULTIMENU_GUIDE_INDEX ; }
	if ($Help == '04') { $help = _AD_MULTIMENU_GUIDE_BLOCKS ; }
	if ($Help == '05') { $help = _AD_MULTIMENU_GUIDE_TEMPLATE ; }
	if ($Help == '06') { $help = _AD_MULTIMENU_GUIDE_MENU ; }

$tblcolor[intval($Help)]="white";

		echo "
<div id='navcontainer'>
<ul style='padding: 1px 0; margin-left: 0; font: bold 12px Verdana, sans-serif; '>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='index.php?op=help&Help=01' style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: ".$tblcolor[1]."; text-decoration: none; '>
"._AD_MULTIMENU_GUIDET_GENERAL."</a></li>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='index.php?op=help&Help=02' style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: ".$tblcolor[2]."; text-decoration: none; '>
"._AD_MULTIMENU_GUIDET_PREF."</a></li>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='index.php?op=help&Help=03' style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: ".$tblcolor[3]."; text-decoration: none; '>
"._AD_MULTIMENU_GUIDET_INDEX."</a></li>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='index.php?op=help&Help=04' style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: ".$tblcolor[4]."; text-decoration: none; '>
"._AD_MULTIMENU_GUIDET_BLOCKS."</a></li>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='index.php?op=help&Help=05' style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: ".$tblcolor[5]."; text-decoration: none; '>
"._AD_MULTIMENU_GUIDET_TEMPLATE."</a></li>

<li style='list-style: none; margin: 0; display: inline; '>
<a href='info.php?op=help&Help=06' style='padding: 1px 0.5em; margin-left: 1px; border: 1px solid #778; background: ".$tblcolor[6]."; text-decoration: none; '>
"._AD_MULTIMENU_GUIDET_MENU."</a></li>
";

echo"</ul>
</div>";

?>