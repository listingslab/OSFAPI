<?php
// Gets messages by hostname and v_id_to
if ( ! function_exists( 'get_key_data' ) ) :
	function get_key_data (){
		global $api;
		$api['output']['status'] = 'OK';
		$api['output']['message'] = 'Getting key data';
		$api ['db']->WHERE ("key_url", $api['query']['key_url']);
		$api ['db']->WHERE ("sitename", $api['query']['sitename']);
		$key_data = $api ['db']->get ("osf_keys", 1);
		if ($api ['db']->count > 0){
			$api['output']['key_data'] = $key_data;
		}else{
			$api['output']['key_data'] = 'create_new key';
			$data = Array(
				'apikey' => 'apikey-public-'.func_random_number (4).'-'.func_random_number (4),
		        'key_url' => $api['query']['key_url'],
		        'sitename' => $api['query']['sitename'],
		        'access_level' => 'public',
		        'active' => 1
		    );
			$k_id = $api ['db']->insert ('osf_keys', $data);
			$api ['db']->WHERE ("k_id", $k_id);
			$api['output']['key_data'] = $api ['db']->get ("osf_keys", 1);
		}
	}
endif;
?>