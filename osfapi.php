<?php
	/* OSFAPI	
	by Chris Dorward @listingslab http://listingslab.com */
	header("Access-Control-Allow-Origin: *");
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	ini_set('display_errors', '1'); //error_reporting(E_ALL); 
	include 'functions.php';
	global $api; $api = array();
	$api ['vs'] = '3.6.0';
	$api['query'] = $_GET;
	$api['output'] = array ();
	$api['output']['API'] = 'I am OSFAPI version '.$api ['vs'];
	$api['output']['time'] = time();
	setup_database ();
	if ($api['query']['osfapi_key'] == 'new'){
		$valid_key = true;
		create_osfapi_key ();
	}else{
		$valid_key = check_key ($api['query']['osfapi_key']);
		if ($valid_key){
			$api['output']['action'] = $api['query']['action'];
			switch ($api['query']['action']) {
				case 'get_key_data': get_key_data (); break;
				case 'delete_message': delete_message (); break;
			    case 'get_chat_history': get_chat_history (); break;
				case 'get_messages': get_messages (); break;
				case 'get_visitor': get_visitor (); break;
				case 'get_visitors': get_visitors (); break;
				case 'create_message': create_message (); break;
				case 'create_visitor': create_visitor (); break;
				case 'notify': notify (); break;
			    default;
			        $api['output']['message'] = 'Requested action "'.$api['query']['action'].'" is invalid';
			        $api['output']['status'] = 'Fail';
			        break;
			}
		}else{
			$api['output']['message'] = 'Invalid osfapi_key';
			$api['output']['status'] = 'Fail';
		}
	} 	
	api_output ();
?>