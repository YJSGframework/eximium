<?php 
/**
* @package Yjsg plugin
* @author Youjoomla.com
* @website Youjoomla.com 
* @copyright	Copyright (c) since 2007 Youjoomla.com.
* @license PHP files are released under GNU/GPL V2 Copyleft License.CSS / LESS / JS / IMAGES are Copyrighted material
**/
defined( '_JEXEC' ) or die( 'Restricted index access' );
/*Yjsg Shortcode replace */

	switch ($shortcode['type']) {
        case "yjsglink":
            foreach ($matches as $index => $match) {
                
				$linkhref  = $matches[$index][1];
				$linktext  = $matches[$index][2];

				$replacement  = '<a';
				$replacement .= ' href="'.$linkhref.'"';
                $replacement .= '>';
			    $replacement .= $linktext;
                $replacement .= '</a>';
                $text = str_replace($matches[$index][0], $replacement, $text);
            }
            break;
	}