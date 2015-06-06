<?php
	include 'functions/check_apikey.php'; // Checks apikey is valid
	include 'functions/create_message.php'; // Creates a new message
	include 'functions/create_osfapi_key.php'; //Creates a new osfapi_key
	include 'functions/create_visitor.php'; // Creates a new visitor
	include 'functions/delete_message.php'; // Creates a new visitor
	include 'functions/func_current_url.php'; // Returns the current url
	include 'functions/func_random_number.php'; // Returns a random number of x digits
	include 'functions/get_chat_history.php'; // Returns chat history for v_id
	include 'functions/get_key_data.php'; // Returns or creates apikey data
	include 'functions/get_messages.php'; //  Gets messages by hostname and v_id_to
	include 'functions/get_visitor.php'; // Returns visitor information
	include 'functions/get_visitors.php'; // Returns latest visitors
	include 'functions/notify.php'; // Sends email using mailgun
	include 'functions/notify_new_user.php'; // Sends new user notification using mailgun
	include 'functions/osf_output.php'; // Outputs the response
	include 'functions/setup_database.php'; // Creates a connection to the DB using MySQLi
	include 'functions/update_settings.php'; // Update the plugin settings
	include 'functions/update_visitor.php'; // Update visitor (ting)
?>