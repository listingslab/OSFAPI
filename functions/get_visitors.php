<?php
// Gets latest visitors
if ( ! function_exists( 'get_visitors' ) ) :
	
	function get_visitors (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'latest visitors';
		
		if (isset ($api['query']['hostname'])){
			$api ['db']->WHERE ("hostname", $api['query']['hostname']);
		}			
		$api ['db']->orderBy ("lastvisit", 'DESC');
		$visitors = $api ['db']->get ("api_visitors", 50);
		$api['output']['visitors'] = $visitors;
	}
endif;
?>