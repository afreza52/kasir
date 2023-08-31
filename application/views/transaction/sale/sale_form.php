<section class="content-header">
    <h1>Sales
        <small>Penjualan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li>Transaction</li>
        <li class="active">Sales</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-4">
            <div class="box box-widget" style="height: 170px;">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="date">Date</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" name="" id="date" class="form-control"
                                        value="<?= date('Y-m-d') ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="user">Kasir</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="" id="user" class="form-control"
                                        value="<?= $this->fungsi->user_login()->name ?>" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="customer">Customer</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="customer" id="customer" class="form-control">
                                        <?php foreach ($customer as $c): ?>
                                            <option value="<?= $c->customer_id ?>"><?= $c->name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box box-widget" style="height: 170px;">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top; width=30%;">
                                <label for="barcode">Barcode</label>
                            </td>
                            <td>
                                <div class="form-group input-group">
                                    <input type="hidden" id="item_id">
                                    <input type="hidden" id="name">
                                    <input type="hidden" id="price">
                                    <input type="hidden" id="stock">
                                    <input type="text" id="barcode" class="form-control" readonly>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal"
                                            data-target="#modal-item"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="qry">Qty</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" value="1" min="1" id="qty" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div>
                                    <button type="button" id="add_cart" class="btn btn-primary"><i
                                            class="fa fa-cart-plus"> Add</i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box box-widget" style="height: 170px;">
                <h4 align="right">Invoice <br><b><span id="invoice">
                            <?= $invoice ?>
                        </span></b></h4>
                <h1 align="right" style="font-size: 45pt;"><b>Rp <span id="grand_total2">0
                        </span></b>
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-widget">
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="3%">#</th>
                                <th width="10%">Barcode</th>
                                <th width="25%">Product Item</th>
                                <th width="10%">Price</th>
                                <th width="10%">Qty</th>
                                <th width="10%">Discount Item</th>
                                <th width="15%">Total</th>
                                <th width="11%">Action</th>
                            </tr>
                        </thead>
                        <tbody id="add">
                            <tr class="none">
                                <td colspan="9" class="text-center  ">Tidak ada item</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr id="subtotal">
                            <td style="vertical-align:top; width:30%">
                                <label for="sub_total">Sub Total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" value="" id="sub_total" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top; width:30%">
                                <label for="discount">Discount</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" min="0" value="0" id="discount" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="grand_total">Grand total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" id="grand_total" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top; width:30%;">
                                <label for="cash">Cash</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" value="0" min="0" id="cash" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="change">Change</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" name="" readonly id="change" class="form-control">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="note">Note : </label>
                            </td>
                            <td>
                                <div>
                                    <textarea name="" id="note" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div>
                <button id="cancel_payment" class="btn btn-flat btn-warning"><i class="fa fa-refresh"></i>
                    Cancel</button>
                <br><br>
                <button id="process_payment" class="btn btn-flat btn-lg btn-success"><i class="fa fa-paper-plane-o"></i>
                    Process Payment</button>
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
                <h4 class="modal-title">Add Product Item</h4>
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
                                        data-price="<?= $i->price ?>" data-stock="<?= $i->stock ?>">
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
<div class="modal fade" id="modal-update">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Update Product Item</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Product Item</label>
                    <input type="text" id="update_barcode" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <input type="text" id="update_name" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="update_price">Price</label>
                    <input type="number" id="update_price" class="form-control" min="0">
                </div>
                <div class="form-group">
                    <label for="update_qty">Qty</label>
                    <input type="number" id="update_qty" class="form-control" min="1">
                </div>
                <div class="form-group">
                    <label for="update_discount">Discount Item</label>
                    <input type="number" id="update_discount" class="form-control" min="0">
                </div>
                <div class="form-group">
                    <label>Total</label>
                    <input type="text" id="update_total" class="form-control" readonly onchange="grandtotal2()">
                </div>
            </div>
            <div class="modal-footer">
                <button id="update_item" class="btn btn-flat btn-sm btn-success"><i class="fa fa-paper-plane-o"></i>
                    kirim</button>
            </div>
        </div>
    </div>
</div>