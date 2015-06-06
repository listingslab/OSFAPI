<?php
// Creates a new visitor
if ( ! function_exists( 'create_visitor' ) ) :
	function create_visitor (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'Creating Visitor';
		$data = Array(
	        'cookie' => $api['query']['cookie'],
	        'visits' => 1,
	        'userip' => $api['query']['userip'],
	        'hostname' => $api['query']['hostname'],
	        'sitename' => $api['query']['sitename'],
	        'lasturl' => $api['query']['lasturl'],
	        'lasttitle' => $api['query']['lasttitle'],
	        'lastvisit' => time(),
	        'location' => 'no',
	        'agent' => $_SERVER['HTTP_USER_AGENT'],
	        'created' => time()
	    );
	    $v_id = $api ['db']->insert ('osf_visitors', $data);
		$api ['db']->WHERE ("v_id", $v_id );
		$visitor = $api ['db']->get ("osf_visitors", 1);
		$api['output']['visitor'] = $visitor[0];
	}
endif;
?>