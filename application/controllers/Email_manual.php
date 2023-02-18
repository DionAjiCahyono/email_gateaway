<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Email_manual extends CI_Controller

{

    function __construct(){
            parent::__construct();
            // Include librari phpmailer
            require APPPATH.'libraries/phpmailer/Exception.php';
            require APPPATH.'libraries/phpmailer/PHPMailer.php';
            require APPPATH.'libraries/phpmailer/SMTP.php';
            $this->load->library('session');
            $this->load->library('MyPHPMailer'); 
    }


    public function index()
    {
    	$data['title'] = 'Email Gateway';

    
        $this->load->view('header');
		$this->load->view('Email/email_manual');
		$this->load->view('footer');
   
    }


    public function emailSend(){
        $email_pengirim = 'mbkmemail86@gmail.com'; // Isikan dengan email pengirim
        $nama_pengirim = 'Dinas Perpustakaan Dan Kearsipan kab.madiun'; // Isikan dengan nama pengirim
        $email_peminjam = $_POST['email_peminjam']; // Ambil email penerima dari inputan form
        $subjek = $_POST['subjek']; // Ambil subjek dari inputan form
        $pesan = $_POST['pesan']; // Ambil pesan dari inputan form
        $attachment = $_FILES['attachment']['name']; // Ambil nama file yang di upload
        
        $mail = new PHPMailer;
        $mail->isSMTP();
        
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $email_pengirim; // Email Pengirim
        $mail->Password = 'uzxg erod rlru jywv'; // Isikan dengan Password email pengirim
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
        
        $mail->setFrom($email_pengirim, $nama_pengirim);
        $mail->addAddress($email_peminjam, '');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
        
        // Load file content.php
        ob_start();
        echo $pesan;
        
        $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
        ob_end_clean();
        
        $mail->Subject = $subjek;
        $mail->Body = $content;
        $mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
        
        if(empty($attachment)){ // Jika tanpa attachment
            $send = $mail->send();
        
            if($send){ // Jika Email berhasil dikirim
                $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil </h4>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button>
                        <p>Terima kasih. Pesan telah berhasil di kirimkan ke '.$email_peminjam.'</p>
                    </div>');    
                    $this->load->view('header');
                    $this->load->view('Email/email_manual');
                    $this->load->view('footer');
            }else{ // Jika Email gagal dikirim
                $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button>
                    <p>Maaf Pesan gagal di kirim ke '.$email_peminjam.'</p>
                    
                </div>');    
                $this->load->view('header');
                $this->load->view('Email/email_manual');
                $this->load->view('footer');
            }
        }else{ // Jika dengan attachment
            $tmp = $_FILES['attachment']['tmp_name'];
            $size = $_FILES['attachment']['size'];
        
            if($size <= 25000000){ // Jika ukuran file <= 25 MB (25.000.000 bytes)
                $mail->addAttachment($tmp, $attachment); // Add file yang akan di kirim
        
                $send = $mail->send();
        
                if($send){ // Jika Email berhasil dikirim
                    $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil </h4>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button>
                        <p>Terima kasih. Pesan telah berhasil di kirimkan ke '.$email_peminjam.'</p>
                    </div>');    
                    $this->load->view('header');
                    $this->load->view('Email/email_manual');
                    $this->load->view('footer');
                }else{ // Jika Email gagal dikirim
                    $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Oppss</h4>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                           </button>
                        <p>Maaf Pesan gagal di kirim ke '.$email_peminjam.'</p>
                        
                    </div>');    
                    $this->load->view('header');
                    $this->load->view('Email/email_manual');
                    $this->load->view('footer');
                }
            }else{ // Jika Ukuran file lebih dari 25 MB
                echo "<h1>Ukuran file attachment maksimal 25 MB</h1><br /><a href='index'>Kembali ke Form</a>";
            }
                }


    }
 
 }