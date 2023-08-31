<section class="content-header">
    <h1>
        Stock Report
        <small>Laporan Barang Masuk dan Keluar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Report</li>
        <li class="active">Stock In & out</li>
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
            <form class="form-horizontal" method="post" action="<?= base_url('report/stock'); ?>">
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
                    <!-- Tambahkan elemen input nomor Info -->
                    <label class="col-sm-1 control-label">Type</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="type" placeholder="In/Out">
                    </div>
                    <label class="col-sm-1 control-label">Barcode</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="barcode">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i>
                        Filter</button>
                </div>
            </form>

        </div>
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Stock In & Out</h3>
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

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($stock as $s): ?>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>