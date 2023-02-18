  <!-- Single pro tab start-->
  <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah Admin</a></li>
                                </ul>
                                <form action="<?php echo base_url('admin/tambah') ?>" method="post" enctype="multipart/form-data">
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <label for="kode_admin"><strong>Kode Admin</strong></label>
                                                        <input type="text" name="kode_admin" placeholder="Masukkan Kode Admin" class="form-control"
                                                            required value="<?= $kode_admin = $this->admin->buatkode() ?>" readonly>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <label for="nama_admin"><strong>Nama Admin</strong></label>
                                                        <input type="text" id="nama_admin" name="nama_admin" placeholder="Contoh : Tantri Setiani" class="form-control" required>
                                                        <?= form_error('nama_admin', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <label for="username"><strong>Username</strong></label>
                                                        <input type="text" id="username" name="username" placeholder="Contoh : tantri123" class="form-control" required>
                                                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                        
                                                        <label for="password"><strong>Password</strong></label>
                                                       <div class="input-group mb-2">
                                                          <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Contoh : Tantri12@" />
                                                              <div class="input-group-append">
                                                                 <span class="input-group-text" onclick="password_show_hide();">
                                                                <i class="fas fa-eye" id="show_eye"></i>
                                                                 <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                                                    </span>
                                                             </div>
                                                              </div>
                                                     <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                        <label for="file"><strong>Plih Gambar (Maksimal ukuran gambar 2Mb)</strong></label>
                                                                  <div class="custom-file">
                                                              <input type="file" name="foto_admin" class="custom-file-input" id="file">
                                                              <label class="custom-file-label" for="customFile">Choose file</label>
                                                                 </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
														</button>
                                                        <a href="<?= base_url() . 'admin' ?>" class="btn btn-secondary"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt"> -->
                                                   
                                                        <!-- <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span> -->
                                                        <!-- <label for="date">Tanggal Pengembalian Buku</label> -->
                                                        <!-- <input type="hidden" value= "<?php $tgl_awal = date ("2022-9-10");
                                                                                           $tgl2 =date ("Y-m-d",strtotime("+7 days",strtotime($tgl_awal)));
                                                                                           echo "$tgl2"; ?>" name="tgl_pengembalian" class="form-control">
                                                    </div>   -->
                                                    <!-- <div class="text- mg-b-pro-edt custom-pro-edt-ds"> -->
                                                    
                                                    <!-- <button type="button" class="btn btn-warning waves-effect waves-light">Cancel
														</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                </form>
                            </div>
                        </div>
                    </div>
<script src="<?= base_url('assets/ckeditor/jquery/jquery-3.1.1.min.js'); ?>"></script>

<!-- memanggil ckeditor.js -->
<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<!-- memanggil adapter jquery ckeditor -->
<script src="<?= base_url('assets/ckeditor/adapters/jquery.js'); ?>"></script>

<!-- menampilkan nama file setelah dipilih -->
<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<!-- show hide password -->
<script>
    function password_show_hide() {
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
    JavaScript
</script>
                </div>
            </div>
        </div>