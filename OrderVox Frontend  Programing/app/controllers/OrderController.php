<?php 

class OrderController extends REST
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getOrder($id)
	{
		echo json_encode($this->model->Get($id));
	}

	

	
}

