<?php
//  ------------------------------------------------------------------------ 	//
//                XOOPS - PHP Content Management System    				//
//                    Copyright (c) 2004 XOOPS.org                       	//
//                       <http://www.xoops.org/>                              //
//                   										//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)         	//
//                  multimenu 1.8							//
//  ------------------------------------------------------------------------ 	//

// General settings
include_once("../../../mainfile.php");
include_once(XOOPS_ROOT_PATH."/header.php");

Global $xoopsConfig;
include_once('../language/'.$xoopsConfig['language'].'/admin.php');

$myts =& MyTextSanitizer::getInstance();

if ( !isset($_POST['op']) ) { $op = isset($_GET['op']) ? $_GET['op'] : ''; } else { $op = $_POST['op']; }

if ( $op == 'menu02' ) {$media_title = _AD_MULTIMENU_OPTIONS_SWITCHVERT_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_SWITCHVERT_DESC_TIPS;}

if ( $op == 'menu03' ) {$media_title = _AD_MULTIMENU_OPTIONS_DROPDOWNVERT_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_DROPDOWNVERT_DESC_TIPS;}

if ( $op == 'menu04' ) {$media_title = _AD_MULTIMENU_OPTIONS_DROPDOWNVERT2_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_DROPDOWNVERT2_DESC_TIPS;}

if ( $op == 'menu05' ) {$media_title = _AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS_DESC_TIPS;}

if ( $op == 'menu06' ) {$media_title = _AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ_DESC_TIPS;}

if ( $op == 'menu07' ) {$media_title = _AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS_DESC_TIPS;}

if ( $op == 'menu09' ) {$media_title = _AD_MULTIMENU_OPTIONS_CONTEXT_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_CONTEXT_DESC_TIPS;}

if ( $op == 'menu10' ) {$media_title = _AD_MULTIMENU_OPTIONS_CONTEXT2_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_CONTEXT2_DESC_TIPS;}

if ( $op == 'menu11' ) {$media_title = _AD_MULTIMENU_OPTIONS_TREEMENU_TITLE_TIPS; $media_options = _AD_MULTIMENU_OPTIONS_TREEMENU_DESC_TIPS;}

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="XOOPS" />
<title>'.$media_title.'</title>
<link rel="stylesheet" type="text/css" media="screen" href="'.XOOPS_URL.'/themes/'.$xoopsConfig['theme_set'].'/style.css" />
</head>
<body>
<div style="padding:6px; text-align:left;">
<table>
	<tr><td class="even"><h1 align="center">'.$media_title.'</h1></p></td></tr>
	<tr><td class="odd"><p>'.$media_options.'</p></td></tr>
</tanle>
</div>
</body>
</html>';

// include_once(XOOPS_ROOT_PATH."/footer.php");
?>