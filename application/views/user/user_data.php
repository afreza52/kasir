<section class="content-header">
    <h1>
        Users
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Users</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Users</h3>
            <div class="pull-right">
                <a href="<?= base_url('user/add') ?>" class="btn btn-primary btn-xs btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
            <hr>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($user as $u) { ?>
                        <tr>
                            <td width="5%">
                                <?= $no++; ?>.
                            </td>
                            <td>
                                <?= $u['username']; ?>
                            </td>
                            <td>
                                <?= $u['name']; ?>
                            </td>
                            <td>
                                <?= $u['address']; ?>
                            </td>
                            <td>
                                <?= $u['level'] == 1 ? "Admin" : "Kasir"; ?>
                            </td>
                            <td class="text-center" width="160px">
                                <a href="<?= base_url('user/edit/') . $u['user_id']; ?>" class="btn btn-warning btn-xs"><i
                                        class="fa fa-pencil"></i> Update</a>
                                <?php if ($u['level'] == 2): ?>
                                    <a href="<?= base_url('user/hapus/') . $u['user_id']; ?>" class="btn btn-danger btn-xs"
                                        onclick="return confirm('Yakin akan Menghapus data?')"><i class="fa fa-trash"></i>
                                        Delete</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>