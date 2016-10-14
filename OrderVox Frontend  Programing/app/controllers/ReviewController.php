<?php 

class ReviewController extends REST
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function Get($resturent_id=null,$customer_id=null)
	{	

		
		
		echo json_encode($this->model->Get($resturent_id,$customer_id));
	}
	

	
}

