<?php 

class ORM
{
	
	public function __construct()
	{
		$this->db = $this->lib('Mysql');
		$this->table = get_class($this);
	}

	public function find($pram=[])
	{


		$query = $this->db->table($this->table)->get();
	
		

		if(count($pram) != 0)
		{
			if(isset($pram['column']) && count($pram['column']) != 0)
			{
				$query->get($pram['column']);
			}
			if(isset($pram['where']) && count($pram['where']) != 0)
			{
				$query->where($pram['where']);
			}
			
			if(isset($pram['limit'])){$query->limit($pram['limit']);}
			
			
			
		}

		return $query->result();
	}

	public function create($row)
	{
		$this->db->table($this->table)->Insert($row);
		return $this->lastId($this->table);
	}
	
	public function update($row,$where)
	{	
		$this->db->table($this->table)->where($where)->Update($row);
	}

	public function distory($where)
	{
		$this->db->table($this->table)->where($where)->delete();
	}

	public function lastId()
	{
		return $this->db->table($this->table)->get('id')->order_by('id','desc')->limit(1)->result()[0]['id'];

	}

	

}