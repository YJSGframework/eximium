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
defined( '_JEXEC' ) or die( 'Restricted access' );
$app 							= JFactory::getApplication();
$yjsg_params 					= $app->getTemplate(true)->params;
$template 						= $this->template;
$check_style_param 				= $yjsg_params->get("yjsg_get_styles");
if(isset($check_style_param)){
	$get_style_value			= explode('|',$yjsg_params->get("yjsg_get_styles"));
	$yjsg_get_styles			= $get_style_value[0];	
	$default_link_color			= $get_style_value[1];
	$site_link_color			= '#'.$default_link_color;	
}else{
 	$yjsg_get_styles			= $yjsg_params->get("default_color");
	$default_link_color			= '';
}
$default_font_family          	= $yjsg_params->get("default_font_family");
$logo 							= $this->baseurl.'/templates/'.$template.'/images/'.$yjsg_get_styles.'/logo.png';
if($yjsg_params->get("logo_image")){
  $logo 						= JURI::base().$yjsg_params->get("logo_image");
} 

?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="yjsg-page-error">
<head>
<title><?php echo $this->error->getCode(); ?>-<?php echo $this->title; ?></title>
<link href="<?php echo JURI::base(); ?>templates/<?php echo $template ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="<?php echo JURI::base(); ?>plugins/system/yjsg/assets/css/template.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $template ?>/css/<?php echo $yjsg_get_styles; ?>.css" rel="stylesheet" type="text/css" />
<style type="text/css">a{color:#<?php echo $default_link_color?>;}</style>
</head>
	<body id="stylef<?php echo $default_font_family ?>">
		<div class="centered">
			<div id="header">
				<img src="<?php echo $logo ?>" alt="site_logo" />
			</div>
			<h1><?php echo $this->error->getCode(); ?></h1>
			<a href="<?php echo $this->baseurl; ?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>">
				<?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?>
			</a>
			<br />
			<span class="errormsg">
			<?php echo $this->error->getMessage();?>
			</span>
		</div>
		<?php if($this->debug) : echo '<p>'.$this->renderBacktrace().'</p>';	endif; ?>
	</body>
</html>