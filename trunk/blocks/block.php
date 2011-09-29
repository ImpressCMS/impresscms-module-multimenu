<?php
//  ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System				//
//                    Copyright (c) 2004 XOOPS.org					//
//                       <http://www.xoops.org/>					//
//													//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)			//
//                                 	- herve (www.herve-thouzard.com)		//
//                  multiMenu v1.8							//
//  ------------------------------------------------------------------------	//

	global $xoopsDB, $xoopsUser, $xoopsConfig, $xoopsModule; 
	$myts =& MyTextSanitizer::getInstance();
	$group = is_object($xoopsUser) ? $xoopsUser->getGroups() : array(XOOPS_GROUP_ANONYMOUS);
	$current_page = $_SERVER['SCRIPT_NAME'];
	$mainid = '';
	$rand  = '';
	$randlimit = '';
	$columns_limit = 0;
	$columns_limit_drop = 0;
   	$block = array();
	$block['css_file'] = $xoopsConfig['theme_set'];

// Check user agent (SEO). If Spider, display list style
if (
eregi( "bot", 	getenv("HTTP_USER_AGENT") ) 	|| 
eregi( "spider", 	getenv("HTTP_USER_AGENT") ) 	|| 
eregi( "robot", 	getenv("HTTP_USER_AGENT") ) 	|| 
eregi( "crawler", getenv("HTTP_USER_AGENT") ) ) 
	{
	$block['format'] = "ul";
	} else {
	$block['format'] = $options[0];
	}

// General options regarding block type
	$width = 				'';
	$block['marquee'] = 		'';
	$block['columns'] = 		$options[2];
	$block['block_size'] = 		$options[8];
	$block['marquee_height'] = 	$options[9];
	$block['submenu_color'] = 	$options[10];
	$block['latency'] = 			$options[11];
	$block['marquee_delay'] = 	$options[12];
	$block['mm'] = 			$options[15];

if 	($options[1] != "all" ) 	{$where = "hide = 1 AND submenu = ".$options[1]."";} else {$where = "hide = 1";}
if 	($options[0] == "scrollist") 	{$block['marquee'] = 'behavior="scroll" direction="up"'; $block['format'] = "ul";} 
if 	($options[0] == "slidelist") 	{$block['marquee'] = 'behavior="slide" direction="up"'; $block['format'] = "ul";} 
if 	($options[0] == "picscroll" ) {$block['marquee'] = 'behavior="scroll" direction="up"';} 

if ($options[0] == 'menu' 
 OR $options[0] == 'ul' 
 OR $options[0] == 'ol' 
 OR $options[0] == 'scrollist'
 OR $options[0] == 'slidelist' )
{$align = 'align="absmiddle" ';} else { $align= ''; }

