<?php

// no direct access
defined('_JEXEC') or die;

?>

<div class="uk-grid uk-margin-top" data-uk-grid-margin="">

	<div class="uk-width-1-1 uk-width-medium-3-4">
		
		<div class="uk-grid" data-uk-grid-margin="">
			
			<div class="uk-width-1-1">
				
				<?php echo JLayoutHelper::render( 
					'dwopportunitiesbydonor', 
					array ( 
						'opportunities' => $this -> opportunities, 
						'pagination' => $this -> pagination, 
					), 
					JPATH_ROOT .'/components/com_donorwiz/layouts/dashboard/layouts', 
					null 
				); ?>
			
			</div>
		
		</div>
	
	</div>

	<div class="uk-width-1-1 uk-width-medium-1-4">
		<?php echo JLayoutHelper::render( 'menu-left', array () , JPATH_ROOT .'/components/com_donorwiz/layouts/dashboard' , null ); ?>
	</div>
	
</div>