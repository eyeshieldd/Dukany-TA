<?php
class model_dashboard extends CI_Model{

  public function getDataUser(){
    $query = $this->db->get('kasir');
    return $query->result();
  }

  public function getsecurity() {
    $username = $this->session->userdata('username');
    if (empty($username)) {
          $this->session->sess_destroy();
          redirect('');
        }
    }  
    

}