<?php 
/**
* @package Yjsg plugin
* @author Youjoomla.com
* @website Youjoomla.com 
* @copyright	Copyright (c) since 2007 Youjoomla.com.
* @license PHP files are released under GNU/GPL V2 Copyleft License.CSS / LESS / JS / IMAGES are Copyrighted material
**/
defined( '_JEXEC' ) or die( 'Restricted index access' );

/*Yjsg Shortcode array */

$shortcodes ['yjsglink']=
         array(
            "check" => "[yjsglink",
            "type" => "yjsglink",
            "match" => "/\[yjsglink.*?linkhref\=\"(.*?)\".*?linktext\=\"(.*?)\".*?\]/i",
            "replace" => "/\[yjsglink(.*?)\]/s"
        );