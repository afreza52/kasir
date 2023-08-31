<section class="content-header">
    <h1>
        Stock In
        <small>Barang Masuk / Penjualan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Transaction</li>
        <li class="active">Stock In</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">
                Add Stock In
            </h3>
            <div class="pull-right">
                <a href="<?= base_url('stock/in') ?>" class="btn btn-warning btn-xs btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
            <hr>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form method="post" action="<?= base_url('stock/process_in') ?>">

                        <div class="form-group">
                            <label>Date *</label>
                            <input type="date" name="date" value="<?= date('Y-m-d'); ?>" class="form-control" required>
                        </div>
                        <div>
                            <label for="barcode">Barcode *</label>
                        </div>
                        <div class="form-group input-group">
                            <input type="hidden" name="item_id" id="item_id">
                            <input type="text" name="barcode" id="barcode" class="form-control" required autofocus>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat" data-toggle="modal"
                                    data-target="#modal-item">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" name="item_name" id="item_name" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="unit_item">Item Unit</label>
                                    <input type="text" name="unit_item" id="unit_item" value="-" class="form-control"
                                        readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="stock">Initial Stock</label>
                                    <input type="text" name="stock" id="stock" value="-" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Detail *</label>
                            <input type="texy" name="detail" id="detail" placeholder="Kulakan / Tambahan / etc"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Supplier</label>
                            <select name="supplier" id="supplier" id="select" class="form-control">
                                <option value="">-Pilih-</option>
                                <?php foreach ($supplier as $s): ?>
                                    <option value="<?= $s->supplier_id ?>"><?= $s->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Qty *</label>
                            <input type="number" name="qty" id="qty" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="in_add" class="btn btn-success btn-xs"><i
                                    class="fa fa-paper-plane"></i>
                                Save</button>
                            <button type="reset" class="btn btn-default btn-xs">Reset</button>
                        </div>
                        </from>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Select Product Item</h4>
            </div>
            <div class="modal-body table-resposive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <?php foreach ($item as $i) { ?>
                            <tr>
                                <td>
                                    <?= $i->barcode ?>
                                </td>
                                <td width="100px">
                                    <?= $i->name ?>
                                </td>
                                <td>
                                    <?= $i->unit_name ?>
                                </td>
                                <td align=" right">
                                    <?= number_format($i->price, 0, ',', '.'); ?> IDR
                                </td>
                                <td align=" right">
                                    <?= $i->stock ?>
                                </td>
                                <td align="right">
                                    <button class="btn btn-xs btn-info" id="select" data-id="<?= $i->item_id ?>"
                                        data-barcode="<?= $i->barcode ?>" data-name="<?= $i->name ?>"
                                        data-unit="<?= $i->unit_name ?>" data-stock="<?= $i->stock ?>">
                                        <i class="fa fa-check"></i>Select
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(document).on('click', '#select', function () {
            var item_id = $(this).data('id');
            var barcode = $(this).data('barcode');
            var name = $(this).data('name');
            var unit_name = $(this).data('unit');
            var stock = $(this).data('stock');
            $('#item_id').val(item_id);
            $('#barcode').val(barcode);
            $('#item_name').val(name);
            $('#unit_item').val(unit_name);
            $('#stock').val(stock);
            $('#modal-item').modal('hide');
        })
    })
</script>