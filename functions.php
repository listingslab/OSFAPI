<?php
	include 'functions/check_apikey.php';// Checks apikey is valid
	include 'functions/create_visitor.php';// Creates a new visitor
	include 'functions/create_message.php';// Creates a new message
	include 'functions/get_current_url.php';// Returns the current url
	include 'functions/get_messages.php';//  Gets messages by hostname and v_id_to
	include 'functions/get_visitor.php';// Returns visitor information
	include 'functions/get_visitors.php';// Returns latest visitors
	include 'functions/notify.php';// Sends email using mailgun
	include 'functions/osf_output.php';// Outputs the response
	include 'functions/setup_database.php';// Creates a connection to the DB using MySQLi

	function n_digit_random($digits) {
	  return rand (pow(10, $digits - 1) - 1, pow(10, $digits) - 1);
	}
?>