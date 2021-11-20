<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	}
}