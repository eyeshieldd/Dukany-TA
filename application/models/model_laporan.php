<?php
class model_laporan extends ci_model
{
    
    
    function laporan_default()
    {
        $query = "SELECT * FROM transaksijualdetail
                  ORDER BY transaksijualdetail.tanggal DESC
                  -- join barangjual
                  ";

        return $this->db->query($query);
    }
    
    function laporan_periode($tanggal1,$tanggal2)
    {
$query = "SELECT * from transaksijualdetail 
WHERE transaksijualdetail.tanggal between '$tanggal1' and '$tanggal2' order by no_nota asc";

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