	<?php 

class App
{
	private $_controller = default_controller;
	private $_method = default_method;
	private $_params = [];


	public function __construct()
	{
		$url = $this->parseUrl();
	
		if(isset($url[0]))
		{
			$this->_controller = ucfirst($url[0]);
		}

	



		$clr_path = 'app/controllers/'.$this->_controller.'Controller.php' ;

		if(file_exists($clr_path)){
			require $clr_path;
			$this->_controller .= 'Controller';
		}else{
			$this->_controller = 'Error';

		}


		
		$ctlr =  new $this->_controller;
		
		array_shift($url);

		if(isset($url[0])){
			
			if(method_exists($ctlr, $url[0])){
				$this->_method = $url[0];
				array_shift($url);
			}
			else{
				$this->_method = 'Error';
			}
		}


		

		if($_SERVER['REQUEST_METHOD'] != 'POST')
		{

			call_user_func_array([$ctlr,$this->_method],$url);
		}

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if($_SERVER['HTTP_ACCEPT'] != 'application/json, text/plain, */*')
			{
				call_user_func_array([$ctlr,$this->_method],$url);
			}
		}




	} 

	


	public function parseUrl()
	{	

		
		if(isset( $_GET['url']) &&  $_GET['url'] != "")
		{
			$uri =   $_GET['url'];
			$uri =  explode('/',filter_var(trim($uri,'/'),FILTER_SANITIZE_URL));
			return $uri;
			 
		}else{
			return [];	
		}
		
	}

		
}
