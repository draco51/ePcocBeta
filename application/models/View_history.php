<?php
	class view_history extends CI_Model{


		function View_past_procs(){
			$this->load->database();

			$query = $this->db->query("SELECT requestid,datee,itemname,departmentid,estimatedcost FROM purchaserequest");
			//$query->result_array();
			return $query->result_array();

		}
	}
?>