// Random function
if ($options[0] != "droplist" or $options[0] != "selectlist") { 
	$randresult = $xoopsDB -> queryF( "	SELECT COUNT(*) 
							FROM " .$xoopsDB->prefix("multimenu").$options[15]." 
							WHERE $where");
	list( $total )=$xoopsDB->fetchRow($randresult);}

if 	($options[13]) { 
	$randlimit = $options[14];
	$total = $total-1-$randlimit;
	$rand  = rand(0,$total);
	} 

///////////////////////// Create Links ///////////////////////// 
// SQL query
    	$sql = 	"SELECT id, pid, groups, link, submenu, title, target, imageurl, weight
			FROM ".$xoopsDB->prefix('multimenu').$options[15]." 
			WHERE $where
			ORDER BY ".$options[3];

	$result = $xoopsDB->queryF($sql ,$randlimit ,$rand);

	while ( $myrow = $xoopsDB->fetchArray($result) ) {

// Group access
	$groups = explode(" ",$myrow['groups']);
	if (count(array_intersect($group,$groups)) > 0) {

// Sub link Display
if ( $myrow['link'] ) { $link = $myrow['link']; } else { $link = ''; }

	if ( !empty($xoopsModule) && 
		eregi( "/".$xoopsModule->getVar('dirname')."/", $myrow['link'] )  
		&& ( $myrow['submenu'] < 1 || $myrow['submenu'] > 2 )
	   ) 	{ $mainid = $myrow['id']; }


/*
if (  $myrow['submenu'] == 0 ) 	{ $mainid = ''; }
// echo pathinfo($link, PATHINFO_DIRNAME).'<br />';
	if (  @eregi( pathinfo($link, PATHINFO_DIRNAME), pathinfo($current_page, PATHINFO_DIRNAME) )  
		&& ( $myrow['submenu'] < 1 || $myrow['submenu'] > 2 )
	   ) 	{ $mainid = $myrow['id']; }
*/

// Test : link is sub of a main link and do we display it
if ( 	$myrow['pid'] == $mainid 
//	&& eregi( "/".$xoopsModule->getVar('dirname')."/", $link) 	//Unquote to display dynamic sublink under same module directory
	&& ( $myrow['submenu'] == 2 )
	|| ( $myrow['submenu'] != 2 ) 
    ) {

	$imenu['submenu'] = $myrow['submenu']; 

///////////////////////// Create Titles ///////////////////////// 
// Link title
if ( eregi('{alt}', $myrow['title']) )  {
	$titles = explode( '{alt}', $myrow['title'] ); 
	$title = $myts->makeTareaData4Show($titles[0]);
	$alt_title = strip_tags( $myts->makeTareaData4Show( $titles[1] ) );
 } else {
	$title = $myts->makeTareaData4Show($myrow['title']);
	$alt_title = strip_tags($myts->makeTareaData4Show($myrow['title']));
}

 if ( (($options[0] == 'dyn_02' OR $options[0] == 'dyn_03' )
 AND ( $myrow['submenu'] == 1  OR $myrow['submenu'] == 2 ) ) OR $options[0] == 'dyn_06' OR $options[0] == 'dyn_07' OR $options[0] == 'dyn_10' )
     { $title = addslashes($title);  $alt_title = addslashes($alt_title); }  // Get ride of special characters which cause dynamic's menu crash

// If link title is too long...
if ( $options[4] ) {
 	//if ( $options[0] == 'dyn_06') { $title = strip_tags($title); } //Get ride of html if context menu
	if (strlen($title) >= $options[5]) {
		$mm_title = $myts->makeTboxData4Show(substr($title,0,($options[5]-1)))."...";
	} else {
		$mm_title = $myts->makeTareaData4Show($title);
	}
		$imenu['title'] = $mm_title;
	} else {
		$imenu['title'] = '';
}

// PM detection and conversion
if (	eregi("{pm_new}", $title) 	|| 
	eregi("{pm_readed}", $title) 	|| 
	eregi("{pm_total}", $title)     ||
	eregi("{user_id}", $title)
	)
 		{
    global $xoopsUser;
	$new_messages = 0;
	$old_messages = 0;
	$som = 0;
	$user_id = 0;
    if (is_object($xoopsUser)) {
	    $user_id = $xoopsUser->getVar('uid');
        $pm_handler =& xoops_gethandler('privmessage');
        $uid = $xoopsUser->getVar('uid');
        $criteria_new = new CriteriaCompo(new Criteria('read_msg', 0));
        $criteria_new->add(new Criteria('to_userid', $xoopsUser->getVar('uid')));
        $new_messages = $pm_handler->getCount($criteria_new);
 //   if ( $new_messages ) {
        $criteria_old = new CriteriaCompo(new Criteria('read_msg', 1));
        $criteria_old->add(new Criteria('to_userid', $xoopsUser->getVar('uid')));
        $old_messages = $pm_handler->getCount($criteria_old);
	  $som =  $old_messages +  $new_messages;

	$title = preg_replace('/\{pm_new\}/', 	$new_messages, 	$title); 
	$title = preg_replace('/\{pm_readed\}/', 	$old_messages, 	$title); 
	$title = preg_replace('/\{pm_total\}/', 	$som, 		$title); 
	$title = preg_replace('/\{user_id\}/', 	$user_id, 		$title); 

	$imenu['title'] = $title;

    	} else { $imenu['title'] = 'Message';}
	
//	$links = XOOPS_URL."/viewpmsg.php"; // Unquote if you want to automatically send to the PM box
}

// Create and remove html for alt title
// $alt_title = strip_tags($myts->makeTareaData4Show($title));
$imenu['alt_title'] = $alt_title;

//gère ces balises PM dans le title et le alt (pour les blocs)
if (		eregi("{pm_new}", $imenu['alt_title']) || 
			eregi("{pm_readed}", $imenu['alt_title']) || 
			eregi("{pm_total}", $imenu['alt_title']) )
 		{
		$imenu['alt_title'] = preg_replace('/\{pm_new\}/', $new_messages, $imenu['alt_title']); 
		$imenu['alt_title'] = preg_replace('/\{pm_readed\}/', $old_messages, $imenu['alt_title']); 
		$imenu['alt_title'] = preg_replace('/\{pm_total\}/', $som, $imenu['alt_title']); 
		}
//fin gestion de ces balises PM dans le title et le alt (pour les blocs)


///////////////////////// Create urls ///////////////////////// 
// Link url
if ($myrow['link']) {

    global $xoopsUser;
	$user_id = 0;
    if (is_object($xoopsUser))
	{
    $user_id = $xoopsUser->getVar('uid');
	}

// Link Type
	if (	(eregi("mailto:", $myrow['link']))  || 
		(eregi("http://", $myrow['link']))  || 
		(eregi("https://", $myrow['link'])) || 
		(eregi("file://", $myrow['link']))  || 
		(eregi("ftp://", $myrow['link'])))
 		{
		$link = $myrow['link'];
		$link = preg_replace('/\{user_id\}/', $user_id, $link); 
		} else {
		$link = XOOPS_URL."/".$myrow['link'];
		$link = preg_replace('/\{user_id\}/', $user_id, $link); 
		}

// Target function
if ($myrow['target'] != '_self') { $target = 'target="'.$myrow['target'].'" '; } else { $target = ' '; }
	$imenu['target'] = $target; 
	$imenu['target_context'] = $myrow['target']; // utilisé dans le menu contextuel 2

// Create link
	$imenu['link'] = '<a href="'.$link.'" '.$target.'title="'.$alt_title.'">';
	$imenu['linkurl'] = $link;
	$imenu['a'] = '</a>';
} else {
	$imenu['link'] = '';
	$imenu['linkurl'] = '';
	$imenu['a'] = '';
}

///////////////////////// Create images ///////////////////////// 
// Create image
if( $myrow['imageurl'] AND $options[6] ){

// Image type : relative or absolute link
	if (
		(eregi("http://", $myrow['imageurl'])) ||
		(eregi("file://", $myrow['imageurl'])) ||  
		(eregi("https://", $myrow['imageurl'])))
 	{
		$image = $myrow['imageurl'];
	} else {
		$image = XOOPS_URL.'/'.$myrow['imageurl'];
	}

// Theme and module tag replace 
		$image = str_replace('{theme}', $xoopsConfig['theme_set'], $image);

if ( !empty($xoopsModule) ) { $image = str_replace('{module}', $xoopsModule->getVar('dirname'), $image); } else { $image = str_replace('{module}', 'default', $image); }

// Image resize if bigger
	if 	( $options[7] == '' ) {
		$image_width = '';
		$width = '1';
	} else {
		$image_size = getimagesize("$image");
		$width 	= $image_size[0];
		if ($options[1] <= $width) {
		$image_width = 'width="'.$options[7].'" ';
		} else {
		$image_width = 'width="'.$width.'" ';
		}
	}

// Create image
	$imenu['image'] = '<img src="'.$image.'" '.$image_width.'alt="'.$alt_title.'" '.$align.' style="vertical-align:middle;" />';

	$imenu['imageurl'] = $image;

if ( !$width ) { 
	$imenu['image'] = '<img src="'.XOOPS_URL.'/modules/multiMenu/images/error.gif" '.$image_width.'alt="'.$alt_title.'" '.$align.' style="vertical-align:middle;" />'; }
}else {
	$imenu['image'] = "";
}

///////////////////////// Create columns for tables ///////////////////////// 
// Count column limits for category and mainlink
if ( $myrow['submenu'] != 1 AND $myrow['submenu'] != 2 ) { $columns_limit++; }
$block['columns_limit'] = $columns_limit/$options[2];

// Count column for dropdown menu or category only
if ( $myrow['submenu'] == 4 AND ( $options[0] == 'droplist' OR $options[0] == 'selectlist' ) ) { $columns_limit_drop++; }
$block['columns_limit_drop'] = $columns_limit_drop/$options[2];

$block['contents'][] = $imenu; 

} // Sublinks
} // Groups
}

return $block;
?>