<?php
class barangsewa extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_barangsewa');
        $this->load->model('model_supplier');
        $this->model_barangsewa->getsecurity();
    }


    function index()
    {
        $data['record'] = $this->model_barangsewa->lihat_data();
        $this->template->load('template','barangsewa/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses barangsewa
            $kode       =$this->model_barangsewa->get_kobar();
            $nama       =   $this->input->post('nama');
            $sewa       =   $this->input->post('sewa');
            $status     =   $this->input->post('status');
           

            $data       =   array(  'kode_barang'       =>$kode,
                                    'nama_barangsewa'   =>$nama,
                                    'harga_sewa'        =>$sewa,
                                    'status'            =>$status,
                                   
                                    );
            $this->model_barangsewa->post($data);
            redirect('barangsewa');
        }
        else{
            $this->template->load('template','barangsewa/form_input');
        }
    }



    function edit()
    {
        if(isset($_POST['submit'])){
            // proses edit barangsewa
            $id         =  $this->input->post('id',true);
            $sewa       =  $this->input->post('sewa',true);
            $status       =  $this->input->post('status',true);
            $kondisi       =  $this->input->post('kondisi',true);
            $keterangan =  $this->input->post('keterangan',true);
            if(empty($data)){
                 $data  =  array(   
                    'harga_sewa'=>$sewa,
                    'status'=>$status
                 
                   );
            
            }
             $this->db->where('id_barangsewa',$id);
             $this->db->update('barangsewa',$data);
             redirect('barangsewa');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_barangsewa->get_one($id)->row_array();
            $this->template->load('template','barangsewa/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_barangsewa',$id);
        $this->db->delete('barangsewa');
        redirect('barangsewa');
    }
}