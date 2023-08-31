<section class="content-header">
    <h1>
        Stock In
        <small>Barang Masuk / Pembelian</small>
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
            <h3 class="box-title">Data Stock In</h3>
            <div class="pull-right">
                <a href="<?= base_url('stock/in/add') ?>" class="btn btn-primary btn-xs btn-flat">
                    <i class="fa fa-plus"></i> Add Stock In
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
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($stock_in->result_array() as $s): ?>
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
                            <td align="center" width="10%">
                                <?= indo_date($s['date']); ?>
                            </td>
                            <td align="center" width="11%">
                                <a id="dlt" class="btn btn-default btn-xs" data-toggle="modal"
                                    data-target="#modal-detail" data-barcode="<?= $s['brcode']; ?>"
                                    data-itemname="<?= $s['item_name']; ?>" data-detail="<?= $s['detail']; ?>"
                                    data-suppliername="<?= $s['supplier_name']; ?>" data-qty="<?= $s['qty']; ?>"
                                    data-date="<?= indo_date($s['date']); ?>">
                                    <i class="fa fa-eye"> Detail </i>

                                </a>
                                <a href="<?= base_url('stock/in/del/') . $s['stock_id'] . '/' . $s['item_id']; ?>"
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
<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Stock In Detail</h4>
            </div>
            <div class="modal-body table-resposive">
                <table class=" table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th width="43%">Barcode</th>
                            <td><span id="barcode"></span></td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td><span id="item_name"></span></td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td><span id="detail"></span></td>
                        </tr>
                        <tr>
                            <th>Supplier Name</th>
                            <td><span id="supplier_name"></span></td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td><span id="qty"></span></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td><span id="date"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(document).on('click', '#dlt', function () {
            var barcode = $(this).data('barcode');
            var itemname = $(this).data('itemname');
            var detail = $(this).data('detail');
            var suppliername = $(this).data('suppliername');
            var qty = $(this).data('qty');
            var date = $(this).data('date');
            $('#barcode').text(barcode);
            $('#item_name').text(itemname);
            $('#detail').text(detail);
            $('#supplier_name').text(suppliername);
            $('#qty').text(qty);
            $('#date').text(date);
            $('#detail').text(detail);
        })
    })
</script>