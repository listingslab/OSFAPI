<?php
// Creates a new visitor
if ( ! function_exists( 'create_visitor' ) ) :
	function create_visitor (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'Creating Visitor';
		$inputs = $_GET;
		$inputs ['agent'] = $_SERVER['HTTP_USER_AGENT'];
		//$api['output']['inputs'] = $inputs;
		$data = Array(
			'name' => 'Anonymous ' . n_digit_random (4),
	        'agent' => $inputs ['agent'],
	        'cookie' => $inputs ['cookie'],
	        'userip' => $inputs ['userip'],
	        'country_code' => $inputs ['country_code'],
	        'country_name' => $inputs ['country_name'],
	        'city' => $inputs ['city'],
	        'region_code' => $inputs ['region_code'],
			'zip_code' => $inputs ['zip_code'],
			'time_zone' => $inputs ['time_zone'],
			'latitude' => $inputs ['latitude'],
			'longitude' => $inputs ['longitude'],
	        'hostname' => $inputs ['hostname'],
	        'serverip' => $inputs ['serverip'],
	        'sitename' => $inputs ['sitename'],
	        'firstvisit' => time(),
	        'lastvisit' => time()
	    );
	    $id = $api ['db']->insert ('api_visitors', $data);
		$api['output']['v_id'] = $id;
	}
endif;
?>