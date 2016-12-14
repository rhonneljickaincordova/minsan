<?php
	class Staff extends CI_Controller{

		function __construct(){
    	    parent::__construct();
    	    $this->load->model('User_authentication_model');
    	    $this->load->model('User_model');
    	    $this->load->model('Employee_model');
    	    $this->load->model('Client_model');
	    }

	    function dashboard(){
	    	
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{

       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));
       			
		    	$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('dashboard/dashboard');
				$this->load->view('includes/footer');
	    	}
	    }

	    function add_employee(){
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{
       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));

       			$data['latest_id'] = $this->Employee_model->get_latest_id();

       			//if the DB is NULL
       			if($data['latest_id'] == NULL){
       				$data['action'] = 'add';
       			}
      			else{
       				// echo $_SERVER['QUERY_STRING'];
       				if($_SERVER['QUERY_STRING'] == NULL){
       					$data['action'] = 'add';
	       				foreach ($data['latest_id'] as $key) {
	       					$key->employee_id = $key->employee_id +1;
	       				}
	       			}else{
	       				$data['action'] = 'edit';
	       				foreach ($data['latest_id'] as $key) {
	       					$key->employee_id = $_REQUEST['id'];
	       				}
	       			}
       				
       			}
       			$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('employee/add_employee',$data);
				$this->load->view('includes/footer');
			}
	    }
	    function list_employee(){
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{
       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));
		    	$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('employee/manage_employee');
				$this->load->view('includes/footer');
			}
	    }
	    function add_client(){
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{
       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));
       			
       			$data['latest_id'] = $this->Client_model->get_latest_id();


       			if($data['latest_id'] == NULL){
       				$data['action'] = 'add';
       			}
       			else{
       				// echo $_SERVER['QUERY_STRING'];
       				if($_SERVER['QUERY_STRING'] == NULL){
       					$data['action'] = 'add';
	       				foreach ($data['latest_id'] as $key) {
	       					$key->client_id = $key->client_id +1;
	       				}
	       			}else{
	       				$data['action'] = 'edit';
	       				foreach ($data['latest_id'] as $key) {
	       					$key->client_id = $_REQUEST['id'];
	       				}
	       			}
       				
       			}



		    	$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('client/add_client');
				$this->load->view('includes/footer');
			}
	    }
	    function list_client(){
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{
       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));
		    	$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('client/manage_client');
				$this->load->view('includes/footer');
			}
	    }
	    function reports(){
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{
       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));
		    	$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('reports/manage_reports');
				$this->load->view('includes/footer');
			}
	    }
	    function payroll(){
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{
       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));
		    	$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('payroll/add_payroll');
				$this->load->view('includes/footer');
			}
	    }
	    function computing(){
	    	if(!$this->session->userdata('user_id')){
              redirect('login');
       		}else{
       			$data['user_info'] = $this->User_model->get_user_information($this->session->userdata('user_id'));
		    	$this->load->view('includes/header');
				$this->load->view('includes/nav-bar',$data);
				$this->load->view('computing/add_computing');
				$this->load->view('includes/footer');
			}
	    }



	}

?>