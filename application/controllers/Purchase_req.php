<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_req extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header_main');


	}


	public function req_form() //HOD clerk fill the form
	{
		$this->index();
		$this->load->view('test');  // sample dummy view for testing
		$this->load->view('footer_main');
	}

	public function req_insert()  // Purchase request insert to database
	{	
		$this->index();
		$this->load->model('purchase_req_model');
		$this->purchase_req_model->req_insert();
		$this->load->view('test');		//loading success view purchase req again
		$this->load->view('footer_main');
	}


	public function req_view() ///request view to Director, SAB for approval
	{
		$this->index();

		$this->load->model('purchase_req_model');
		$data['purchase_req_array'] = $this->purchase_req_model->view_purchase_req();

		$this->load->view('Purchase_req_view',$data);  // sample dummy view for testing
		$this->load->view('footer_main');
	}		


	




}
