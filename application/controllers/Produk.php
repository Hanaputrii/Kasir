<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	
	public function index()
	{
		$this->load->view('produk');
	}
	public function tambah() 
		{
			$this->load->view('produk/tambah');
		}

}
