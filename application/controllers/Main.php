<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	}
	public function about()
	{
		$this->load->view('include/header');
		$this->load->view('about');
		$this->load->view('include/footer');
	}
	public function services()
	{
		$this->load->view('include/header');
		$this->load->view('services');
		$this->load->view('include/footer');
	}
	public function products()
	{
		$this->load->view('include/header');
		$this->load->view('products');
		$this->load->view('include/footer');
	}
	public function careers()
	{
		$this->load->view('include/header');
		$this->load->view('careers');
		$this->load->view('include/footer');
	}
	public function contact()
	{
		$this->load->view('include/header');
		$this->load->view('contact');
		$this->load->view('include/footer');
	}
}