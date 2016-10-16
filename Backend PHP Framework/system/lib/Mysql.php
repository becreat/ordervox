<?php

class Mysql
{

	private $_table;
	private $_where;
	private $_limit;
	private $_query;
	private $_result;
	private $_order;
	private $_dbPrefix;

	function __construct()
	{
		$this->db = new PDO('mysql:host='.db_server.';dbname='.db_name,db_username,db_pass);
		$this->_dbPrefix = 'ov_';
	}

	function table($table)
	{	
		$this->_query = null;
		$this->_where = null;
		$this->_limit = null;
		$this->_result = null;
		$this->_table = $this->_dbPrefix.strtolower($table);
		return $this;
	}

	function limit($limit)
	{
		$this->_limit = $limit;
		return $this;

	}

	function where($values)
	{

		if(count($this->_where)!=0)
		{
			$this->_where .= ' and ';
		}
		
		foreach ($values as $key => $value) 
		{
			$this->_where.= addslashes($key). '="' . addslashes($value) . '" and ';
		}

		$this->_where = substr($this->_where,0,-5);

		return $this;
	}

	function order_by($row,$method)
	{
		$this->_order = 'order by '.$row.' '.$method;
		return $this;
	}

	function Query($q)
	{
		$this->table(''); //to flash perv table selection
		$this->_query = addslashes($q);

		return $this;
	} 

	function get()
	{
		$rows = func_get_args();
		
		$query = 'select ';
		
		if(empty($rows))
		{
			$query.='*';
		}else{
			$query.=implode(',', $rows);

		}
		
		$this->_query = $query . ' from ' . $this->_table;
		
		return $this;
	}

	function Insert($row)
	{
		$row = $this->_removeExtraColumns($row);


		$this->_query = 'insert into ' . $this->_table . ' (`' .  implode('`,`', array_keys($row)) .'`) ';
		$this->_query.= 'values("' . implode('","', array_values($row)) . '") ';
	
		$this->execute();
	}

	function Update($row)
	{
		
		
		$row = $this->_removeExtraColumns($row);

		$this->_query = 'update ' . $this->_table . ' set ';;
		foreach ($row as $key => $value) {
			$this->_query .= $key .'="'. $value . '", ';
		}
		$this->_query = substr($this->_query, 0,-2);	
		$this->execute();

	}


	

	function Delete()
	{
		$this->_query = 'delete from ' . $this->_table . ' ';
		$this->execute();
	}


	function RowCount()
	{
		$this->_query = 'select count(id) from ' . $this->_table . ' ';
		return reset($this->result()[0]);

	}



	function getColumn()
	{
		$result = [];
		$this->_query = "select column_name from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='" . $this->_table."'";
		$this->_bindResult();
		
		foreach ($this->_result as $value) 
		{
			$result[] = $value['column_name'];
		}

		return $result;

		
	}



	



	function execute()
	{	
		$this->_buildQuery();
		$this->_query;
		$stmt = $this->db->prepare($this->_query);
		$stmt->execute();

	}

	function result()
	{	
		$this->_buildQuery();
		$this->_bindResult();
		return $this->_result;
	}


	private function _removeExtraColumns($rows)
	{
		
		$newrow = [];
		$column = $this->getColumn();

		foreach ($column as $col) 
		{
			if(array_key_exists($col,$rows))
			{
				$newrow[$col] = $rows[$col];
				
			}
		}
		return $newrow;
	}


	private function _buildQuery()
	{

		if(isset($this->_where)){

			$this->_query.= ' where '.$this->_where;
		}

		if(isset($this->_order)){

			$this->_query.= ' '.$this->_order;
		}

		if(isset($this->_limit)){

			$this->_query.= ' limit '.$this->_limit;
		}



	}

	private function _bindResult()
	{
		$stmt = $this->db->query($this->_query);

		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$this->_result[] = $row;
		}

		

	}

	


}