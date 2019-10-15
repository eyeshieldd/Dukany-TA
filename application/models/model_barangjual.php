<?php
class model_barangjual extends ci_model{

    
    function tampilkan_data()
    {
        $query=  "SELECT  *  from barangjual bs JOIN supplier sp on bs.id_supplier = sp.id_supplier ORDER BY id_barangjual DESC ";
        
        return $this->db->query($query);
    }


    function post($data)
    {
        $this->db->insert('barangjual',$data);
    }

    function get_kobar(){
        $q = $this->db->query("SELECT MAX(RIGHT(id_barangjual,6)) AS kd_max FROM barangjual");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "BJ".$kd;
    }
    
    function get_one($id)
    {
        $param  =   array('id_barangjual'=>$id);
        return $this->db->get_where('barangjual',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_barangjual',$id);
        $this->db->update('barangjual',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_barangjual',$id);
        $this->db->delete('barangjual');
    }

      public function getsecurity() {
        $username = $this->session->userdata('username');
        if (empty($username)) {
              $this->session->sess_destroy();
              redirect('');
            }
        }
}