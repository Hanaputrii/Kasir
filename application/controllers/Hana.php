<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hana extends CI_Controller {

	
	public function index()
	{
		$this->load->view('hana');
	}
	public function clarisa()
	{
		$this->load->view('hana/clarisa');
	}
}