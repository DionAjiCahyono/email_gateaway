<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Email_id extends CI_Controller

{

    function __construct(){
            parent::__construct();
            // Include librari phpmailer
            require APPPATH.'libraries/phpmailer/Exception.php';
            require APPPATH.'libraries/phpmailer/PHPMailer.php';
            require APPPATH.'libraries/phpmailer/SMTP.php';
            $this->load->library('session');
            $this->load->library('MyPHPMailer');
            $this->load->model('MpeminjamCRUD');
    }


    public function index()
    {
    	$data['title'] = 'Email Gateway';
        $data['peminjam']= $this->MpeminjamCRUD->tampilByterlambat();
        $this->load->view('header');
        $this->load->view('Email/email_otomatis', $data);
        $this->load->view('footer');
   
    }


    public function Send_id($id_peminjam){
        $data = $this->MpeminjamCRUD->getDataById($id_peminjam);
        $data['peminjam']= $this->MpeminjamCRUD->tampilByterlambat();

        $email_pengirim = 'mbkmemail86@gmail.com'; // Isikan dengan email pengirim
        $nama_pengirim = 'MBKM'; // Isikan dengan nama pengirim
        $email_peminjam = $data['email_peminjam']; // Ambil email penerima dari inputan form
        $subjek = "<h1>Pengingat Pengembalian Buku</h1> ";// Ambil subjek dari inputan form
        $pesan =  "<h1>Pengingat Pengembalian Buku</h1>
        <h2>Di Alamatkan kepada :</h2>
       <h4> Peminjam Buku Di perpustakaan kab.madiun</h4>
        <br>
        • Mohon segera untuk mengembalikan Buku yang anda pinjam.karena batas pemijaman buku sudah terlampaui.
        <br>
        • Jika telah mengembalikan buku, Harap melakukan konfirmasi ke pelayanan
       </p>";// Ambil pesan dari inputan form
        // Ambil nama file yang di upload
        
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
        
        if(empty($attachment)){ // Jika tanpa attachment
            $send = $mail->send();
        
            if($send){ // Jika Email berhasil dikirim
                $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Terima kasih. Pesan telah berhasil di kirimkan ke '.$email_peminjam.'</p>
                </div>');    
                $this->load->view('header');
                $this->load->view('Email/email_otomatis', $data);
                $this->load->view('footer');

               
            }else{ // Jika Email gagal dikirim
                $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Maaf Pesan gagal di kirimi ke '.$email_peminjam.'</p>
                </div>');    
                $this->load->view('header');
                $this->load->view('Email/email_otomatis', $data);
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
                        <p>Terima kasih. Pesan telah berhasil di kirimkan ke '.$email_peminjam.'</p>
                    </div>');    
                    $this->load->view('header');
                    $this->load->view('Email/email_otomatis', $data);
                    $this->load->view('footer');

                }else{ // Jika Email gagal dikirim
                    $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Maaf Pesan gagal di kirim ke '.$email_peminjam.'</p>
                </div>');    
                $this->load->view('header');
                $this->load->view('Email/email_otomatis', $data);
                $this->load->view('footer');
                }
            }else{ // Jika Ukuran file lebih dari 25 MB
                echo "<h1>Ukuran file attachment maksimal 25 MB</h1><br /><a href='index'>Kembali ke Form</a>";
            }
                }



    }


    public function Send_all(){
        $id_peminjam = $_POST['id_peminjam'];
        // $data = $this->MpeminjamCRUD->getAllid($id_peminjam);
        $data = $this->MpeminjamCRUD->getDataById($id_peminjam);

        $email_pengirim = 'mbkmemail86@gmail.com'; // Isikan dengan email pengirim
        $nama_pengirim = 'MBKM'; // Isikan dengan nama pengirim
        $email_peminjam = $data['email_peminjam']; // Ambil email penerima dari inputan form
        $subjek = "<h1>Pengingat Pengembalian Buku</h1> ";// Ambil subjek dari inputan form
        $pesan =  "<h1>Pengingat Pengembalian Buku</h1>
        <h2>Di Alamatkan kepada :</h2>
       <h4> Peminjam Buku Di perpustakaan kab.madiun</h4>
        <br>
        • Mohon segera untuk mengembalikan Buku yang anda pinjam.karena batas pemijaman buku sudah terlampaui.
        <br>
        • Jika telah mengembalikan buku, Harap melakukan konfirmasi ke pelayanan
       </p>";// Ambil pesan dari inputan form
        // Ambil nama file yang di upload
        
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
        
        if(empty($attachment)){ // Jika tanpa attachment
            $send = $mail->send();
        
            if($send){ // Jika Email berhasil dikirim
                echo "<h1>Email berhasil dikirim</h1><br /><a href='index'>Kembali ke Form</a>";
                // $this->MpeminjamCRUD->fungsiDelete($id_peminjam);
            }else{ // Jika Email gagal dikirim
                echo "<h1>Email gagal dikirim</h1><br /><a href='index'>Kembali ke Form</a>";
                // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
            }
        }else{ // Jika dengan attachment
            $tmp = $_FILES['attachment']['tmp_name'];
            $size = $_FILES['attachment']['size'];
        
            if($size <= 25000000){ // Jika ukuran file <= 25 MB (25.000.000 bytes)
                $mail->addAttachment($tmp, $attachment); // Add file yang akan di kirim
        
                $send = $mail->send();
        
                if($send){ // Jika Email berhasil dikirim
                    echo "<h1>Email berhasil dikirim</h1><br /><a href='index'>Kembali ke Form</a>";
                    // $this->MpeminjamCRUD->fungsiDelete($id_peminjam);

                }else{ // Jika Email gagal dikirim
                    echo "<h1>Email gagal dikirim</h1><br /><a href='index'>Kembali ke Form</a>";
                    // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
                }
            }else{ // Jika Ukuran file lebih dari 25 MB
                echo "<h1>Ukuran file attachment maksimal 25 MB</h1><br /><a href='index'>Kembali ke Form</a>";
            }
                }



    }
 
 }