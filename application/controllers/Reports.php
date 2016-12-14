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

        function computing_reports(){
            $data = "";
            $html = $this->load->view('reportTemplates/computing_report', $data, true);
            $file = "";

            ini_set('memory_limit','32M');
                 
            $this->load->library('m_pdf');
            $pdf = $this->m_pdf->landscape_pdf();
            
            $pdf->SetFooter(array(
                'L' => array(
                    'content' => 'Report Generate on {DATE m-j-Y H:i:s}',
                    'font-style' => '',
                    'font-size' => '9',
                ),
                'R' => array(
                    'content' => '{PAGENO}',
                    'font-style' => '',
                    'font-size' => '9',
                ),
                'line' => 1,
            ), 'O' );

            $pdf->SetFooter(array(
                'L' => array(
                    'content' => 'Report Generate on {DATE m-j-Y H:i:s}',
                    'font-style' => '',
                    'font-size' => '9',
                ),
                'R' => array(
                    'content' => '{PAGENO}',
                    'font-style' => '',
                    'font-size' => '9',
                ),
                'line' => 1,
            ), 'E' );
            $pdf->WriteHTML($html);
            $pdf->Output($file, 'I');
        }
	}

?>