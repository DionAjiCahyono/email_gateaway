 <!-- Static Main Start -->
 <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data <span class="table-project-n">Admin</span> .</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

        <div class="card-body">
            <a href="<?= base_url('admin/tambah') ?>" class="btn btn-info btn-icon-split mb-3 mt-1">
                <span class="icon text-white-50">
                    <i class="fa fa-plus-circle"></i>
                </span>
                <span class="text">&nbsp;Tambah Data Admin</span>
            </a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center" style="font-weight: bold;">
                            <td>No</td>
                            <td>Kode Admin</td>
                            <td>Nama</td>
                            <td>Username</td>
                            <td>Password</td>
                            <td>Foto</td>
                            <td>Edit</td>
                            <td>Hapus</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($admin as $admin) : ?>
                            <tr class="text-center">
                                <td><?= $no++ ?></td>
                                <td><?= $admin['kode_admin'] ?></td>
                                <td><?= $admin['nama_admin'] ?></td>
                                <td><?= $admin['username'] ?></td>
                                <td><?= $admin['password'] ?></td>
                                <td>
                                    <img src="<?php echo base_url(); ?>assets/img/admin/<?= $admin['foto_admin']; ?>" width="100" height="100" style="object-fit: cover;">
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/edit/'); ?><?= $admin['id_admin'] ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/hapus/'); ?><?= $admin['id_admin'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-exclamation-triangle adminpro-warning-danger"></i></a>
                                </td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
</div>

<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus Data Admin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak dapat dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>

<!-- </body> -->

</html>