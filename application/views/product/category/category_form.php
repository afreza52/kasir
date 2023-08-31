<section class="content-header">
    <h1>
        Categories
        <small>Kategori Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">categories</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">
                <?= ucfirst($page) ?> Categoriess
            </h3>
            <div class="pull-right">
                <a href="<?= base_url('category') ?>" class="btn btn-warning btn-xs btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
            <hr>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= base_url('category/process') ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $row->category_id ?>">
                            <label for="">category Name *</label>
                            <input type="text" name="category_name" value="<?= $row->name ?>" class="form-control"
                                required>
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