<?php 

/**
 * Application Path Configaration
 */

session_start();

define('base_path','http://localhost/ordervox/OrderVox%20Frontend%20%20Programing/');
$system_path = isset($config['system_path']) ? $config['system_path'] : 'system/';
define('system_path', $system_path);




/**
 * Route Configaration
 */


define('default_controller','Home');
define('default_method','index');


/**
 * Databases Configaration
 */

define('db_server', 'localhost');

if($config['env'] == 'dev')
{
	define('db_name', 'ordervox');
	define('db_username', 'root');
	define('db_pass', '');
}

elseif($config['env'] == 'production')
{
	define('db_name', 'ordervox_main'); 		//cpanel datbases name
	define('db_username', 'ordervox_becreat');  //cpanel datbases username
	define('db_pass', 'AAAccc111');      //cpanel datbases password
}



function __autoload($class_name) 
{
	
	if(file_exists(system_path.'core/'.$class_name.'.php'))
	{
		require 'core/'.$class_name.'.php';
	}else{
		require 'helpers/'.$class_name.'.php';
	}
	
	
	
}

$app = new App;


