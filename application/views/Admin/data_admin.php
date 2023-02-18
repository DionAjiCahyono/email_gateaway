
 <!-- Static Main Start -->
 <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data<span class="table-project-n"></span> Admin</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                            <a href="<?= base_url('admin/tambah'); ?>" class="btn btn-info btn-icon-split mb-3 mt-1">
                                           <span class="icon text-white-50"> </span>
                                           <span class="text">&nbsp;Tambah Data Admin</span></a>
                                    </div>
                                    <!-- <form method="post" action="<?php echo base_url('peminjam_all/delete') ?>" id="form-delete"> -->
                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true" id="check-all"></th> -->
                                                
                                                <th data-field="id">No</th>
                                                <th data-field="company" data-editable="true">Kode Admin</th>
                                                <th data-field="name" data-editable="true">Nama</th>
                                                
                                                <th data-field="price" data-editable="true">Username</th>
                                                <th data-field="book" data-editable="true">Password</th>
												<!-- <th data-field="date" data-editable="true">Foto</th> -->
                                                
												<!-- <th data-field="task" data-editable="true">Status</th> -->
                                                <th data-field="action">Edit</th>
                                                <th data-field="delete">Hapus</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php $no=1; foreach ($admin as $adm) : ?>
                                            <tr>
                                               
                                                <td><?php echo $no++ ?></td>
                                                <td><?= $adm['kode_admin'] ?></td>
                                                <td><?= $adm['nama_admin'] ?></td>
                                                <td><?= $adm['username'] ?></td>
                                                <td><?= $adm['password'] ?></td>
                                                <!-- <td>
                                                  <img src="<?php echo base_url(); ?>assets/img/admin/<?= $adm['foto_admin']; ?>" width="100" height="100" style="object-fit: cover;">
                                                 </td> -->


                                                <td>
                                                 <a href="<?= base_url('admin/edit/'); ?><?= $adm['id_admin'] ?>" 
                                                 class="btn btn-primary"><i class="fa fa-info-circle adminpro-informatio"></i></a>
                                                </td>
                                                <td>
                                                 <a href="<?= base_url('admin/hapus/'); ?><?= $adm['id_admin'] ?>" 
                                                 class="btn btn-warning"><i class="fa fa-exclamation-triangle adminpro-warning-danger"></i></a>
                                                </td>
                                                
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                   <!-- <button type="button" id="btn-delete">DELETE CHECK LIST</button> -->
                                    <!-- </form> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function(){ // Ketika user men-cek checkbox all
      if($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
    });
    
    $("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
      var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi
      
      if(confirm) // Jika user mengklik tombol "Ok"
        $("#form-delete").submit(); // Submit form
    });
  });
  </script>
        <!-- Static Table End -->
