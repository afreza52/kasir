<section class="content-header">
    <h1>
        Customers
        <small>Pelanggan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Customers</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">
                <?= ucfirst($page) ?> Customers
            </h3>
            <div class="pull-right">
                <a href="<?= base_url('customer') ?>" class="btn btn-warning btn-xs btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
            <hr>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= base_url('customer/process') ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $row->customer_id ?>">
                            <label for="">customer Name *</label>
                            <input type="text" name="customer_name" value="<?= $row->name ?>" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" class="form-control" required>
                                <option>- Pilih -</option>
                                <option value="L" <?= $row->gender == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="P" <?= $row->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Phone *</label>
                            <input type="number" name="phone" value="<?= $row->phone ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Address *</label>
                            <textarea name="address" class="form-control" required><?= $row->address ?></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-xs"><i
                                    class="fa fa-paper-plane"></i>
                                Save</button>
                            <button type="reset" class="btn btn-default btn-xs">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>