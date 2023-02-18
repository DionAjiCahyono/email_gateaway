  <!-- Single pro tab start-->
  <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah Peminjam Buku</a></li>
                                </ul>

                                <?php foreach ($peminjam as $pmnjm) : ?>

                                <form action="<?php echo base_url('Data_peminjam/fungsiUpdate') ?>" method="post" enctype="multipart/form-data">
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <label for="date">Nama Peminjam</label>
                                                        <input type="text" name="nama_peminjam" class="form-control" 
                                                        value="<?php echo $pmnjm->nama_peminjam ?>">
                                                        <input type="hidden" name="id_peminjam" class="form-control" 
                                                        value="<?php echo $pmnjm->id_peminjam ?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <label for="date">Alamat</label>
                                                        <input type="text" name="alamat" class="form-control" 
                value="<?php echo $pmnjm->alamat ?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <label for="date">Email</label>
                                                        <input type="text" name="email_peminjam" class="form-control" 
                value="<?php echo $pmnjm->email_peminjam ?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                        
                                                        <label for="date">Nama Buku</label>
                                                        <input type="text" name="nama_buku" class="form-control" 
                value="<?php echo $pmnjm->nama_buku ?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                        <label for="date">Tanggal peminjaman Buku</label>
                                                        <input type="date" name="tgl_peminjaman" class="form-control" 
                value="<?php echo $pmnjm->tgl_peminjaman ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                   
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <label for="date">Tanggal Pengembalian Buku</label>
                                                        <input type="date" name="tgl_pengembalian" class="form-control" 
                value="<?php echo $pmnjm->tgl_pengembalian ?>">
                                                    </div>  
                                                    <div class="text- mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Update
														</button>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Cancel
														</button>
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
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>