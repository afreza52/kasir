<section class="content-header">
    <h1>
        Suppliers
        <small>Pemasok Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Suppliers</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Suppliers</h3>
            <div class="pull-right">
                <a href="<?= base_url('supplier/add') ?>" class="btn btn-primary btn-xs btn-flat">
                    <i class="fa fa-truck"></i> Create
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
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Description</th>
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
                            <td>
                                <?= $u['phone']; ?>
                            </td>
                            <td>
                                <?= $u['address']; ?>
                            </td>
                            <td>
                                <?= $u['description']; ?>
                            </td>
                            <td class="text-center" width="160px">
                                <a href="<?= base_url('supplier/edit/') . $u['supplier_id']; ?>"
                                    class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Update</a>
                                <!-- <a href="<?= base_url('supplier/del/') . $u['supplier_id']; ?>"
                                    class="btn btn-danger btn-xs" onclick="return confirm('Yakin akan Menghapus data?')"><i
                                        class="fa fa-trash"></i>
                                    Delete</a> -->
                                <a href="#modalDelete" data-toggle="modal" class="btn btn-danger btn-xs"
                                    onclick="$('#modalDelete #formDelete').attr('action','<?= base_url('supplier/del' . $u['supplier_id']) ?>')"><i
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

<div class="modal fade" id="modalDelete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Yakin Ingin Menghapus data ini?</h4>
            </div>
            <div class="modal-footer">
                <form action="" method="post" id="formDelete">
                    <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button class="btn btn-danger" vtype="submit" data-dismiss="modal">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>