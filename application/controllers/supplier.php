<?php
class supplier extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_supplier');
        $this->model_supplier->getsecurity();
    }


    function index()
    {
        $data['record'] = $this->model_supplier->tampilkan_data();
        $this->template->load('template','supplier/lihat_data',$data);
    }
     function post()
    {
        if(isset($_POST['submit'])){
            // proses barang
            $nama        =   $this->input->post('nama_supplier');
            $nomer       =   $this->input->post('no_hp');
            $alamat      =   $this->input->post('alamat');
            
            $data        = array('nama_supplier'=>$nama,
                                'no_hp'=>$nomer,
                                'alamat'=>$alamat);
            $this->model_supplier->post($data);
            redirect('supplier');
        }
        else{
            //$this->load->view('operator/form_input');
            $this->template->load('template','supplier/form_input');
        }
    }
    //   function edit()
    // {
    //    if(isset($_POST['submit'])){
    //         // proses barang
    //         $id         =    $this->input->post('id');
    //         $nama        =   $this->input->post('nama_supplier');
    //         $nomer       =   $this->input->post('no_hp');
    //         $alamat      =   $this->input->post('alamat');
    //         $data        = array('nama'=>$nama,
    //                             'no_hp'=>$nomer,
    //                             'alamat'=>$alamat);
    //         $this->model_supplier->edit($data,$id);
    //         redirect('supplier');
    //     }
    //       else{
    //         $id=  $this->uri->segment(3);
    //         $data['record']=  $this->model_supplier->get_one($id)->row_array();
    //         //$this->load->view('kategori/form_edit',$data);
    //         $this->template->load('template','supplier/form_edit',$data);
    //     }
    // }

  //   function edit() {
  //   // $this->Model_security->getsecurity();
  //   $id              = $this->input->post('id_supplier');
  //   $nama            = $this->input->post('nama');
  //   $nomer           = $this->input->post('no_hp');
  //   $alamat          = $this->input->post('alamat');
  //   $data            = array(
  //     'id_supplier'         => $id,
  //     'nama_supplier'       => $nama,
  //     'no_hp'               => $nomer,
  //     'alamat'              => $alamat
  //               );
  // $id = $this->input->post('id_supplier');
  // $this->model_supplier->edit($id,$data);
  // redirect('supplier');
  // }

  //   function ubah($id) {
  //   // $this->Model_security->getsecurity();
  //       // $data['ed'] = 'update';
  //       $data['record']=  $this->model_supplier->get_one($id)->row_array();
  //       // print_r($data);
  //       $this->template->load('template','supplier/form_edit',$data);
  //   }

    // function edit()
    // {
    //     if(isset($_POST['submit'])){
    //         // proses kategori
    //         $id         =  $this->input->post('id',true);
    //         $nama       =  $this->input->post('nama_supplier',true);
    //         $no_hp      =  $this->input->post('no_hp',true);
    //         $alamat     =  $this->input->post('alamat',true);



    //          $this->db->where('id_supplier',$id);
    //          $this->db->update('supplier',$data);
    //          redirect('supplier');
    //     }
    //     else{
    //         $id=  $this->uri->segment(3);
    //         //$this->load->view('supplier/form_edit',$data);
    //         $this->template->load('template','supplier/form_edit',$data);
    //     }
    // }

    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id         =  $this->input->post('id',true);
            $nama       =  $this->input->post('nama',true);
            $no_hp      =  $this->input->post('no_hp',true);
            $alamat      =  $this->input->post('alamat',true);
            if(empty($data)){
                 $data  =  array(   
                    'nama_supplier'=>$nama,
                    'no_hp'=>$no_hp,
                    'alamat'=>$alamat);
            
            }
             $this->db->where('id_supplier',$id);
             $this->db->update('supplier',$data);
             redirect('supplier');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_supplier->get_one($id)->row_array();
            //$this->load->view('supplier/form_edit',$data);
            $this->template->load('template','supplier/form_edit',$data);
        }
    }


     function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_supplier',$id);
        $this->db->delete('supplier');
        redirect('supplier');
    }

   
}