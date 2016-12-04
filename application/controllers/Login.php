<?php

	class Login extends CI_Controller{

		function __construct(){
    	    parent::__construct();
    	    $this->load->model('User_authentication_model');
	        $this->load->model('User_model');
	    
	    }


		function index(){
			$this->load->view('includes/header');
			$this->load->view('login/index');
			$this->load->view('includes/footer');
		}

		function user_authentication(){

	    
	        $_POST = json_decode(file_get_contents('php://input'), true);

	        $username =  $_POST['username'];
	        $password =  $_POST['password'];

	        $result = $this->User_authentication_model->get_user_credentials($username,$password);

	       
	        if($result == null)
	        {
	            $this->position_id = '';
	            $this->response_code = 1;
	            $this->response_message = "Incorrect Credentials.";

	        }
	        else
	        {
	            $this->session->set_userdata('user_id',$result->user_id);
	            $this->position_id = $result->position;
	            $this->response_code = 0;
	            $this->response_message = "Success...";
	        }


	        echo json_encode(array(
	            "error"			=> $this->response_code,
	            "position"      => $this->position_id,    
	            "message"		=> $this->response_message
	            
	        ));


    	}

    	function save_new_user(){

    		$_POST = json_decode(file_get_contents('php://input'), true);

    		$first_name 	=  $_POST['firstname'];
	        $last_name 	=  $_POST['lastname'];
			$contact 	=  $_POST['contact'];
	        $username 	=  $_POST['username'];
	        $password 	=  $_POST['password'];


            $insert_data = array(
                'first_name' 	=> $first_name,
                'last_name' 	=> $last_name,
                'contact' 		=> $contact,
                'username' 		=> $username,
                'password' 		=> $password,
                'status'		=> 1,
                'position'		=> 1,	
                'entered_on' 	=> date("Y-m-d H:i:s"),
                'entered_by' 	=> $this->session->userdata('user_id'),
            );

            $inserted = $this->User_model->save_user($insert_data);

	        if($inserted > 0 )
	        {
	            $this->response_code = 0;
	            $this->response_message = "Save Successfully";

	        }
	        else
	        {
	            $this->response_code = 1;
	            $this->response_message = "Failed to save.";
	        }


	        echo json_encode(array(
	            "error"         => $this->response_code,
	            "message"       => $this->response_message,
	        ));
    	}



    	function logout(){

	        $_POST = json_decode(file_get_contents('php://input'), true);
	        $this->session->set_userdata('user_id','');
	        $this->session->sess_destroy();
	        redirect('login');
    	
    	}


	}	



?>