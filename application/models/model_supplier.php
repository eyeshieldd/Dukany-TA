<?php
class model_supplier extends CI_Model{
    
    
    
    function tampilkan_data(){
        
        // return $this->db->get('supplier');
      return $this->db->query("SELECT * FROM `supplier` ORDER BY id_supplier DESC");
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from supplier");
  }
     function post($data)
    {
        $this->db->insert('supplier',$data);
    }
    
    
   function edit($id,$data)
    {
        $this->db->where('id_supplier',$id);
        $this->db->update('supplier',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('id_supplier'=>$id);
        return $this->db->get_where('supplier',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('supplier',$id);
        $this->db->delete('supplier');
    }

      public function getsecurity() {
    $username = $this->session->userdata('username');
    if (empty($username)) {
          $this->session->sess_destroy();
          redirect('');
        }
    }


}