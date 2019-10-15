<?php
class Dashboard extends CI_Controller{
    
    function __construct()
    {
       	parent::__construct();
 		$this->load->model("model_dashboard");
		$this->model_dashboard->getsecurity();
 		// $this->data['getDataUser'] = $this->model_dashboard->getData();

    }

    function index(){
        // chek_session();
        // print_r(chek_session);
        $data['getDataUser'] = $this->model_dashboard->getDataUser();
        // $memble['getsecurity'] = $this->model_dashboard->getsecurity();
        // print_r($data);
        $username = $this->session->userdata('username');
        // print_r($username);
        // $ass = 
        $this->template->load('template','v_dashboard',$username);
        // $this->template->load('template');
		// $this->template->load('v_dashboard');
        // $this->load->view('template','v_dashboard',$username);
        // $this->load->view('v_dashboard');	
    }


}