<section class="content-header">
    <h1>
        Items
        <small>Data Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Items</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Product Items</h3>
            <div class="pull-right">
                <a href="<?= base_url('item/add') ?>" class="btn btn-primary btn-xs btn-flat">
                    <i class="fa fa-archive"></i> Create Product item
                </a>
            </div>
            <hr>
        </div>
        <div class="box-body table-resposive">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
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
                                <?= $u['barcode']; ?>
                            </td>
                            <td>
                                <?= $u['name']; ?>
                            </td>
                            <td>
                                <?= $u['category_name']; ?>
                            </td>
                            <td>
                                <?= $u['unit_name']; ?>
                            </td>
                            <td align=" right">
                                <?= number_format($u['price'], 0, ',', '.'); ?> IDR
                            </td>
                            <td align=" right">
                                <?= $u['stock']; ?>
                            </td>
                            <td width="80px">
                                <img src="<?= base_url('uploads/product/' . $u['image']) ?>" class="img-rounded"
                                    width="80px">
                            </td>
                            <td class="text-center" width="130px">
                                <a href="<?= base_url('item/edit/') . $u['item_id']; ?>" class="btn btn-warning btn-xs"><i
                                        class="fa fa-pencil"></i> Update</a>
                                <a href="<?= base_url('item/del/') . $u['item_id']; ?>" class="btn btn-danger btn-xs"
                                    onclick="return confirm('Yakin akan Menghapus data?')"><i class="fa fa-trash"></i>
                                    Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>