<?php

	class Employee extends CI_Controller{

		function __construct(){
    	    parent::__construct();
    	    $this->load->model('Employee_model');
	        $this->load->model('User_model');
	    }


		function index(){
			
		}

		function get_all_employee(){
	    	$_POST = json_decode(file_get_contents('php://input'), true);
        	$id = $_POST['id'];
	    	$data['employees'] = $this->Employee_model->get_all_employee();
	    	return print json_encode($data);
    		
        }

        function get_employee_data(){
	    	$_POST = json_decode(file_get_contents('php://input'), true);
        	$id = $_POST['id'];
	    	$data['employees'] = $this->Employee_model->get_employee_data($id);
	    	return print json_encode($data);
        }

		function save_employee(){

	        $_POST = json_decode(file_get_contents('php://input'), true);

	        $employee_number = $_POST['employee_number'];
            $family_name = $_POST['family_name'];
            $given_name = $_POST['given_name'];
            $middle_initial = $_POST['middle_initial'];
            $sex = $_POST['sex'];
            $birthdate = $_POST['birthdate'];
            $license = $_POST['license'];
            $expiry = $_POST['expiry'];
            $retirement = $_POST['retirement'];
            $policy_number = $_POST['policy_number'];
            $premium = $_POST['premium'];
            $contact = $_POST['contact'];
            $position = $_POST['position'];
            $status = $_POST['status'];
            $date_res = $_POST['date_res'];
            $address = $_POST['address'];
            $client = $_POST['client'];
            $agency = $_POST['agency'];
            $branch = $_POST['branch'];
            $hou_account = $_POST['hou_account'];
            $cs = $_POST['cs'];
            $cedula = $_POST['cedula'];
            $dep = $_POST['dep'];
            $sss_no = $_POST['sss_no'];
            $pagibig_no = $_POST['pagibig_no'];
            $acct_no = $_POST['acct_no'];
            $date_hire = $_POST['date_hire'];
            $insurance = $_POST['insurance'];
            $legal_policy_number = $_POST['legal_policy_number'];
            $legal_expiry = $_POST['legal_expiry'];
            $legal_premium = $_POST['legal_premium'];
            $mode_pay = $_POST['mode_pay'];
            $rate = $_POST['rate'];
            $effectivity = $_POST['effectivity'];
            $sss_group = $_POST['sss_group'];
            $pagibig_group = $_POST['pagibig_group'];
           	
           	$action = $_POST['action'];
            //'employee_number' => $employee_number,
				
           	$insert_data = array(
				'family_name' => $family_name,
				'given_name' => $given_name,
				'middle_initial' => $middle_initial,
				'sex' => $sex,
				'birthdate' => $birthdate,
				'license' => $license,
				'expiry' => $expiry,
				'retirement' => $retirement,
				'policy_number' => $policy_number,
				'premium' => $premium,
				'contact_number' => $contact,
				'position' => $position,
				'status' => $status,
				'date_res' => $date_res,
				'address' => $address,
				'client' => $client,
				'agency' => $agency,
				'branch' => $branch,
				'hou_account' => $hou_account,
				'cs' => $cs,
				'cedula' => $cedula,
				'dep' => $dep,
				'sss_no' => $sss_no,
				'pag_ibig_no' => $pagibig_no,
				'acct_no' => $acct_no,
				'date_hire' => $date_hire,
				'insurance' => $insurance,
				'legal_policy_number' => $legal_policy_number,
				'legal_expiry' => $legal_expiry,
				'legal_premium' => $legal_premium,
				'mode_pay' => $mode_pay,
				'rate' => $rate,
				'effectivity' => $effectivity,
				'sss_group' => $sss_group,
				'pag_ibig_group' => $pagibig_group,
			);

           	if($action == 'add'){
           		$result = $this->Employee_model->save_employee($insert_data);
           	}else{
           		$result = $this->Employee_model->update_employee($insert_data,$employee_number);
           	}	
	  
	        if($result > 0)
	        {
	            $this->response_code = 0;
	            $this->response_message = "Save Successfully..";

	        }
	        else
	        {
	            $this->response_code = 1;
	            $this->response_message = "Fail";
	        }


	        echo json_encode(array(
	            "error"			=> $this->response_code,
	            "message"		=> $this->response_message
	            
	        ));


    	}

 


	}	



?>