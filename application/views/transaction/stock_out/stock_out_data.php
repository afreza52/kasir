<section class="content-header">
    <h1>
        Stock Out
        <small>Barang Keluar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Transaction</li>
        <li class="active">Stock Out</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Stock Out</h3>
            <div class="pull-right">
                <a href="<?= base_url('stock/out/add') ?>" class="btn btn-primary btn-xs btn-flat">
                    <i class="fa fa-plus"></i> Add Stock Out
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
                        <th>Product Item</th>
                        <th>Qty</th>
                        <th>Info</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($stock_out->result_array() as $s): ?>
                        <tr>
                            <th class="text-center" width="3%">
                                <?= $no++; ?>.
                            </th>
                            <td>
                                <?= $s['brcode']; ?>
                            </td>
                            <td>
                                <?= $s['item_name']; ?>
                            </td>
                            <td align="center" width="5%">
                                <?= $s['qty']; ?>
                            </td>
                            <td>
                                <?= $s['detail']; ?>
                            </td>
                            <td align="center" width="10%">
                                <?= indo_date($s['date']); ?>
                            </td>
                            <td align="center" width="11%">
                                <a href="<?= base_url('stock/out/del/') . $s['stock_id'] . '/' . $s['item_id']; ?>"
                                    onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs"><i
                                        class="fa fa-trash"> Delete</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>