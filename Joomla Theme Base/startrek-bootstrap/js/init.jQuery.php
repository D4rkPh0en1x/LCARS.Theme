<?php

// No direct access.
defined('_JEXEC') or die;

	$jsLoc = JURI::root(true)."/templates/startrek25/js/";

	$jQueryPath = $jsLoc.'jquery-1.8.3.min.js';
	$jQueryNoConflict = $jsLoc.'jQuery-noConflict.js';
	$jQueryUICore = $jsLoc.'jquery.ui.core.js';
	$jQueryUIWidget = $jsLoc.'jquery.ui.widget.js';
	$jQueryUITabs = $jsLoc.'jquery.ui.tabs.js';
				
	$document = &JFactory::getDocument();

	$document->addScript($jQueryPath);
	$document->addScript($jQueryNoConflict);
	$document->addScript($jQueryUICore);
	$document->addScript($jQueryUIWidget);
	$document->addScript($jQueryUITabs);
?>
