<?php

	class Reports extends CI_Controller{

		function __construct(){
    	    parent::__construct();
    	    $this->load->model('Reports_model');
            date_default_timezone_set('Asia/Taipei');
	    }

        function active_employees(){
            $data = $this->Reports_model->get_active_employees();
            $html = $this->load->view('reportTemplates/list_of_employees', $data, true);
            $file = "";

            ini_set('memory_limit','32M');
                 
            $this->load->library('m_pdf');
            $pdf = $this->m_pdf->load();
            $pdf->WriteHTML($html);
            $pdf->Output($file, 'I');
        }

        function active_clients(){
            $data = $this->Reports_model->get_active_clients();
            $html = $this->load->view('reportTemplates/list_of_clients', $data, true);
            $file = "";

            ini_set('memory_limit','32M');
                 
            $this->load->library('m_pdf');
            $pdf = $this->m_pdf->load();
            $pdf->WriteHTML($html);
            $pdf->Output($file, 'I');
        }
	}

?>