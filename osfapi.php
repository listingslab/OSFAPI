<?php
	/* OSF API	
	by Chris Dorward @listingslab http://listingslab.com */
	header("Access-Control-Allow-Origin: *");
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	ini_set('display_errors', '1'); //error_reporting(E_ALL); 
	include 'functions.php';
	global $api;
	$api = array();
	$api ['vs'] = '3.5.8';
	$api['query'] = $_GET;
	$api['output'] = array ();
	$api['output']['API'] = 'I am OSFAPI version '.$api ['vs'];
	$api['output']['time'] = time();
	if (isset ($api['query']['key']) && isset ($api['query']['action'])){
		setup_database ();
		$api['output']['action'] = $api['query']['action'];
		switch ($api['query']['action']) {
			
			case 'get_key_data':
				get_key_data ();
		        break;
			
			case 'delete_message':
				delete_message ();
		        break;
		        
			case 'get_chat_history':
				get_chat_history ();
		        break;
			
			case 'get_messages':
				get_messages ();
		        break;
				
			case 'get_visitor':
				get_visitor ();
		        break;
			
			case 'get_visitors':
				get_visitors ();
		        break;
				
			case 'create_message':
				create_message ();
		        break;
			
			case 'create_visitor':
				create_visitor ();
		        break;
			
		    case 'check_apikey':
				if (check_key ($api['query']['key'])){
					$api['output']['status'] = 'OK';
					$api['output']['message'] = 'Valid apikey. Welcome to OSFAPI';
				}else{
					$api['output']['status'] = 'Fail';
					$api['output']['message'] = 'Inactive apikey ' . $api['query']['key'] . '';
				}
		        break;
			case 'notify':
				if (check_key ($api['query']['key'])){
					$api['output']['status'] = 'OK';
					$api['output']['message'] = 'notifying';
					notify ();
				}else{
					$api['output']['status'] = 'Fail';
					$api['output']['message'] = 'Inactive apikey ' . $api['query']['key'] . '';
				}
		        break;
		    default;
		        $api['output']['message'] = 'Invalid action';
		        $api['output']['status'] = 'Fail';
		        break;
		}
	}else{
		$api['output']['message'] = 'Required key or action variables is not set';
		$api['output']['status'] = 'Fail';
	}
	api_output ();
?>