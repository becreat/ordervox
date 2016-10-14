<?php 


class Model extends ORM
{

	public function __construct()
	{
		parent::__construct();
		
	}

	public function lib($name,$pram=null)
	{
		require system_path.'lib/'.$name.'.php';
		return new $name($pram);
	}


}