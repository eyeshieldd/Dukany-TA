<?php
class model_barangsewa extends ci_model{

    
    function lihat_data()
    {
        $query=  "SELECT  *  from barangsewa";
        
        return $this->db->query($query);
    }


    function post($data)
    {
        $this->db->insert('barangsewa',$data);
    }

    function get_kobar(){
        $q = $this->db->query("SELECT MAX(RIGHT(id_barangsewa,6)) AS kd_max FROM barangsewa");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "BS".$kd;
    }
    
    function get_one($id)
    {
        $param  =   array('id_barangsewa'=>$id);
        return $this->db->get_where('barangsewa',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_barangsewa',$id);
        $this->db->update('barangsewa',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_barang',$id);
        $this->db->delete('barangsewa');
    }

      public function getsecurity() {
        $username = $this->session->userdata('username');
        if (empty($username)) {
              $this->session->sess_destroy();
              redirect('');
            }
    }
}