<?php

	class Admin extends CI_Controller{

		function __construct(){
    	    parent::__construct();
    	    $this->load->model('User_authentication_model');
    	    $this->load->model('User_model');
	    }

	    function manage_user(){
	    	
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{

       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));
       			
		    	$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('Admin/manage_user');
				$this->load->view('includes/footer');
	    	}
	    }

	    function get_all_user(){
	    	$_POST = json_decode(file_get_contents('php://input'), true);
        	$id = $_POST['id'];
	    	$data['users'] = $this->User_model->get_all_user();
	    	return print json_encode($data);
    		
        }

        function update_user(){
        	$_POST = json_decode(file_get_contents('php://input'), true);
        	$user_id = $_POST['user_id'];
        	$firstname = $_POST['firstname'];
        	$lastname = $_POST['lastname'];
        	$contact = $_POST['contact'];
        	$username = $_POST['username'];
        	$password = $_POST['password'];


        	$insert_data = array(
                'first_name' => $firstname,
                'last_name' => $lastname,
                'contact' => $contact,
                'username' => $username,
                'password' => $password,
                'updated_on' => date("Y-m-d H:i:s"),
                'updated_by' => $this->session->userdata('user_id'),
            
            );

            $inserted = $this->User_model->update_user($insert_data,$user_id);


            if($inserted > 0 )
            {

                $this->response_code = 0;
                $this->response_message = "Update Successfully";

            }
            else
            {
                $this->response_code = 1;
                $this->response_message = "Failed to update.";
            }


            echo json_encode(array(
                "error"         => $this->response_code,
                "message"       => $this->response_message,
            ));


        }


        function update_status(){
        	$_POST = json_decode(file_get_contents('php://input'), true);
        	$user_id = $_POST['user_id'];
        	$status = $_POST['status'];

        	$insert_data = array(
                'status' => $status,
                'updated_on' => date("Y-m-d H:i:s"),
                'updated_by' => $this->session->userdata('user_id'),
            
            );

            $inserted = $this->User_model->update_user($insert_data,$user_id);


            if($inserted > 0 )
            {

                $this->response_code = 0;
                $this->response_message = "Update Successfully";

            }
            else
            {
                $this->response_code = 1;
                $this->response_message = "Failed to update.";
            }


            echo json_encode(array(
                "error"         => $this->response_code,
                "message"       => $this->response_message,
            ));


        }

	}

?>