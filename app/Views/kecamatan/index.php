    <?= $this->include('template/header') ?>;
    <?= $this->include('template/sidebar') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kecamatan</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Berikut nama-nama Kecamatan yang ada di kota Depok</h3>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <a href="kecamatan/create" class="btn btn-primary mb-3">Tambah</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kecamatan as $row) :
                                    ?>
                                        <tr>
                                            <th><?= $no; ?></th>
                                            <td><?= $row->nama; ?></td>
                                            <td>
                                                <a title="Edit" href="<?= base_url("kecamatan/edit/$row->id"); ?>" class="btn btn-info">Edit</a>
                                                <a title="Delete" href="<?= base_url("kecamatan/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                                            </td>
                                        </tr>

                                    <?php
                                        $no++;
                                    endforeach;

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?= $this->include('template/footer') ?>