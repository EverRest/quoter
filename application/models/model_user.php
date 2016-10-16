<?php
class Model_user extends CI_Model
{
	private $_db = 'users';

	function __construct()
	{
		parent::__construct();
	}

	public function get_user($id)
	{
		$query = $this->db->get_where('users', array('id' => $id));
		return $query->result();
	}

	public function save($user)
	{
		if(!$this->db->insert($this->_db, $user)) {
			echo 'Data not entered';
		}
		
		return true;	
	}

	public function check($password,$email)
	{

		$query = $this->db->get_where('users', array('email'=>$email, 'password'=>$password));
		if ($query->num_rows()>0) {
			return true;
		} else {
			return false;
		}
	}
}