<?= $this->include('template/header') ?>;
<?= $this->include('template/sidebar') ?>;
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
            <div class="container mt-5">
    <div class="card">
        <div class="card-body table-responsive">
            <a href="" class="btn btn-primary mb-3">Tambah</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Last Login</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($users as $row) :
                    ?>
                        <tr>
                            <th><?= $no; ?></th>
                            <td><?= $row->username; ?></td>
                            <td><?= $row->password; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->created_at; ?></td>
                            <td><?= $row->last_login; ?></td>
                            <td><?= $row->status; ?></td>
                            <td><?= $row->role; ?></td>
                            <td class="d-flex flex-row">
                                <a title="Edit" href="<?= base_url("users/edit/$row->id"); ?>" class="btn btn-info">Edit</a>
                                <a title="Delete" href="<?= base_url("users/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
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

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->include('template/footer') ?>;


