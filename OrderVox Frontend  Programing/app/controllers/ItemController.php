<?php 

class ItemController extends REST
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function GetAllItem()
	{
		echo json_encode($this->model->Get());
	}
	

	
}

