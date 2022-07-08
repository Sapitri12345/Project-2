<?= $this->include('template/header') ?>;
<?= $this->include('template/sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jenis Wisata</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Silahkan masukkan jenis wisata anda</h3>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('jeniswisata/update'); ?>">
                    <div class="form-group row">
                        <label for="nama_jenis_wisata" class="col-2 col-form-label">Jenis Wisata</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="nama_jenis_wisata" value="<?=$jeniswisata->nama;?>" name="nama" placeholder="Masukkan Nama Kecamatan Anda" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?=$jeniswisata->id;?>" name="id">
                    <div class="form-group row">
                        <div class="offset-2 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?= $this->include('template/footer') ?>