<?php
class model_auth extends CI_Model{
    

  public function getlogin($username,$password) {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('kasir');

        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              $sesi = array('username' => $row->username);
              $this->session->set_userdata($sesi);
              redirect('dashboard');
            }
        }
        else {
          $this->session->set_flashdata('delete_msg','<div class="alert alert-danger">Email atau Password Salah </div class="fa fa-info" >');
          redirect('auth/login');
        }
    }

    public function getsecurity() {
    $username = $this->session->userdata('username');
    if (empty($username)) {
          $this->session->sess_destroy();
          redirect('');
        }
    }

}