<?php 

class HomeController extends Controller
{
	
	public function __construct()
	{
		
		parent::__construct();

	}


	


	public function index()
	{
		
		$this->view('index');
	
		
	}


	public function cart()
	{
		
		$this->view('cart');
	
		
	}

	public function menu()
	{
		
		$this->view('menu');
	
		
	}


	public function page()
	{
		
		$this->view('page');
		
	}

	public function review()
	{
		
		$this->view('review');
		
	}


	public function submitreview()
	{
		
		

		$review = $this->model('Review');;

		if($_POST)
		{
			$review->create($_POST);
			URI::redirect('home/review');

		}else{

			$this->view('review_submit');
		}

		
	}


	public function spacial()
	{
		
		$this->view('menu');
		
	}

	public function contact()
	{
		
		$this->view('contact_us');
		
	}

	public function delivery()
	{
		$this->view('delivery_payment');
	}

	

	public function confirm($order_id)
	{
		$order = $this->model('Order');
		$data['order'] = $order->Get($order_id)[0];
		$this->view('order_confirm',$data);
	}

	public function regcomplete()
	{
		$this->view('regcomplete');
	}


	public function registration()
	{
		
		$customer = $this->model('Customer');;

		if($_POST)
		{
			$customer->create($_POST);
			URI::redirect('home/regcomplete');

		}else{

			$this->view('registration');
		}
	}


	public function myaccount()
	{
		$this->view('myaccount');
	}


	public function login()
	{
		if($_POST)
		{
			$customers = $this->model('Customer');
			$customer = $customers->find(['where'=>['customer_email'=>$_POST['email'],'customer_password'=>$_POST['password']]]);
			
			if(count($customer) > 0)
			{
				$_SESSION['logged_customer'] = $customer;
				URI::redirect('home/index');
	
			}else{ 
				$data['error'] = 'invalid login info !!'; 
				$this->view('login',$data);
			}

		}else{

			$this->view('login');
		}
	}

	public function logout()
	{
		session_start() ;
		session_destroy() ;
		URI::redirect('home/login');
	}
}

