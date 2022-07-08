<?= $this->include('template/header') ?>;
<?= $this->include('template/sidebar') ?>;
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tempat Wisata</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Berikut data wisata</h3>
        </div>
        
        <div class="card-body">
            <div class="card">
                <div class="card-body table-responsive">
                    <a href="" class="btn btn-primary mb-3">Tambah</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Latlong</th>
                                <th>jenis id</th>
                                <th>Skor Rating</th>
                                <th>Harga Tiket</th>
                                <th>Foto 1</th>
                                <th>Foto 2</th>
                                <th>Foto 3</th>
                                <th>Kecamatan id</th>
                                <th>Website</th>
                                <th>Fasilitas</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tempat_wisata as $row) :
                            ?>
                                <tr>
                                    <th><?= $no; ?></th>
                                    <td><?= $row->nama; ?></td>
                                    <td><?= $row->alamat; ?></td>
                                    <td><?= $row->latlong; ?></td>
                                    <td><?= $row->jenis_id; ?></td>
                                    <td><?= $row->skor_rating; ?></td>
                                    <td><?= $row->harga_tiket; ?></td>
                                    <td><?= $row->foto1; ?></td>
                                    <td><?= $row->foto2; ?></td>
                                    <td><?= $row->foto3; ?></td>
                                    <td><?= $row->kecamatan_id; ?></td>
                                    <td><?= $row->website; ?></td>
                                    <td><?= $row->fasilitas; ?></td>
                                    <td class="d-flex flex-row">
                                        <a title="Edit" href="<?= base_url("tempatwisata/edit/$row->id"); ?>" class="btn btn-info">Edit</a>
                                        <a title="Delete" href="<?= base_url("tempatwisata/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
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
        <!-- /.card-body -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->include('template/footer') ?>;