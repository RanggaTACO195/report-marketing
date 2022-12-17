<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Master_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function checkUserLogin($username = NULL,$password = NULL)
	{
		$this->db->select('*');
		$this->db->from('login_report');
		$this->db->where('username',$username);
		$this->db->where('password',sha1($password));
		$query = $this->db->get();
		return $query->row();
	}

    public function getAllData($table)
	{
		return $this->db->get($table);
	}

	//Function untuk ambil selected data
	public function getSelectedData($table, $data)
	{
		return $this->db->get_where($table, $data);
	}

        	//Function untuk insert data
	function insertData($table, $data)
	{
		// $this->db->insert($table,$data);
		$query = $this->db->insert($table, $data);
		if ($query) {
			return TRUE; //if query is true
		} else {
			return FALSE; //if query is wrong
		}
	}

	public function updateData($table, $data, $where)
	{
	//create update postgreSQL and return 
		$this->db->where($where);
		$this->db->update($table, $data);
		return $this->db->affected_rows();

	}

    public function deleteData($table = NULL,$where = NULL)
	{
		//create function delete and return response databases postgreSQL
		$this->db->where($where);
		$this->db->delete($table);
		return $this->db->affected_rows();

	}

}


?>