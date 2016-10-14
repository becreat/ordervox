<?php 

ob_start(); 


/**
 * Application Setting 
 */

$config['system_path'] = 'system/';
$config['default_controller'] = 'home';
$config['env'] = 'dev'; //production or dev	

require	$config['system_path'].'init.php';



ob_end_flush();


 