<?php
class barangjual extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_barangjual');
        $this->load->model('model_supplier');
        $this->model_barangjual->getsecurity();
    }


    function index()
    {
        $data['record'] = $this->model_barangjual->tampilkan_data();
        $this->template->load('template','barangjual/lihat_data',$data);
    }
    
    function post()
    
    {   if(isset($_POST['submit'])){
            // proses barang
            
            $kode      =$this->model_barangjual->get_kobar();
  
            $supplier   =   $this->input->post('supplier');
            $nama       =   $this->input->post('nama');
            $beli       =   $this->input->post('beli');
            $jual       =   $this->input->post('jual');
            $stok       =   $this->input->post('stok');
            $keterangan =   $this->input->post('keterangan');

            $data       =   array(  'kode_barang'       =>$kode,
                                    'id_supplier'       =>$supplier,
                                    'nama_barangjual'   =>$nama,
                                    'harga_beli'        =>$beli,
                                    'harga_jual'        =>$jual,
                                    'stok'              =>$stok,
                                    'keterangan'        =>$keterangan);
            $this->model_barangjual->post($data);
            redirect('barangjual');
        }
        else{
            $this->load->model('model_supplier');
            $data['supplier']=  $this->model_supplier->tampilkan_data()->result();
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template','barangjual/form_input',$data);
        }
        // if(isset($_POST['submit'])){
        //     // proses barangjual
        //     $kode       =   $this->input->post('kode');
        //     $supplier   =   $this->input->post('supplier');
        //     $nama       =   $this->input->post('nama');
        //     $beli       =   $this->input->post('beli');
        //     $jual       =   $this->input->post('jual');
        //     $stok       =   $this->input->post('stok');
        //     $merk       =   $this->input->post('merk');
        //     $keterangan =   $this->input->post('keterangan');

        //     $data       =   array(  'kode_barang'       =>$kode,
        //                             'id_supplier'       =>$supplier,
        //                             'nama_barangjual'   =>$nama,
        //                             'harga_beli'        =>$beli,
        //                             'harga_jual'        =>$jual,
        //                             'stok'              =>$stok,
        //                             'merk'              =>$merk,
        //                             'keterangan'        =>$keterangan);
        //     $this->model_barangjual->post($data);
        //     redirect('barangjual');
        // }
        // else{
        //     $this->template->load('template','barangjual/form_input');
        // }
    }



    function edit()
    {
        if(isset($_POST['submit'])){
            // proses edit barangjual
            $id         =  $this->input->post('id',true);
            $jual       =  $this->input->post('jual',true);
            $stok       =  $this->input->post('stok',true);
            $keterangan =  $this->input->post('keterangan',true);
            if(empty($data)){
                 $data  =  array(   
                    'harga_jual'=>$jual,
                    'stok'=>$stok,
                    'keterangan'=>$keterangan);
            
            }
             $this->db->where('id_barangjual',$id);
             $this->db->update('barangjual',$data);
             redirect('barangjual');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_barangjual->get_one($id)->row_array();
            $this->template->load('template','barangjual/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_barangjual',$id);
        $this->db->delete('barangjual');
        redirect('barangjual');
    }
}