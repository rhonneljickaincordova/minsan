<?php

class Client extends CI_Controller{

	function __construct(){
	    parent::__construct();
	    $this->load->model('Client_model');
        $this->load->model('User_model');
    }

	function index(){
		
	}

	function get_all_client(){

	}

	function save_client(){

        $_POST = json_decode(file_get_contents('php://input'), true);

        $client_number = $_POST['client_number'];
        $client_name = $_POST['client_name'];
        $address = $_POST['address'];
        $contact_person = $_POST['contact_person'];
        $tel_number = $_POST['tel_number'];
        $agn_brn = $_POST['agn_brn'];
        $tax_percentage = $_POST['tax_percentage'];
        $vat_percentage = $_POST['vat_percentage'];
        $sss = $_POST['sss'];
        $n_prn = $_POST['n_prn'];
        $effective = $_POST['effective'];
        $action = $_POST['action'];
    	

       	$insert_data = array(
			'name' => $client_name,
			'address' => $address,
			'contact_person' => $contact_person,
			'telephone_number' => $tel_number,
			'agn_brn' => $agn_brn,
			'tax' => $tax_percentage,
			'vat' => $vat_percentage,
			'sss' => $sss,
			'n_prn' => $n_prn,
			'effective' => $effective
		);


       	if($action == 'add'){
       		$result = $this->Client_model->save_client($insert_data);
       	}else{
       		$result = $this->Client_model->update_client($insert_data,$client_number);
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
