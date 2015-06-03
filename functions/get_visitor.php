<?php
// Gets visitor by v_id or cookie
if ( ! function_exists( 'get_visitor' ) ) :
	function get_visitor (){
		global $api;
		$go = false;
		if (isset ($api['query']['v_id'])){
			$api ['db']->WHERE ("v_id", $api['query']['v_id']);
			$api['output']['visitor'] = $api ['db']->get ("osf_visitors");
			$go = true;
		}
		if (isset ($api['query']['cookie'])){
			$api ['db']->WHERE ("cookie", $api['query']['cookie']);
			$api['output']['visitor'] = $api ['db']->get ("osf_visitors");
			$go = true;
		}
		if (count($api['output']['visitor']) == 0){
			unset ($api['output']['visitor']);
			$api['output']['message'] = 'Visitor not found';
			$go = false;
		}
		if ($go){
			$api['output']['status'] = 'OK';
		}else{
			$api['output']['status'] = 'FAIL';
		}
		
	}
endif;
?>