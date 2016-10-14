<?php  

class Review extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public function Get($resturent_id=null,$customer_id=null)
	{
		
		$query = 'select * from ov_review left join ov_customer on ov_review.review_customer_id = ov_customer.id ';
		
		if($resturent_id != null or $customer_id != null)
		{
			$query .= ' where';
		}

		if($resturent_id != null)
		{
			$query .= ' review_restaurant_id = '.$resturent_id;
		}
		if($resturent_id != null and $customer_id != null)
		{
			$query .= ' and ';
		}

		if($customer_id != null)
		{
			$query .= ' review_customer_id = '.$customer_id;
		}

		$query .= ' order by ov_review.id desc';

		

		return $this->db->query($query)->result();






	}

	

	
}
