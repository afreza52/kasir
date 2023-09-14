<section class="content-header">
    <h1>
        Sales Report
        <small>Laporan Penjualan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">report</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Filter Data</h3>
            <hr>
            <!-- </div>
        <div class="box-body"> -->
            <form class="form-horizontal" method="post" action="<?= base_url('report/sale'); ?>">
                <div class="form-group">
                    <!-- Tambahkan elemen input tanggal awal -->
                    <label class="col-sm-1 control-label">Date</label>
                    <div class="col-xs-2">
                        <input type="date" class="form-control" name="start_date">
                    </div>
                    <!-- Tambahkan elemen input tanggal akhir -->
                    <label class="col-sm-1 control-label">s/d</label>
                    <div class="col-xs-2">
                        <input type="date" class="form-control" name="end_date">
                    </div>
                    <!-- Tambahkan elemen input pelanggan -->
                    <label class="col-sm-1 control-label">Customer</label>
                    <div class="col-xs-2">
                        <select name="customer" class="form-control">
                            <option value="">- all -</option>
                            <?php foreach ($customer as $customer): ?>
                                <option value="<?= $customer['customer_id'] ?>"><?= $customer['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Tambahkan elemen input nomor invoice -->
                    <label class="col-sm-1 control-label">Invoice</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="invoice">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="close" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i>
                        Filter</button>
                </div>
            </form>

        </div>
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Penjualan</h3>
            <hr>
        </div>
        <div class="box-body table-resposive">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Discount</th>
                        <th>Grand Total</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($penjualan as $p): ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <?= $p['invoice'] ?>
                            </td>
                            <td>
                                <?= $p['date'] ?>
                            </td>
                            <td>
                                <?= $p['customer'] ?>
                            </td>
                            <td>
                                <?= $p['total_price'] ?>
                            </td>
                            <td>
                                <?= $p['discount'] ?>
                            </td>
                            <td>
                                <?= $p['final_price'] ?>
                            </td>
                            <td width="200px">
                                <a href="" id="dtl" data-toggle="modal" data-target="#modal-detail"
                                    data-saleId="<?= $p['sale_id'] ?>" data-invoice="<?= $p['invoice'] ?>"
                                    data-date="<?= $p['date'] ?>" data-total="<?= $p['total_price'] ?>"
                                    data-diskon="<?= $p['discount'] ?>" data-grandtotal="<?= $p['final_price'] ?>"
                                    data-customer="<?= $p['customer'] ?>" data-kasir="<?= $p['kasir'] ?>"
                                    data-cash="<?= $p['cash'] ?>" data-change="<?= $p['remaining'] ?>"
                                    data-note="<?= $p['note'] ?>" class="btn btn-default btn-xs"><i class="fa fa-eye"></i>
                                    Detail</a>
                                <a href="<?= base_url('sale/receipt/') . $p['sale_id'] ?>" class="btn btn-primary btn-xs"><i
                                        class="fa fa-print"></i> Print</a>
                                <a href="<?= base_url('report/del/') . $p['sale_id']; ?>"
                                    onclick="return confirm('yakin ingin menghapus data?')" class="btn btn-danger btn-xs"><i
                                        class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<div class="modal fade" id="modal-detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Sales Report Detail</h4>
            </div>
            <div class="modal-body table">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th width="100px">Invoice</th>
                            <td><span id="inv"></span>
                            </td>
                            <th width="100px">Customer</th>
                            <td><span id="customer"></span>
                            </td>
                        </tr>

                        <tr>
                            <th>Date Time</th>
                            <td><span id="date"></span>
                            </td>
                            <th>Cashier</th>
                            <td><span id="kasir"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td><span id="total"></span>
                            </td>
                            <th>Cash</th>
                            <td><span id="cash"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Discount</th>
                            <td><span id="diskon"></span>
                            </td>
                            <th>Change</th>
                            <td><span id="change"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <td><span id="gt"></span>
                            </td>
                            <th>Note</th>
                            <td><span id="note"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Produck</th>
                            <td colspan="3">
                                <div>
                                    <table class="table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Disc</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody id="product-details">

                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('click', '#dtl', function () {
            var saleId = $(this).data('saleid');
            var invoice = $(this).data('invoice');
            var date = $(this).data('date');
            var total = $(this).data('total');
            var diskon = $(this).data('diskon');
            var grnadtotal = $(this).data('grandtotal');
            var customer = $(this).data('customer');
            var kasir = $(this).data('kasir');
            var cash = $(this).data('cash');
            var change = $(this).data('change');
            var note = $(this).data('note');


            $('#inv').text(invoice);
            $('#date').text(date);
            $('#total').text(total);
            $('#diskon').text(diskon);
            $('#gt').text(grnadtotal);
            $('#customer').text(customer);
            $('#kasir').text(kasir);
            $('#cash').text(cash);
            $('#change').text(change);
            $('#note').text(note);

            $.ajax({
                url: '<?= base_url('report/get_sale_item_details'); ?>', // Ganti dengan URL yang sesuai
                type: 'POST',
                data: { saleId: saleId },
                success: function (response) {
                    // Populate detail produk ke dalam tabel
                    $('#product-details').html(response);
                    // Mengubah respons JSON menjadi objek JavaScript
                    var products = JSON.parse(response);

                    // Menghapus semua baris data sebelumnya dari tabel
                    $("#product-details tbody").empty();

                    // Memasukkan data produk ke dalam tabel
                    for (var i = 0; i < products.length; i++) {
                        var product = products[i];
                        var row = "<tr>" +
                            "<td>" + product.item + "</td>" +
                            "<td>" + product.price + "</td>" +
                            "<td>" + product.qty + "</td>" +
                            "<td>" + product.discount + "</td>" +
                            "<td>" + product.total + "</td>" +
                            "</tr>";
                        $("#product-details tbody").append(row);
                    }
                },
                error: function () {
                    alert('Terjadi kesalahan saat memuat detail produk.');
                }
            });
        })
    })
</script>