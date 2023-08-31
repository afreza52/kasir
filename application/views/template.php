<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('asset'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset'); ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('asset'); ?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset'); ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet"
        href="<?= base_url('asset'); ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('asset'); ?>/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body
    class="hold-transition skin-blue sidebar-mini <?= $this->uri->segment(1) == 'sale' ? 'sidebar-collapse' : null ?>">
    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="<?= base_url('dashboard'); ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>P</b>OS</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>My</b>POS</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Notifications: style can be found in dropdown.less -->
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('asset/dist/img/user2-160x160.jpg'); ?>" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs">
                                    <?= ucfirst($this->fungsi->user_login()->username); ?>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url('asset/dist/img/user2-160x160.jpg'); ?>" class="img-circle"
                                        alt="User Image">

                                    <p>
                                        <?= ucwords($this->fungsi->user_login()->name); ?>
                                        <small>
                                            <?= ucwords($this->fungsi->user_login()->address); ?>
                                        </small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= base_url('auth/logout');
                                        ?>" class="btn btn-danger btn-flat">Sign
                                            out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url('asset/dist/img/user2-160x160.jpg'); ?>" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>
                            <?= ucfirst($this->fungsi->user_login()->username); ?>
                        </p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                        <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'supplier' ? 'class="active"' : '' ?>>
                        <a href="<?= base_url('supplier'); ?>"><i class="fa fa-truck"></i> <span>Suppliers</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'customer' ? 'class="active"' : '' ?>>
                        <a href="<?= base_url('customer'); ?>"><i class="fa fa-users"></i> <span>Customers</span></a>
                    </li>
                    <li
                        class="treeview <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-archive"></i>
                            <span>Products</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'category' ? 'class="active"' : '' ?>><a
                                    href="<?= base_url('category'); ?>"><i class="fa fa-circle-o"></i> Categories</a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'unit' ? 'class="active"' : '' ?>><a
                                    href="<?= base_url('unit'); ?>"><i class="fa fa-circle-o"></i> Units</a></li>
                            <li <?= $this->uri->segment(1) == 'item' ? 'class="active"' : '' ?>><a
                                    href="<?= base_url('item'); ?>"><i class="fa fa-circle-o"></i> Items</a></li>
                        </ul>
                    </li>
                    <li
                        class="treeview <?= $this->uri->segment(1) == 'stock' || $this->uri->segment(1) == 'sale' ? 'active' : '' ?>">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Transaction</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(1) == 'sale' ? 'class="active"' : '' ?>><a
                                    href="<?= base_url('sale'); ?>"><i class="fa fa-circle-o"></i> Sales</a></li>
                            <li <?= $this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'in' ? 'class="active"' : '' ?>><a href="<?= base_url('stock/in') ?>"><i class="fa fa-circle-o"></i> Stock In</a>
                            </li>
                            <li <?= $this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'out' ? 'class="active"' : '' ?>><a href="<?= base_url('stock/out') ?>"><i class="fa fa-circle-o"></i>
                                    Stock Out</a></li>
                        </ul>
                    </li>
                    <li class="treeview <?= $this->uri->segment(2) == 'stock' || $this->uri->segment(2) == 'sale' ? 'active' : '' ?>"">
                        <a href=" #">
                        <i class="fa fa-pie-chart"></i> <span>Reports</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?= $this->uri->segment(2) == 'sale' ? 'class="active"' : '' ?>><a
                                    href="<?= base_url('report/sale') ?>"><i class="fa fa-circle-o"></i> Sales</a>
                            </li>
                            <li <?= $this->uri->segment(2) == 'stock' ? 'class="active"' : '' ?>><a
                                    href="<?= base_url('report/stock') ?>"><i class="fa fa-circle-o"></i> Stock
                                    In/Out</a>
                            </li>
                        </ul>
                    </li>
                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <li class="header">SETTINGS</li>
                        <li><a href="<?= base_url('user'); ?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
                    <?php }
                    ; ?>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <script src="<?= base_url('asset'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?= $contents; ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy;2023 Afreza Dwi Z.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->

                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i
                                        class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->


    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('asset'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url('asset'); ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('asset'); ?>/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('asset'); ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('asset'); ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('asset'); ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('asset'); ?>/dist/js/demo.js"></script>
    <script>
        $(document).ready(function () {
            $('.sidebar-menu').tree()
        })
    </script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable()
        })
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '#select', function () {
                var item_id = $(this).data('id');
                var barcode = $(this).data('barcode');
                var name = $(this).data('name');
                var price = $(this).data('price');
                var stock = $(this).data('stock');
                $('#item_id').val(item_id);
                $('#barcode').val(barcode);
                $('#price').val(price);
                $('#name').val(name);
                $('#stock').val(stock);
                $('#modal-item').modal('hide');
            })
        })
    </script>
    <script>
        $(document).ready(function () {
            var no = 1;
            $('#add_cart').click(function () {
                var barcode = $('#barcode').val();
                var productItem = $('#name').val();
                var qty = parseInt($('#qty').val());
                var price = parseFloat($('#price').val());
                var discount = 0;
                var total = qty * price;


                if (barcode && qty && !isNaN(price)) {
                    var existingRow = $('#add  tr[data-barcode="' + barcode + '"]');

                    if (existingRow.length > 0) {
                        var existingQty = parseInt(existingRow.find('.qty').text());
                        var existingTotal = parseFloat(existingRow.find('.total').text());

                        existingQty += qty;
                        existingTotal += total;

                        existingRow.find('.qty').text(existingQty);
                        existingRow.find('.total').text(existingTotal);
                    } else {
                        $('#add .none').remove(); // Menghapus baris "Tidak ada item"
                        var newRow = '<tr  class="peritm"data-barcode="' + barcode + '">' +
                            '<td>' + no + '</td>' +
                            '<td class="barcode">' + barcode + '</td>' +
                            '<td class="item">' + productItem + '</td>' +
                            '<td class="price" align="right"> ' + price + '</td>' +
                            '<td class="qty" align="right">' + qty + '</td>' +
                            '<td class="discountitem" align="right">' + discount + '</td>' +
                            '<td class="total"align="right">' + total + '</td>' +
                            '<td align="right">' +
                            '<button class="btn btn-info btn-xs update" >' + '<i class="fa fa-pencil"> Update</i>' + '</button> ' +
                            '<button class="btn btn-danger btn-xs delete">' + '<i class="fa fa-trash">   Delete</i>' + '</button>' +
                            '</td>' +
                            '</tr>';

                        $('#add').append(newRow);
                        no++;
                    }
                    updateGrandTotal2();
                    subTotal();
                    calculateGrandTotal();
                    calculateChange();
                } else {
                    alert('Produk belum dipilih atau harga tidak valid.');
                }
            });
            // Tindakan Update
            // Pindahkan pengikatan event handler di luar event handler utama
            $(document).on('click', '.update', function () {
                var row = $(this).closest('tr');
                var barcode = row.data('barcode');
                var item = row.find('td:eq(2)').text();
                var qty = parseInt(row.find('.qty').text());
                var price = parseFloat(row.find('td:eq(3)').text());
                var discount = parseFloat(row.find('td:eq(5)').text());
                var total = parseFloat(row.find('td:eq(6)').text());

                $('#update_barcode').val(barcode);
                $('#update_name').val(item);
                $('#update_qty').val(qty);
                $('#update_price').val(price);
                $('#update_discount').val(discount);
                $('#update_total').val(total);

                $('#modal-update').modal('show');

                // Hapus event handler sebelum menambahkannya lagi
                $('#update_item').off('click').on('click', function () {
                    var newQty = parseInt($('#update_qty').val());
                    var newPrice = parseFloat($('#update_price').val());
                    var newDiscount = parseFloat($('#update_discount').val());

                    if (!isNaN(newQty) && !isNaN(newPrice) && !isNaN(newDiscount)) {
                        var newTotal = newQty * (newPrice - newDiscount);

                        row.find('.qty').text(newQty);
                        row.find('.price').text(newPrice);
                        row.find('.discountitem').text(newDiscount);
                        row.find('.total').text(newTotal);

                        $('#modal-update').modal('hide');

                        // Panggil fungsi-fungsi terkait hanya pada baris ini
                        updateGrandTotal2();
                        subTotal();
                        calculateGrandTotal();
                        calculateChange();
                    } else {
                        alert('Qty, harga, dan diskon harus berupa angka');
                    }
                });
            });


            // Tindakan Delete
            $(document).on('click', '.delete', function () {
                var row = $(this).closest('tr');
                row.remove();
                // Jika tidak ada item, tambahkan kembali baris "Tidak ada item"
                if ($('#add .none').length === 0) {
                    $('#add ').append('<tr class="none"><td colspan="8" class="text-center">Tidak ada item</td></tr>');
                }
                updateGrandTotal2();
                subTotal();
                calculateGrandTotal();
                calculateChange();
            });
            $('#cash').on('input', calculateChange);
            $('#discount').on('input', function () {
                subTotal(); // Memanggil fungsi untuk menghitung ulang total
                updateGrandTotal2(); // Memanggil fungsi untuk menghitung ulang grand total
                calculateChange();
            });

            function subTotal() {
                var subTotal = 0;

                $('.total').each(function () {
                    var total = parseFloat($(this).text().replace());
                    subTotal += total;
                });

                $('#sub_total').val(subTotal);

                var discount = parseFloat($('#discount').val());
                var grandTotal = subTotal - discount;

                $('#grand_total').val(grandTotal);
            }

            // Fungsi untuk memperbarui span #grand_total2 dengan grand total yang dihitung

            function updateGrandTotal2() {
                var grandTotal = calculateGrandTotal();
                $('#grand_total2').text(formatNumber(grandTotal));
            }

            // Fungsi untuk menghitung grand total dari item-item yang ada di keranjang
            function calculateGrandTotal() {
                var grandTotal = 0;
                $('.total').each(function () {
                    var total = parseFloat($(this).text().replace(',', ''));
                    grandTotal += total;
                });

                var discount = parseFloat($('#discount').val().replace(',', '')); // Dapatkan nilai diskon
                grandTotal -= discount; // Terapkan diskon

                return grandTotal;
            }

            function calculateChange() {
                var grandTotal = calculateGrandTotal();


                var cash = parseFloat($('#cash').val().replace(',', ''));
                var change = cash - grandTotal;

                $('#change').val(change);
            }
            $('#cancel_payment').click(function () {
                clearForm(); // Memanggil fungsi untuk mengosongkan form
            });
            $('#process_payment').click(function () {
                processPayment(); // Memanggil fungsi untuk mengosongkan form
            });

            function processPayment() {
                var discount = parseFloat($('#discount').val());
                var customer = parseFloat($('#customer').val());
                var grandTotal = parseFloat($('#grand_total').val());
                var cash = parseFloat($('#cash').val());
                var note = $('#note').val(); // Ambil data note dari input

                // var totalDiscount = discount ;
                var change = cash - grandTotal;

                if (change >= 0) {
                    $('#change').val(change);

                    // Mengumpulkan data untuk disimpan ke database
                    var saleItems = [];
                    var totalPrice = 0; // Menyimpan total harga semua item
                    $('#add .peritm').each(function () {
                        var barcode = $(this).find('.barcode').text();
                        var item = $(this).find('.item').text();
                        var price = parseFloat($(this).find('.price').text());
                        var qty = parseInt($(this).find('.qty').text());
                        var discountItem = parseFloat($(this).find('.discountitem').text()); // Mengambil nilai diskon per item
                        var total = parseFloat($(this).find('.total').text());

                        // var pricetotal = price * qty; // Harga total untuk item ini
                        totalPrice += total; // Menambahkan harga total item ini ke total harga
                        var diskonPerItem = discountItem * qty;
                        saleItems.push({
                            barcode: barcode,
                            item: item,
                            price: price,
                            qty: qty,
                            discount: diskonPerItem, // Menggunakan diskon per item
                            total: total
                        });
                    });

                    // Menghitung total diskon per item
                    var totalDiscountPerItem = 0;
                    $('.discountitem').each(function () {
                        var discountPerItem = parseFloat($(this).text());
                        totalDiscountPerItem += discountPerItem;
                    });

                    // Menghitung total diskon (diskon total = diskon umum + diskon per item)
                    // var totalDiscount = discount + totalDiscountPerItem;

                    // Menghitung grand total
                    // var grandTotal = totalPrice - totalDiscount;

                    // Data untuk dikirim ke server
                    var dataToSend = {
                        priceTotal: totalPrice,
                        grandTotal: grandTotal,
                        customer: customer,
                        totalDiscount: discount,
                        cash: cash,
                        change: change,
                        note: note,
                        saleItems: saleItems
                    };

                    // Mengirim data ke server menggunakan AJAX
                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url('sale/process_payment'); ?>',
                        data: dataToSend,
                        dataType: 'json', // Menentukan tipe data yang diharapkan dari server
                        success: function (response) {
                            if (response.success) {
                                alert('Pembayaran berhasil! Transaksi disimpan.');
                                // printReceipt(response.receiptData); // Memanggil fungsi pencetakan

                                clearForm();
                            } else {
                                if (response.message) {

                                    alert(response.message);
                                } else {
                                    alert('Gagal menyimpan transaksi ke database.');
                                }
                            }
                        },
                        error: function () {
                            alert('Terjadi kesalahan saat menyimpan transaksi.');
                        }
                    });

                } else {
                    alert('Uang tunai yang diberikan kurang dari total belanja.');
                }
            }
            // Fungsi untuk mengosongkan form
            function clearForm() {
                $('#barcode').val('');
                $('#name').val('');
                $('#price').val('');
                $('#stock').val('');
                $('#qty').val(1);
                $('#discount').val(0);
                $('#cash').val(0);
                $('#change').val('');
                $('#sub_total').val('');
                $('#grand_total').val('');
                $('#note').val('');
                $('#add').empty(); // Menghapus semua baris pada tabel item
                // Tambahkan baris "Tidak ada item" setelah menghapus semua baris
                $('#add').append('<tr class="none"><td colspan="8" class="text-center">Tidak ada item</td></tr>');
                $('#grand_total2').text('0');


            }
            // function printReceipt(receiptData) {
            //     // Di sini Anda perlu menambahkan kode untuk mencetak struk.
            //     // Pengaturan pencetakan akan sangat bergantung pada perangkat Anda.
            //     // Anda mungkin perlu menggunakan teknik seperti window.print(),
            //     // atau menggunakan layanan cetak pihak ketiga yang mendukung cetak dari browser.
            // }
            function formatNumber(number) {
                return number.toLocaleString('id-ID', {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 2
                });
            }

        });

    </script>
</body>

</html>