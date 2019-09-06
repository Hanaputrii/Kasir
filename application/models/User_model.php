<?php
class User_model extends CI_Model{
	Public function simpan(){
		$data = $this->input->post();
		$this->db->insert('user', $data);
	}
}