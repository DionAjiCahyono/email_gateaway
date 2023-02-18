  <!-- Single pro tab start-->
  <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Data Admin</a></li>
                                </ul>

        <div class="card-body">
            <form action="<?= base_url('admin/edit/'); ?><?= $admin['id_admin']; ?>" id="form-tambah" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_admin" id="id_admin" value="<?= $admin['id_admin']; ?>" />
                <div class="form-group">
                    <label for="kode_admin"><strong>Kode Admin</strong></label>
                    <input type="text" name="kode_admin" placeholder="Masukkan Kode Admin" autocomplete="off" class="form-control" required value="<?= $admin['kode_admin'] ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="nama_admin"><strong>Nama Admin</strong></label>
                    <input type="text" name="nama_admin" id="nama_admin" placeholder="Contoh : Tantri Setiani" autocomplete="off" class="form-control" required value="<?= $admin['nama_admin'] ?>">
                    <?= form_error('nama_admin', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="username"><strong>Username</strong></label>
                    <input type="text" name="username" id="username" placeholder="Contoh : tantri123" autocomplete="off" class="form-control" required value="<?= $admin['username'] ?>">
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="password"><strong>Password</strong></label>
                    <div class="input-group mb-2">
                        <input name="password" type="password" value="<?= $admin['password'] ?>" class="input form-control" id="password" placeholder="Contoh : Tantri12@" />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="password_show_hide();">
                                <i class="fas fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                            </span>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-row mt-2">
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/img/admin/'); ?><?= $admin['foto_admin']; ?>" class="img-thumbnail" width="200px"><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="file"><strong>Plih Gambar (Maksimal ukuran gambar 2Mb)</strong></label>
                        <div class="custom-file">
                            <input type="file" name="foto_admin" class="custom-file-input" id="file">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                <a href="<?php echo base_url() . 'admin' ?>" class="btn btn-secondary"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
            </form>
        </div>
    </div>

</div>

</html>

<!-- memanggil jquery -->
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

<!-- jika ukuran file terlalu besar/file tidak sesuai -->
<script type="text/javascript">
    var uploadField = document.getElementById("file");
    uploadField.onchange = function() {
        if (this.files[0].size > 2000000) { // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
            alert("Maaf. Ukuran Foto Terlalu Besar ! Maksimal 2 Mb");
            this.value = "";
        };
    };
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