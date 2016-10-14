<?php

class Controller 
{
	public function __construct()
	{
		

	}

	public function view($path,$data = [])
	{	
		if(!empty($data)){
			extract($data);
		}

		$view = 'app/views/'.$path.'.php';
		
		if(file_exists($view)){
			include $view;
		}else{
			echo 'View Not Found';
			die();
		}
	}

	public function __result($r)
	{
		

		if(!empty($r)){
			echo json_encode($r);
		}else{
			echo '[]';
		}
		
	}

	public function model($name)
	{	
		$path = 'app/models/'.$name.'.php';
		if(file_exists( $path))
		{
			require $path;
			return new $name;
		}
			
	}

	public function lib($name,$pram=null)
	{
		require system_path.'lib/'.$name.'.php';
		return new $name($pram['db_location']);
	}

	public function error()
	{
		echo '<body bgcolor="#f6f6f6"><center><img src='. URI::parse('public/img/404.jpg') .'></center></body>';
		
	}
}


