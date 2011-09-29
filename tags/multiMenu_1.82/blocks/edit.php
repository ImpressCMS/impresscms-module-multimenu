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

$form = '
<table cellspacing="5" cellspading="5">
<tbody>
	<th>'._MB_MULTIMENU_CAT_BLOCK.'</th>
	<th>'._MB_MULTIMENU_CAT_LINKS.'</th>
	<tr>
	<td>
';

// Format
        $form.= _MB_MULTIMENU_FORMAT.'&nbsp;<select name="options[]">';

        $form.= '<option value="menu"';
        if ($options[0] == "menu") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_MENUSTAND.'</option>';

        $form.= '<option value="dyn_01"';
        if ($options[0] == "dyn_01") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_01.'</option>';

        $form.= '<option value="dyn_02"';
        if ($options[0] == "dyn_02") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_02.'</option>';

        $form.= '<option value="dyn_07"';
        if ($options[0] == "dyn_07") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_07.'</option>';

        $form.= '<option value="dyn_03"';
        if ($options[0] == "dyn_03") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_03.'</option>';

        $form.= '<option value="dyn_08"';
        if ($options[0] == "dyn_08") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_08.'</option>';

        $form.= '<option value="dyn_09"';
        if ($options[0] == "dyn_09") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_09.'</option>';

        $form.= '<option value="dyn_04"';
        if ($options[0] == "dyn_04") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_04.'</option>';

        $form.= '<option value="dyn_05"';
        if ($options[0] == "dyn_05") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_05.'</option>';

        $form.= '<option value="dyn_06"';
        if ($options[0] == "dyn_06") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_06.'</option>';

		$form.= '<option value="dyn_10"';
        if ($options[0] == "dyn_10") {
        $form.= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DYNAMIC_10.'</option>';

		$form.= '<option value="pic"';
        if ($options[0] == "pic") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_PIC.'</option>';

        $form.= '<option value="picscroll"';
        if ($options[0] == "picscroll") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_PICSCROLL.'</option>';

        $form.= '<option value="picslide"';
        if ($options[0] == "picslide") {
                $form .= ' selected="selected"';

        }
        $form.= '>'._MB_MULTIMENU_PICSLIDE.'</option>';

        $form.= '<option value="ul"';
        if ($options[0] == "ul") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_LIST_UL.'</option>';


        $form.= '<option value="ol"';
        if ($options[0] == "ol") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_LIST_OL.'</option>';


        $form.= '<option value="scrollist"';
        if ($options[0] == "scrollist") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_SCROLLIST.'</option>';

        $form.= '<option value="slidelist"';
        if ($options[0] == "slidelist") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_SLIDELIST.'</option>';

        $form.= '<option value="droplist"';
        if ($options[0] == "droplist") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_DROPLIST.'</option>';

        $form.= '<option value="selectlist"';
        if ($options[0] == "selectlist") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_SELECTLIST.'</option>';


        $form.= '</select>';

$form.= '
</td>
<td>
';

// Link type to display

        $form.= _MB_MULTIMENU_DISPLAY.'&nbsp;<select name="options[]">';

        $form.= '<option value="all"';
        if ($options[1] == "all") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_ALL.'</option>';

        $form.= '<option value="0"';
        if ($options[1] == "0") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_MAINLINK.'</option>';

        $form.= '<option value="4"';
        if ($options[1] == "4") {
                $form .= 'selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_CATEGORY.'</option>';

        $form.= '<option value="1"';
        if ($options[1] == "1") {
                $form .= 'selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_PERMSUBLINK.'</option>';

        $form.= '<option value="2"';
        if ($options[1] == "2") {
                $form .= 'selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_SUBLINK.'</option>';

        $form.= '<option value="3"';
        if ($options[1] == "3") {
                $form .= 'selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_NOTE.'</option>';

        $form.= '</select>';

$form.= '
</td>
</tr>
<tr>
<td>
';

// Affichage des colonnes

        $form.= _MB_MULTIMENU_COLUMNS.'&nbsp;<select name="options[]">';

        $form.= '<option value="1"';
        if ($options[2] == "1") {
                $form .= ' selected="selected"';
        }
        $form.= '>1</option>';

        $form.= '<option value="2"';
        if ($options[2] == "2") {
                $form .= ' selected="selected"';
        }
        $form.= '>2</option>';

        $form.= '<option value="3"';
        if ($options[2] == "3") {
                $form .= 'selected="selected"';
        }
        $form.= '>3</option>';

        $form.= '<option value="4"';
        if ($options[2] == "4") {
                $form .= 'selected="selected"';
        }
        $form.= '>4</option>';

        $form.= '<option value="5"';
        if ($options[2] == "5") {
                $form .= 'selected="selected"';
        }
        $form.= '>5</option>';

        $form.= '<option value="6"';
        if ($options[2] == "6") {
                $form .= 'selected="selected"';
        }
        $form.= '>6</option>';

        $form.= '</select><p />';
$form.= '
</td>
<td>
';

// Ordre d'affichage

        $form.= _MB_MULTIMENU_ORDER.'&nbsp;<select name="options[]">';

        $form.= '<option value="weight ASC"';
        if ($options[3] == "weight ASC") {
                $form .= 'selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_ORDER_WEIGHT_ASC.'</option>';

        $form.= '<option value="title ASC"';
        if ($options[3] == "title ASC") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_ORDER_TITLE_ASC.'</option>';

        $form.= '<option value="title DESC"';
        if ($options[3] == "title DESC") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_ORDER_TITLE_DESC.'</option>';

    	  $form.= '</select><p />';
$form.= '
</td>
</tr>
	<th>'._MB_MULTIMENU_CAT_TITLE.'</th>
	<th>'._MB_MULTIMENU_CAT_IMAGE.'</th>
<tr>
<td>
';

// Affichage du titre

	$form .= _MB_MULTIMENU_DISPLAYTITLE."&nbsp;<input type='radio' id='options[]' name='options[4]' value='1'";
	if ( $options[4] == 1 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._YES."&nbsp;<input type='radio' id='options[]' name='options[4]' value='0'";
	if ( $options[4] == 0 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._NO."<br />";

// Nombre de charact�re

	  $form.= 	_MB_MULTIMENU_CHARS.'&nbsp;<input type="text" size="4" name="options[]" value="'.$options[5].'" />&nbsp;'._MB_MULTIMENU_LENGTH.'<p />';
$form.= '
</td>
<td>
';

// Affichage de l'image

	$form .= _MB_MULTIMENU_DISPLAYPIC."&nbsp;<input type='radio' id='options[]' name='options[6]' value='1'";
	if ( $options[6] == 1 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._YES."&nbsp;<input type='radio' id='options[]' name='options[6]' value='0'";
	if ( $options[6] == 0 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._NO."<br />";

// Largeur image

	  $form.= _MB_MULTIMENU_PICSIZE . '<input type"text" size="4" name="options[]" value="' . $options[7] . '" />&nbsp;'._MB_MULTIMENU_PICSIZEPX.'<p />';


$form.= '
</td>
</tr>
	<th>'._MB_MULTIMENU_CAT_SCROLL.'</th>
	<th>'._MB_MULTIMENU_CAT_RANDOM.'</th>
<tr>
<td>
';

// Largeur block

	  $form.= _MB_MULTIMENU_BLOCK_WIDTH . '<input type="text" size="4" name="options[]" value="'. $options[8].'" /><br /> ' . _MB_MULTIMENU_BLOCK_WIDTHI. '<br />';

// Hauteur

	  $form.= _MB_MULTIMENU_BLOCK_HEIGHT. '<input type="text" size="4" name="options[]" value="'.$options[9].'" /><br /><br />';


// Dynamic sublink color

	  $form.= _MB_MULTIMENU_BLOCK_SUBMENUCOLOR. '<input type="text" size="4" name="options[]" value="'.$options[10].'" /><br /><br />';

// Dynamic sublink color

	  $form.= _MB_MULTIMENU_DYNMENULATENCY. '<input type="text" size="4" name="options[]" value="'.$options[11].'" /><br /><br />';

// Vitesse

        $form.= _MB_MULTIMENU_MARQUEE_DELAY.'&nbsp;<select name="options[]">';

        $form.= '<option value="1"';
        if ($options[12] == "1") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_MARQUEE_SLOW.'</option>';

        $form.= '<option value="2"';
        if ($options[12] == "2") {
                $form .= ' selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_MARQUEE_STANDARD.'</option>';

        $form.= '<option value="3"';
        if ($options[12] == "3") {
                $form .= 'selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_MARQUEE_FAST.'</option>';


        $form.= '<option value="4"';
        if ($options[12] == "4") {
                $form .= 'selected="selected"';
        }
        $form.= '>'._MB_MULTIMENU_MARQUEE_VERYFAST.'</option>';

        $form.= '</select>';

$form.= '
</td>
<td>
';
// Liens al�atoires

	$form .= _MB_MULTIMENU_RANDOM.'&nbsp;<input type="radio" id="options[]" name="options[13]" value="1"';
	if ( $options[13] == 1 ) {
		$form .= 'checked="checked"';
	}
	$form .= ' />&nbsp;'._YES.'&nbsp;<input type="radio" id="options[]" name="options[13]" value="0"';
	if ( $options[13] == 0 ) {
		$form .= ' checked="checked"';
	}
	$form .= ' />&nbsp;'._NO.'<br />';

	  $form .= _MB_MULTIMENU_RANDOMLIMIT . '<input type="text" size="4" name="options[]" value="' . $options[14] . '" /><br /><br /><br /><br />
';

$form.= '
</td>
</tr>
';
?>
