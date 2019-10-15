<?php
class kasir extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_kasir');
        $this->model_kasir->getsecurity();
    }
    
    function index()
    {
        $data['record']=  $this->model_kasir->tampildata();
        //$this->load->view('kasir/lihat_data',$data);
        $this->template->load('template','kasir/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses data
            $nama       =  $this->input->post('nama');
            $username   =  $this->input->post('username');
            $password   =  $this->input->post('password');
            $no_hp      =  $this->input->post('no_hp');
            $data       =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>$password,
                                    'no_hp'=>$no_hp);
            $username   =  $this->input->post('username');
            $sql = $this->db->query("SELECT username FROM kasir where username='$username'");
            $cek_nik = $sql->num_rows();
            if ($cek_nik > 0) {
            echo $this->session->set_flashdata('danger','<label class="label label-danger">Username Tidak Tersedia</label>');            redirect('kasir/post');
                    }else{
            $this->db->insert('kasir',$data);
                    }
            redirect('kasir');
        }
        else{
            //$this->load->view('kasir/form_input');
            $this->template->load('template','kasir/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id         =  $this->input->post('id',true);
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $no_hp      =  $this->input->post('no_hp',true);
            if(empty($password)){
                 $data  =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username);
            }
            else{
                  $data =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>$password,
                                    'no_hp'=>$no_hp);
            }
             $this->db->where('id_kasir',$id);
             $this->db->update('kasir',$data);
             redirect('kasir');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_kasir->get_one($id)->row_array();
            //$this->load->view('kasir/form_edit',$data);
            $this->template->load('template','kasir/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_kasir',$id);
        $this->db->delete('kasir');
        redirect('kasir');
    }
}