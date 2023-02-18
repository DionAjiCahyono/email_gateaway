<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Delete_selected extends CI_Model {
  public function tampil_data(){
    return $this->db->get('tb_peminjam')->result();
  }
    
  public function delete($id_peminjam){
        $this->db->where_in('id_peminjam', $id_peminjam);
    $this->db->delete('tb_peminjam');
  }
}