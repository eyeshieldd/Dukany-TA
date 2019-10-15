<?php
class model_kasir extends CI_Model{
    
    
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('kasir',array('username'=>$username,'password'=> $password));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function getDataUser(){
        $query = $this->db->get('users');
        return $query->result();
    }
    
    
    function tampildata()
    {
        return $this->db->query("SELECT * FROM `kasir` ORDER BY id_kasir DESC");
    }
    
    function get_one($id)
    {
        $param  =   array('id_kasir'=>$id);
        return $this->db->get_where('kasir',$param);
    }

      public function getsecurity() {
    $username = $this->session->userdata('username');
    if (empty($username)) {
          $this->session->sess_destroy();
          redirect('');
        }
    }
}