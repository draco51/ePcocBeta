<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashBoard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following url
	 * 		http://example.com/index.php/welcome
	 *	- or - 
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header_main');
	}


	public function home()
	{
		$this->index();
		$this->load->view('Home');
		$this->load->view('footer_main');
	}

	public function purchase_req()
	{	
		$this->index();
		$this->load->view('purchase_req');
		$this->load->view('footer_main');
	}
}
