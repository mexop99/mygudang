<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">MyGudang</a></li>
                    <li class="breadcrumb-item active">users</li>
                </ol>
            </div>
        </div>
        <div class="pull-right">
            <a href="<?= base_url('users/add') ?>" class="btn btn-primary">
                + Add User
            </a>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- ======================================================================================== -->
<!-- Main content -->
<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Users Terdaftar</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Is Active?</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($users as $row) : ?>
                        <tr>
                            <td> <?= $no++; ?> </td>
                            <td> <?= $row['id'] ?> </td>
                            <td> <?= $row['name'] ?> </td>
                            <td> <?= $row['username'] ?> </td>
                            <td> <?= $row['role_id'] == 1 ? "Admin" : "Karyawan" ?></td>
                            <td> <?= $row['is_active'] == 0 ? "Non Aktif" : "Aktif" ?> </td>
                            <td>
                                <a href="<?= base_url('user/edit') ?>" title="edit user">
                                    <i class="fas fa-user-edit text-dark"></i>
                                </a>
                                <a href="<?= base_url('user/view') ?>" title="view user" class="ml-lg-2">
                                    <i class="fas fa-eye text-primary"></i>
                                </a>

                                <a href="<?= base_url('user/delete') ?>" title="delete user" class="ml-lg-2">
                                    <i class="fas fa-trash-alt text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


</section>
<!-- /.content -->