<?php 

class CustomerController extends REST
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function LoggedCustomer()
	{
	
		echo json_encode($_SESSION['logged_customer'][0]);
	}

	
}

