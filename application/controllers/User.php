<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$this->load->view('produk');
	}
	public function tambah() 
		{
			if (!empty($this->input->post())){
				$this->load->model('user_model');
				$this->user_model->simpan();
			}
			$this->load->view('user/tambah');
		}

}
