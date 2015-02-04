<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) 2010  Youjoomla.com. All Rights Reserved.            ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla.com                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/
/* 
	Joomla! Template Based on YJSG Framework @since 2.0.0
*/
defined( '_JEXEC' ) or die( 'Restricted index access' );

if (!defined( 'YJSGRUN' )) {
	echo JText::_('YJSG_PLUGIN_NOT_FOUND');
	exit;
}
require( YJSGCORE_PATH );/* YJSGFramework main functions*/
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="<jdoc:include type="htmlclass" />">
<head>
<?php require( YJSG_HEAD );/* <head> files containing css , js and php */?>
</head>
<body id="stylef<?php echo $default_font_family ?>">
	<div class="tpl_component">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
	<?php echo $yjsg_js;// do not remove.these are site js vars ?>
</body>
</html>
