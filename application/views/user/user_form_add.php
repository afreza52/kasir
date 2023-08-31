<section class="content-header">
    <h1>
        Users
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Users</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Data Users</h3>
            <div class="pull-right">
                <a href="<?= base_url('user') ?>" class="btn btn-warning btn-xs btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
            <hr>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Name *</label>
                            <input type="text" name="fullname" class="form-control"
                                value="<?= set_value('fullname'); ?>">
                            <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Username *</label>
                            <input type="text" name="username" class="form-control"
                                value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password *</label>
                            <input type="password" name="password" class="form-control">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password Confrmation *</label>
                            <input type="password" name="passconf" class="form-control">
                            <?= form_error('passconf', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Address </label>
                            <textarea name="address" id="" class="form-control"
                                value="<?= set_value(''); ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Level *</label>
                            <select name="level1" id="" required class="form-control">
                                <option>--Pilih--</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                            </select>
                            <?= form_error('level1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-paper-plane"></i>
                                Save</button>
                            <button type="reset" class="btn btn-default btn-xs">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>