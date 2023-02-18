<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peminjamCRUD extends CI_Controller
{

    public function index()
    {
        $data['peminjam']= $this->MpeminjamCRUD->tampilData()->result();
        
        $this->load->view('header');
		$this->load->view('Data_peminjam/tambah_data_peminjam',$data);
		$this->load->view('footer');
   
    }
    public function fungsiTambah() {
        $id_peminjam = $this->input->post('id_peminjam');
        $nama_peminjam = $this->input->post('nama_peminjam');
		$alamat = $this->input->post('alamat');
		$email_peminjam = $this->input->post('email_peminjam');
        $nama_buku = $this->input->post('nama_buku');
        $tgl_peminjaman = $this->input->post('tgl_peminjaman');
        $tgl_pengembalian = $this->input->post('tgl_pengembalian');

        $ArrInsert = array(
        'id_peminjam' => $id_peminjam,
        'nama_peminjam' => $nama_peminjam,
		'alamat' => $alamat,
		'email_peminjam' => $email_peminjam,
        'nama_buku' => $nama_buku,
        'tgl_peminjaman' => $tgl_peminjaman,
        'tgl_pengembalian' => $tgl_pengembalian,
        );

        $this->db->insert('tb_peminjam', $ArrInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect(base_url('Data_peminjam/index'));
    }

	public function halamanUpdate($id_peminjam) {
		$where = array('id_peminjam' => $id_peminjam);
		$this->load->model('MAtasanCRUD');
		$data['atasan'] = $this->MAtasanCRUD->halamanUpdate($where, 'tb_peminjam')->result();
		$this->load->view('/operator/VHeader');
		$this->load->view('/operator/VSidebar');
		$this->load->view('/operator/VAtasanUpdate', $data);
		$this->load->view('/operator/VFooter');
	}

	public function fungsiUpdate() {
		$id_peminjam = $this->input->post('id_peminjam');
        $nama_peminjam = $this->input->post('nama_peminjam');
		$alamat = $this->input->post('alamat');
		$email_peminjam = $this->input->post('email_peminjam');
        $nama_buku = $this->input->post('nama_buku');

        $ArrUpdate = array(
        'id_peminjam' => $id_peminjam,
        'nama_peminjam' => $nama_peminjam,
		'alamat' => $alamat,
		'email_peminjam' => $email_peminjam,
        'nama_buku' => $nama_buku,
        );

		$this->db->where('id_peminjam', $id_peminjam);
		$this->db->update('tb_peminjam', $ArrUpdate);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil diubah</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('operator/CAtasanCRUD/index'));
	}

	public function fungsiDelete($id_peminjam) {
		$this->db->where('id_peminjam', $id_peminjam);
		$this->db->delete('tb_peminjam');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect(base_url('operator/CAtasanCRUD/index'));
	}
    
}
