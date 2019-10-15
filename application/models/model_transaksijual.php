<?php
class model_transaksijual extends ci_model
{
    
    
    function simpan_barang()
    {
        $nama_barangjual    =  $this->input->post('barang');
        $jumlah             =  $this->input->post('jumlah');
        $idbarang           =  $this->db->get_where('barangjual',array('nama_barangjual'=>$nama_barangjual))->row_array();
        $user               =  $this->session->userdata('username');
        $no_nota            =  date('YmdHis');
        $tanggal            =  date('YmdHis');  
        $id_kasir           =  $this->db->get_where('kasir',array('username'=>$user))->row_array();
        $data               =  array('id_barangjual'=>$idbarang['id_barangjual'],
                                'jumlah'            =>$jumlah,
                                'kode_barang'       =>$idbarang['kode_barang'],
                                'nama_barangjual'   =>$idbarang['nama_barangjual'],
                                'no_nota'           =>$no_nota,
                                'tanggal'           =>$tanggal,
                                'id_kasir'          =>$id_kasir['id_kasir'],
                                'nama_lengkap'      =>$id_kasir['nama_lengkap'],
                                'harga_jual'        =>$idbarang['harga_jual']);
        $this->db->insert('transaksijualdetail',$data);
    }
    
    function tampilkan_detail_transaksi()
    {


        $query  ="SELECT *
                FROM transaksijualdetail as tjd join barangjual as bj
                where bj.id_barangjual=tjd.id_barangjual and status=1
                ORDER BY `id_transaksijualdetail` ASC
                ";
        return $this->db->query($query);
    }
    
    function hapusitem($id)
    {
        $this->db->where('id_transaksijualdetail',$id);
        $this->db->delete('transaksijualdetail');
    }
    
    
    function selesai_belanja($data,$data1,$data2)
    {
        
        $this->db->where('status', 1);
        $this->db->update('transaksijualdetail',$data);


    }
    

      public function getsecurity() {
    $username = $this->session->userdata('username');
    if (empty($username)) {
          $this->session->sess_destroy();
          redirect('');
        }
    }

    
}