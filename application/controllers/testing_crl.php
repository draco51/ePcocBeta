<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testing_crl extends CI_Controller {

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
		$this->load->view('Purchase_req_view');
		$this->load->view('footer_main');
		

	}

	// public function approve()
	// {
	// 	$this->index();



	// 	$Auth_log = array(
 //        	'role' => '',
 //         	'approval' => '',
 //         	'date' => '',
 //         	'time' => ''
 //         	);

	// 	// $this->form_validation->set_rules goes here
	//     if ($this->form_validation->run())
	//     {
	//         $data_in = $this->input->post('product');
	//         $data_in = array (
	//             'name' => $data_in['name'],
	//             'approval' => $data_in['approval'],
	//             'date' => $data_in['date'],
	//             'time' => $data_in['time']
	//           );
	//         $this->purchase_req->add($data);
	//         $message = 'Success! Enter another if you wish';
	//     }
	//     else
	//     {
	//         if (validation_errors())
	//         {
	//              $role = validation_errors();
	//              $product = $this->input->post('product');
	//         }
	//     }
	//     $data = array (
	//         'message' => $message,
	//         'product' => $product
	//     );
	//     $this->load->view('test', $data);

 //        $approval_log = array();
		


		
	// }




}
