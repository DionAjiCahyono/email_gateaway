 <!-- Static Main Start -->
 <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                                <div class="main-sparkline13-hd">
                                    <h1>Email <span class="table-project-n">Otomatis</span></h1>
                                </div>
                                
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                            <a href="<?= base_url('peminjamCRUD/index'); ?>" 
                                            class="btn btn-info btn-icon-split mb-3 mt-1">
                                            <span class="icon text-white-50"> </span>
                                            <span class="text">&nbsp;Tambah Data peminjam</span></a>
                                    </div>
                                    <form method="post" action="<?php echo base_url('peminjam_all/delete_otoma/') ?>" id="form-delete">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" data-checkbox = "true" id="check-all"></th>
                                                <th data-field="id">No</th>
                                                <th data-field="name" data-editable="true">Nama</th>
                                                <th data-field="company" data-editable="true">Alamat</th>
                                                <th data-field="price" data-editable="true">Email</th>
                                                <th data-field="book" data-editable="true">Nama Buku</th>
												<th data-field="date" data-editable="true">Tanggal Peminjaman</th>
                                                <th data-field="email" data-editable="true">Tanggal Pengembalian</th>
												<!-- <th data-field="task" data-editable="true">Status</th> -->
                                                <th data-field="action">Status</th>
                                                <th data-field="delete">Email</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php $no=1; foreach ($peminjam as $pnjm) : ?>
                                            <tr>
                                                 <?php  echo "<td><input type='checkbox' class='check-item' name='id_peminjam[]' value='".$pnjm->id_peminjam."'></td>"; ?>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pnjm->nama_peminjam ?></td>
                                                 <td><?php echo $pnjm->alamat ?></td>
                                                <td><?php echo $pnjm->email_peminjam ?></td>
                                                <td><?php echo $pnjm->nama_buku ?></td>
                                                <td><?php echo $pnjm->tgl_peminjaman ?></td>
                                                 <td><?php echo $pnjm->tgl_pengembalian ?></td>
                                                <td >
                                                <div class="btn btn-custon-three btn-warning"><i class="fa fa-exclamation-triangle adminpro-warning-danger" aria-hidden="true"></i>Telat Pengembalian</div>
                                                </td>
                                                <td > <?php echo anchor(
                                                'email_id/Send_id/' . $pnjm->id_peminjam,
                                                '<div  class="btn btn-custon-three btn-success"><i class="fa fa-check adminpro-checked-pro" aria-hidden="true"></i>Kirim</div>' ) ?>
                                                </td>
                                                
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                      <button type="button" id="btn-delete">DELETE CHECK LIST</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
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

<script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    
</script>
