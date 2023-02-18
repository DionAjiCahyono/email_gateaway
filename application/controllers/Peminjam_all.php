<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Peminjam_all extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Delete_selected');
  }
  
  public function index(){
    $data['peminjam'] = $this->Delete_selected->view();
    $this->load->view('header');
    $this->load->view('view', $data);
	$this->load->view('footer');
    // Load view view.php
  }
    
    public function delete(){
        $id_peminjam = $_POST['id_peminjam']; // Ambil data id_peminjam yang dikirim oleh view.php melalui form submit
        $this->Delete_selected->delete($id_peminjam); // Panggil fungsi delete dari model
        
        redirect('Data_peminjam');
    }
    public function delete_otoma(){
      $id_peminjam = $_POST['id_peminjam']; // Ambil data id_peminjam yang dikirim oleh view.php melalui form submit
      $this->Delete_selected->delete($id_peminjam); // Panggil fungsi delete dari model
      
      redirect('Email_id');
  }
    
}