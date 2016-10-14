<?php 

class REST extends Controller
{
	private $_attr = [];
	private $_formdata = [];

	public function __construct()
	{

		//init ORM
		$this->model = $this->model(str_replace('Controller', '', get_class($this)));

		/**
         * Parsing POST data 
		 */

		$this->_formdata = empty($_POST) ? json_decode(file_get_contents('php://input'),1) : $_POST;
		

		
		/**
         * Convert URL to an array 
		 */


		if($_SERVER['QUERY_STRING'] != '')
		{
			$query = explode('&', $_SERVER['QUERY_STRING']);
			unset($query[0]);
			foreach ($query as $attr) 
			{
				$temp = explode('=', $attr);
				$this->_attr[$temp[0]] = $temp[1]; 
			}
		}

		






  
		
		/**
         * If Calling From AngularJS
		 */

		if($_SERVER['HTTP_ACCEPT'] == 'application/json, text/plain, */*')
		{
			switch($_SERVER['REQUEST_METHOD'])
			{
				case "GET":
					//$this->find();
				break;

				case "POST":
					$this->create();
				break;

				case "PUT":
					$this->update();
				break;

				case "DELETE":
					$this->distory();
				break;

			}
		}
		
	} 

	

	public function find()
	{

		$this->__result($this->model->find(['where'=>$this->_attr]));

	}

	public function create()
	{

		if(!isset($this->_formdata))
		{
			$this->_formdata = $this->_attr;
		}
		
		if(!empty($this->_formdata)){
			echo $this->model->create($this->_formdata);	
		}else{
			http_response_code(404);
		}
		
		
	}
	
	public function update()
	{
		if(!isset($this->_formdata))
		{
			$this->_formdata = array_slice($this->_attr, 1);
			$this->_attr =array_slice($this->_attr, (count($this->_attr)*-1),1); 
		}
		
		if(!empty($this->_formdata)){
			
			$this->model->update($this->_formdata,$this->_attr);


		}else{
			http_response_code(404);
		}
		
	}

	
	public function distory()
	{
		$this->model->distory($this->_attr);
	}

	public function lastid()
	{
		echo $this->model->lastId();
	}

	


}