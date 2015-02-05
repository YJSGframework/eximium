<?php
include '../../../../../plugins/system/yjsg/includes/yjsgshortcodes/templates/framework.php';
$language->load('tpl_'.$mainframe->getTemplate(), JPATH_SITE);
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo $base_link.'plugins/system/yjsg/'; ?>assets/bootstrap3/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo $base_link.'plugins/system/yjsg/'; ?>elements/css/yjsgfa.css" />
<script type="text/javascript" src="<?php echo $base_link.'plugins/system/yjsg/'; ?>assets/src/libraries/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $base_link.'plugins/system/yjsg/'; ?>assets/bootstrap3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $base_link.'plugins/system/yjsg/'; ?>elements/src/yjsgfa.js"></script>
<script type="text/javascript" src="link.js"></script>
</head>
<body>
	<div class="container">
		<h2><?php echo JText::_('YJSG_SHORTCODES_LINK_TITLE'); ?></h2>
		<form role="form">
			<div class="form-group">
				<label for="linkhref" data-toggle="tooltip" data-placement="top" title="<?php echo JText::_('YJSG_SHORTCODES_LINK_LINKHREF_DESC'); ?>"><?php echo JText::_('YJSG_SHORTCODES_LINK_LINKHREF_LABEL'); ?></label>
				<input type="text" class="form-control" id="linkhref" name="linkhref" placeholder="<?php echo JText::_('YJSG_SHORTCODES_LINK_LINKHREF_HINT'); ?>" onClick="this.select()" />
			</div>
			<div class="form-group">
				<label for="linktext" data-toggle="tooltip" data-placement="top" title="<?php echo JText::_('YJSG_SHORTCODES_LINK_LINKTEXT_DESC'); ?>"><?php echo JText::_('YJSG_SHORTCODES_LINK_LINKTEXT_LABEL'); ?></label>
				<input type="text" class="form-control" id="linktext" name="linktext" placeholder="<?php echo JText::_('YJSG_SHORTCODES_LINK_LINKTEXT_HINT'); ?>" onClick="this.select()" />
			</div>
			<button type="submit" id="addshortcode" class="btn btn-primary"><?php echo JText::_('YJSG_SHORTCODES_LINK_BUTTON_SUBMIT'); ?></button>
		</form>
	</div>
<script type="text/javascript">
var jstr_link_required = "<?php echo JText::_('YJSG_SHORTCODES_LINK_JS_ALERT'); ?>";
</script>
</body>
</html>