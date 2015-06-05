<?php
// Sends email using mailgun
if ( ! function_exists( 'notify_new_user' ) ) :
	function notify_new_user (){
		global $api;
		$api ['db']->WHERE ("osfapi_key", $api['query']['osfapi_key']);
		$key_data = $api ['db']->get ("osf_keys", 1);
		$api['output']['user'] = $key_data;
		/*
		$config = array();
		$config['api_key'] = "key-e600b5bda538ff659642f92204ab759e";
		$config['api_url'] = "https://api.mailgun.net/v3/osfrontend.com/messages";
		$message = array();
		$message['subject'] = "";
		if (isset ($api['query']['subject'])){
			$message['subject'] .= '' . $api['query']['subject'];
		}
		$message['to'] = 'listingslab@me.com';
		$message['from'] = "OSFrontend <support@osfrontend.com>";
		$message['h:Reply-To'] = "OSFrontend <support@osfrontend.com>";
		$message['html'] = '<style>a {color: #003366; text-decoration:none;}</style>';
		$message['html'] .= '<img height="20" hspace="5" align="left" src="http://osfrontend.com/OSFAPI/img/osfrontend.png" />';
		
		if (isset ($api['query']['clickurl'])){
			$clickurl = $api['query']['clickurl'];
			$message['html'] .= '<a href="'.$clickurl.'">';
			$islinked = true;
		}
		if (isset ($api['query']['body'])){
			$message['html'] .= '<p>' . $api['query']['body'] . '</p>';
		}else{
			$message['html'] .= ' > Love from OSFrontend.';
		}
		//$message['html'] .= $api['query']['clickurl'];
		$message['html'] .= 'Click to respond';
		if (isset ($islinked)){
			$message['html'] .= '</a>';
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $config['api_url']);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD, "api:{$config['api_key']}");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_POST, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS,$message);
		$result = curl_exec($ch);
		curl_close($ch);
		$api['output']['mailgun'] = json_decode ($result);
		*/
	}
endif;
?>