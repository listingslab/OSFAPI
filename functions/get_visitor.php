<?php
// Gets visitor by cookie
if ( ! function_exists( 'get_visitor' ) ) :
	function get_visitor (){
		global $api;
		$api ['db']->WHERE ("cookie", $api['query']['cookie']);
		$visitor = $api ['db']->get ("osf_visitors", 1);
		if ($api ['db']->count > 0){
			$api['output']['status'] = 'OK';
			$api['output']['visitor'] = $visitor[0];
		}else{
			$api['output']['status'] = 'FAIL';
			$api['output']['message'] = 'No visitor found';
		}
	}
endif;
?>