<?php

// no direct access
defined('_JEXEC') or die;

echo JLayoutHelper::render( 
	'dashboard.layouts.dwopportunities', 
	array ( 
		'opportunities' => $this -> opportunities, 
		'pagination' => $this -> pagination, 
	), 
	JPATH_ROOT .'/components/com_donorwiz/layouts', 
	null 
);
				
?>