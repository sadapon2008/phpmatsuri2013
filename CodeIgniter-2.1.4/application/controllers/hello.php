<?php

class Hello extends CI_Controller {

	public function index($name= null)
	{

	$this->load->view('templates/header');
	$this->load->view('contents/hello_index', array('name' => $name));
	$this->load->view('templates/footer');
	}
}
