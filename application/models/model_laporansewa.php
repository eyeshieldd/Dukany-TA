<?php
class model_laporansewa extends ci_model
{
    
    
    function laporan_default()
    {
        $query = "SELECT * FROM transaksisewa
                  join transaksisewadetaill
                  join kasir
                  WHERE transaksisewa.no_nota=transaksisewadetaill.no_nota and transaksisewa.id_kasir=kasir.id_kasir ORDER BY transaksisewa.no_nota DESC
                  -- join barangjual
                  ";

        return $this->db->query($query);
    }
    
    function laporan_periode($tanggal1,$tanggal2)
    {
        $query = "SELECT transaksisewa.id_transaksisewa,  transaksisewa.tanggal,transaksisewadetaill.keterangan, kasir.nama_lengkap, transaksisewa.no_nota,  transaksisewadetaill.nama_barangsewa,transaksisewadetaill.lama_sewa, transaksisewadetaill.harga_sewa from transaksisewa join kasir on transaksisewa.id_kasir = kasir.id_kasir
        join transaksisewadetaill on transaksisewa.no_nota=transaksisewadetaill.no_nota 
        WHERE transaksisewa.tanggal between '$tanggal1' and '$tanggal2' order by no_nota asc";

                /*$query = "SELECT * FROM `transaksijual`
                  join transaksijualdetail
                  join barangjual
                  join kasir
                  WHERE transaksijual.no_nota=transaksijualdetail.no_nota and transaksijualdetail.id_barangjual=barangjual.id_barangjual and transaksijual.id_kasir=kasir.id_kasir  and transaksijual.tanggal between '$tanggal1' and '$tanggal2'
                group by transaksijual.id_transaksijual

                  ";*/
        return $this->db->query($query);
    }

     
// WHERE transaksijual.no_nota=transaksijualdetail.no_nota and transaksijualdetail.id_barangjual=barangjual.id_barangjual and transaksijual.id_kasir=kasir.id_kasir 
    
}