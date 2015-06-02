<?php
// Outputs the OSFAPI result
if ( ! function_exists( 'osf_output' ) ) :
	function api_output (){
		global $api;
		if ($api['query']['mode'] == 'json'){
			print_r (json_encode($api ['output']));
		}else{
			
			print '<a href="/">';
			print '<h3 style="float:left; margin:0; margin-right:5px;">OSFAPI</h3>';
			print '<img style="margin-top:3px;" height="15" src="/OSFAPI/img/osfrontend.png" />';
			print '</a>';
			print '<a href="'.get_current_url ().'&mode=json">';
			print '<img style="margin-top:3px;margin-left:3px;" height="15" src="/OSFAPI/img/json.png" />';
			print '</a>';
			print '<small style="margin-top:3px;margin-left:10px;">'.$api ['vs'].'</small>';
			
			print '<pre>';
			print_r ($api ['output']);
			print '</pre>';
		}
	}
endif;
?>