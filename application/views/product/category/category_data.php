<section class="content-header">
    <h1>
        Categories
        <small>Kategori Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Categories</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Categories</h3>
            <div class="pull-right">
                <a href="<?= base_url('category/add') ?>" class="btn btn-primary btn-xs btn-flat">
                    <i class="fa fa-archive"></i> Create
                </a>
            </div>
            <hr>
        </div>
        <div class="box-body table-resposive">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result_array() as $u) { ?>
                        <tr>
                            <td width="5%">
                                <?= $no++; ?>.
                            </td>
                            <td>
                                <?= $u['name']; ?>
                            </td>
                            <td class="text-center" width="160px">
                                <a href="<?= base_url('category/edit/') . $u['category_id']; ?>"
                                    class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Update</a>
                                <a href="<?= base_url('category/del/') . $u['category_id']; ?>"
                                    class="btn btn-danger btn-xs" onclick="return confirm('Yakin akan Menghapus data?')"><i
                                        class="fa fa-trash"></i>
                                    Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>