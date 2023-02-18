<?php
class MpeminjamCRUD extends CI_Model {

  public function tampilData() {
    // return $this->db->get_where("tb_peminjam", array('jabatan_pengguna' => 'Atasan'));
    return $this->db->get_where("tb_peminjam");
  }

  public function fungsiTambah($data) {
    $this->db->insert('tb_peminjam', $data);
  }

  public function halamanUpdate($where, $table) {
    return $this->db->get_where($table, $where);
  }
  public function getDataById($id)
  {
      return $this->db->get_where('tb_peminjam', ['id_peminjam' => $id])->row_array();
  }

  public function fungsiUpdate($id_peminjam, $data) {
    $this->db->where('id_peminjam', $id_peminjam);
		$this->db->update('tb_peminjam', $data);
  }

  function fungsiDelete($id_peminjam) {
    $this->db->where('id_peminjam', $id_peminjam);
    $this->db->delete('tb_peminjam');
	}
  function tampilByterlambat(){

    $date = date("Y-m-d");

    $this->db->select('*');
    $this->db->from('tb_peminjam');
    $array = array('tgl_pengembalian <' => $date);
    $this->db->where($array);
    $query = $this->db->get();
    return $query->result();

  //  return $this->db->get_where('tb_peminjam', ['tgl_pengembalian < CURRENT_TIMESTAMP'])->result(); 

  }
  public function getAllid($id_peminjam) {
    $this->db->where_in('id_peminjam', $id_peminjam);
    $this->db->delete('tb_peminjam');
  }



}

?>