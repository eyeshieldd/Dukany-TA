<?php
class model_transaksisewa extends ci_model
{
    
    
    function simpan_barang()
    {
        $nama_barangsewa    =  $this->input->post('barang');
        $lama_sewa           =  $this->input->post('jumlah');
        $keterangan          =  $this->input->post('keterangan');
        $idbarangsewa       =  $this->db->get_where('barangsewa',array('nama_barangsewa'=>$nama_barangsewa))->row_array();

        $data               =  array('id_barangsewa'=>$idbarangsewa['id_barangsewa'],
                                'lama_sewa'         =>$lama_sewa,
                                'keterangan'        =>$keterangan,
                                'harga_sewa'        =>$idbarangsewa['harga_sewa'],
                                'kode_barang'       =>$idbarangsewa['kode_barang'],
                                'nama_barangsewa'   =>$idbarangsewa['nama_barangsewa']);
                                
        $this->db->insert('transaksisewadetaill',$data);
    }
    
    function tampilkan_detail_transaksi()
    {


        $query  ="SELECT *
                FROM transaksisewadetaill as tjd join barangsewa as bj
                where tjd.id_barangsewa=bj.id_barangsewa and tjd.status=1
                ORDER BY `id_transaksisewadetail` ASC
                ";
                
        return $this->db->query($query);
    }
    
    function hapusitem($id)
    {
        $this->db->where('id_transaksisewadetail',$id);
        $this->db->delete('transaksisewadetaill');
    }
    
    
    function selesai_belanja($data,$data1,$data2)
    {
        
        $this->db->insert('transaksisewa',$data);

        $this->db->where('status', 1);
        $this->db->update('transaksisewadetaill',$data2);
        $this->db->update('transaksisewadetaill',$data1);


    }
    
    

      public function getsecurity() {
    $username = $this->session->userdata('username');
    if (empty($username)) {
          $this->session->sess_destroy();
          redirect('');
        }
    }

    
}