<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('User');
		$this->load->library('session');
		$this->load->library('email');
	}

	public function index()
	{
		$this->load->view('index');
	}
    public function contact()
	{
		$this->load->view('contact');
	}
	 public function about()
	{
		$this->load->view('about');
	}

	public function ballbearing()
	{
		$this->load->view('ballbearing');
	}
	public function rollerbearing()
	{
		$this->load->view('rollerbearing');
	}
	public function deep_groove()
	{
		$this->load->view('deep_groove');
	}
	public function angular()
	{
		$this->load->view('angular');
	}
	public function self_align()
	{
		$this->load->view('self_align');
	}

	public function cylindrical_roller()
	{
		$this->load->view('cylindrical_roller');
	}

	public function needle_roller()
	{
		$this->load->view('needle_roller');
	}

	public function tapered_roller()
	{
		$this->load->view('tapered_roller');
	}

	public function sperical_bearing()
	{
		$this->load->view('sperical_bearing');
	}

}
