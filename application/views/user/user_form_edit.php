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
            <h3 class="box-title">Data Users</h3>
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
                            <input type="hidden" name="user_id" value="<?= $u['user_id']; ?>">
                            <input type="text" name="fullname" value="<?= $u['name']; ?>" class="form-control">
                            <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Username *</label>
                            <input type="text" name="username" value="<?= $u['username']; ?>" class="form-control">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password </label>
                            <br> <small class="text-info">(biarkan kosong
                                jika tidak
                                diganti)</small>
                            <input type="password" name="password" class="form-control"
                                value="<?= $this->input->post('password'); ?>">
                            <?= form_error('password', '<small class="text-danger mp-0">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password Confrmation</label>
                            <input type="password" name="passconf" class="form-control"
                                value="<?= $this->input->post('passconf'); ?>">
                            <?= form_error('passconf', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Address </label>
                            <textarea name="address" id="" class="form-control"><?= $u['address']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <select name="level1" id="" class="form-control">
                                <?php
                                $selectedAdmin = ($u['level'] == 1) ? "selected" : "";
                                $selectedKasir = ($u['level'] == 2) ? "selected" : "";
                                ?>
                                <option value="1" <?= $selectedAdmin; ?>>Admin</option>
                                <option value="2" <?= $selectedKasir; ?>>Kasir</option>
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