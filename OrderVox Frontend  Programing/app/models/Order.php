<?php  

class Order extends Model
{
	
	public function __construct()
	{
		parent::__construct();


	}

	

	public function Get($id)
	{
		$order = $this->db->query('select  * from ov_order where id='.$id.' order by id desc')->result();

		$order[0]['ordered_items'] = $this->db->query('select  * from ov_ordered_item left join ov_item on ov_ordered_item.ordered_item_id = ov_item.id where ordered_order_id='.$id)->result();


		return $order;

		


		


	}
	

	
}
