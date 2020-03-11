<?php
/**
 * Plugin Name: JELLOCODE
 * Plugin URI: https://jellocode.com/
 * Description: Get Solidity IDE embed code
 * Version: 1.0.0
 * Text Domain: jelloCode
 * Author: Squadx Innovations
 * Author URI: https://squadx.io/
 */
add_action('admin_menu', 'ide_setup_menu');


function ide_setup_menu(){
	add_menu_page( 'IDE Page', 'JELLOCODE', 'manage_options', 'ide', 'init' );
}
 
function init(){
	request_data();
}

 
function request_data(){
	?>
	<style>
		.main-c {
			width: 100%;
			max-width: 98%;
		}
		.main-c table{
			width: 100%;
			text-align: left;
		}
		.main-c th, .main-c td{
			width: 20%;
			word-break: break-all;
		}
		.main-c .up-form .submit{
			text-align: right;
			margin: 0;
			margin-right: 43px;
			padding: 0;
		}
	</style>
		<div class="card main-c tab-inst tab-content">
			<h3>Instructions Here</h3>	
			<div class="frame">
				<iframe src="https://ide-dashboard.squadx.io" style="width: 100%; height: 100vh" frameborder="0"></iframe>
			</div>
		</div>


<?php }