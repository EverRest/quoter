<?php
class Model_quote extends CI_Model
{
	private $_db = 'quotes';
	
	function __construct()
	{
		parent::__construct();
	}

	function get_last_quotes()
	{
		$query = $this->db->order_by("id", "desc")->get('quotes', 5);
		return $query->result();
	}

	function count_quotes()
	{
		$query = $this->db->get('quotes');
		return $query->num_rows();
	}

	function get_quote($id)
	{
		$query = $this->db->get_where('quotes', array('id' => $id));
		return $query->result();
	}

	public function save($quote)
	{
		if(!$this->db->insert($this->_db, $quote)) {
			echo 'Data not entered';
		}
		
		return true;
	}
}
