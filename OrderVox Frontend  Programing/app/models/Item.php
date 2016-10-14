<?php  

class Item extends Model
{
	
	public function __construct()
	{
		parent::__construct();


	}

	public function Get()
	{
		$products = $this->db->query('select  * from ov_item')->result();


	

		foreach ($products as  $key => $product) 
		{
			$price = $this->db->query('select  * from ov_price where price_item_id = '.$product['id'])->result();
			$addons = $this->db->query('select  * from ov_addons where addons_item_id = '.$product['id'])->result();
			
			$products[$key]['price'] = $price; 
			$products[$key]['addons'] = $addons; 
		}


		return $products;


		


	}


	

	
}
