<?php
	class purchase_req_model extends CI_Model{


		function req_insert()
		{
			$this->load->database();


			$departmentid = $_POST['depName'];
			$description = $_POST['description'];
			$date = $_POST['description'];
			$departmentid = 515;
			$itemname = 'books';
			$qty = '40';  			// $_POST['qty'];
			$estimatedcost = '1000';
			$dateofrequired = 'wdw';
			$purpose = 'for nothing';			//$_POST['est_cost'];
			$locationid = 'Financial';		//$_POST['location'];
			$directorremark = '0';
			$deputybrsaremark = '0';

			$req_array = array('last_auth_by'=>'someone','auth_date'=>'echo date("Y-m-d")','auth_time'=>'echo date("h:i:sa")' );

			$this->db->query("INSERT INTO purchaserequest(departmentid,datee,itemname,qty,estimatedcost,dateofrequired,purpose,locationid,directorremark,deputybrsaremark) 
							VALUES('$departmentid','$date','$itemname','$qty','$estimatedcost','$dateofrequired','$purpose','$locationid','$directorremark','$deputybrsaremark')"
			);
	
		}



		function view_purchase_req()  //for approval view
		{ 
			$this->load->database();

			$query = $this->db->query("SELECT requestid,datee,itemname,departmentid,estimatedcost,qty FROM purchaserequest ORDER BY requestid DESC LIMIT 1"); //this output last entered record of purchase requests 
			

			return $query->row_array(); 


		}

		 




	}
?>