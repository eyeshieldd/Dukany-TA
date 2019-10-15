<?php
class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        // $this->load->model('model_kasir');
        $this->load->database();
    }
    
    function login()
    {
        // if(isset($_POST['submit'])){
            
        //     // proses login disini
        //     $username   =   $this->input->post('username');
        //     $password   =   $this->input->post('password');
        //     $hasil=  $this->model_kasir->login($username,$password);
        //     if($hasil == 1)
        //     {
        //         // update last login
        //         $this->db->where('username',$username);
        //         $this->db->update('kasir',array('last_login'=>date('Y-m-d')));
        //         $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
        //         redirect('dashboard');
        //     }
        //     else{
        //         redirect('auth/login');
        //     }
        // }
        // else{
        //     //$this->load->view('form_login2');
        //     chek_session_login();
        //     $this->load->view('form_login');
        // }
        $this->load->view('form_login');
    }
    
    public function getlogin() {
      $username    = $this->input->post('username');
      $password    = $this->input->post('password');
      // $pwd      = md5($password);
      $this->db->where('username',$username);
      $this->db->where('password',$password);
      $query = $this->db->get('kasir');

        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              $sesi = array('username' => $row->username);
              $this->session->set_userdata($sesi);
              
            // print_r($sesi);
              redirect('dashboard');
            }
        }
        else {
          $this->session->set_flashdata('delete_msg','<div class="alert alert-warning">Username dan Password Tidak Cocok</div>');
          redirect('auth/login');
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}