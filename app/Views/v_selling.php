<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entwo Kasir</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href=" <?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url('AdminLTE') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/summernote/summernote-bs4.min.css">

    <!-- REQUIRED SCRIPTS -->
    <!-- ChartJS -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- jQuery -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    // $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Sparkline -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>

    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
    <!-- AutoNumeric -->
    <script src="<?= base_url("autoNumeric")?>/src/AutoNumeric.js"></script>
    <!-- terbilang -->
    <script src="<?= base_url("terbilang")?>/terbilang.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script>
    $(document).ready(function() {
        $('#dataTables').DataTable();
    });
    </script>
</head>

<body class="hold-transition layout-top-nav" onload="startTime()">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <span class="brand-text font-weight-light"><i class="fas fa-shopping-cart text-primary fa-2x"></i>
                        Entwo Kasir</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="collapse navbar-collapse order-3" id="navbarCollapse"> -->
                <!-- Left navbar links -->

                <!-- <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Some action </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li> -->

                <!-- Level two dropdown-->

                <!-- <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li> -->

                <!-- Level three dropdown-->

                <!-- <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li> -->

                <!-- End Level three -->

                <!-- <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li> -->
                <!-- End Level two -->
                <!-- </ul>
          </li>
        </ul> -->

                <!-- SEARCH FORM -->

                <!-- <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div> -->

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->

                    <li class="nav-item">
                        <?php

                    use App\Controllers\Selling;

 if (session()->get('level') == '1') { ?>
                        <a class="nav-link" href="<?= base_url('Admin') ?>">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                        <?php } else { ?>
                        <a class="nav-link" href="<?= base_url('Home/LogOut') ?>">
                            <i class="fas fa-sign-in-alt"></i> Logout
                        </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <!-- <div class="container"> -->
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-7">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">No Code</label>
                                            <label for=""
                                                class="form-control form-control-lg text-danger"><?= $no_code ?></label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Date</label>
                                            <label for=""
                                                class="form-control form-control-lg"><?= date('D M Y') ?></label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Time</label>
                                            <label for="" class="form-control form-control-lg" id="time"></label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="">Kasir</label>
                                            <label for=""
                                                class="form-control form-control-lg text-primary"><?= session()->get('name_user') ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0"></h5>
                            </div>
                            <div class="card-body bg-black color-palette text-right">
                                <label class="display-4 text-right text-green">Rp.
                                    <?= number_format($grand_total, 0) ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div card card-primary card-outline>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <?php echo form_open('Selling/InsertCart') ?>
                                        <div class="row">
                                            <div class="col-2 input-group">
                                                <input name="code_product" id="code_product" class="form-control"
                                                    placeholder="Barcode/Code Product" autocomplete="off" type="text"
                                                    required>
                                                <span class="input-group-append">
                                                    <a class="btn btn-primary btn-flat" data-toggle="modal"
                                                        data-target="#search-product">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                    <button type="reset" class="btn btn-danger btn-flat">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="col-3">
                                                <input name="name_product" class="form-control"
                                                    placeholder="Name Product" type="text" readonly>
                                            </div>
                                            <div class="col-1">
                                                <input name="name_unit" class="form-control" placeholder="Category"
                                                    type="text" readonly>
                                            </div>
                                            <div class="col-1">
                                                <input name="name_category" class="form-control" placeholder="Category"
                                                    type="text" readonly>
                                            </div>
                                            <div class="col-1">
                                                <input name="selling_price" class="form-control"
                                                    placeholder="Selling Price" type="text" readonly>
                                            </div>
                                            <div class="col-1">
                                                <input name="qty" id="qty" name="name_unit"
                                                    class="form-control text-center" placeholder="QTY" type="number"
                                                    min="1" value="1">
                                            </div>
                                            <input name="purchase_price" type="hidden">
                                            <div class="col-3">
                                                <button type="submit" class="btn btn-flat btn-primary"><i
                                                        class="fas fa-cart-plus"></i>Add</button>

                                                <a href="<?= base_url('Selling/ResetCart') ?>"
                                                    class="btn btn-flat btn-warning"><i
                                                        class="fas fa-sync"></i>Reset</a>
                                                <button class="btn btn-flat btn-success" data-toggle="modal"
                                                    data-target="#buying" onclick="paying()"><i
                                                        class="fas fa-cash-register"></i>Buy</button>
                                            </div>
                                        </div>
                                        <?php echo form_close() ?>
                                    </div>
                                    <div style="margin-bottom: 5%"></div>
                                    <hr>
                                    <!-- <div class="row">
                                        <div class="col-12"> -->
                                    <div class="card-body">
                                        <table id="" class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Code/Barcode</th>
                                                    <th>Name Product</th>
                                                    <th>Category</th>
                                                    <th>Selling Price</th>
                                                    <th width="100px">Qty</th>
                                                    <th>Total Price</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($cart as $key => $value){
                                            ?>
                                                <tr>
                                                    <td><?= $value['id'] ?></td>
                                                    <td><?= $value['name'] ?></td>
                                                    <td><?= $value['options']['name_category'] ?></td>
                                                    <td class="text-right">@Rp. <?= number_format($value['price'], 0)?>
                                                    </td>
                                                    <td class="text-center"><?= $value['qty']?>
                                                        <?= $value['options']['name_unit'] ?> </td>
                                                    <td class="text-right">@Rp. <?= number_format($value['subtotal']) ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('Selling/RemoveItemCart/' . $value['rowid']) ?>"
                                                            class="btn btn-flat btn-danger btn-sm"><i
                                                                class="fa fa-times"></i></a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0"></h5>
                            </div>
                            <div class="card-body bg-black color-palette text-center">
                                <h1 class="text-warning" id="terbilang"> Test</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php
                            if (session()->getFlashdata('Message')) {
                                echo '<div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="icon fas fa-check"></i>';
                                echo session()->getFlashdata('Message');
                                echo ' </div>';
                            }
                        ?>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
                <!-- </div>/.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Modal Pencarian Product -->
        <div class="modal fade" id="search-product">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Search data product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Code/Barcode</th>
                                    <th>Name Product</th>
                                    <th>Selling Price</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no= 1 ; 
                                foreach ($product as $key => $value){ 
                                    echo form_open(base_url("Selling/InsertCart"))
                                    ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['code_product'] ?></td>
                                    <td><?= $value['name_product'] ?></td>
                                    <td><?= $value['selling_price'] ?></td>
                                    <td><?= $value['stock'] ?></td>
                                    <!-- <td><input type="number" value="1" class="form-control text-center"></td> -->
                                    <td><button onclick="PickProduct(<?= $value['code_product'] ?>)"
                                            class="btn btn-success btn-xs" data-dismiss="modal">pick</button></td>
                                </tr>
                                <?php 
                            echo form_close();
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Modal  buying -->
        <div class="modal fade" id="buying">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Payment Transaction</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open('Selling/SaveTransaction') ?>

                        <div class="form-group">
                            <label form="">Grand Total</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input name="grand_total" value="<?= number_format($grand_total, 0) ?>" id="grandtotal"
                                    class="form-control input-control-lg text-right text-danger"
                                    placeholder="Name purchase" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label form="">Paid</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input name="buyed" id="paid"
                                    class="form-control input-control-lg text-right text-success" autocomplete="off"
                                    placeholder="Name purchase" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label form="">Refund</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input name="refund" id="refund"
                                    class="form-control input-control-lg text-right text-primary"
                                    placeholder="Name purchase" readonly>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat"><i class="fas fa-save"></i> Save
                            changes</button>
                    </div>
                    <?php echo  form_close() ?>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <script>
    $(document).ready(function() {
        $('#code_product').focus();

        <?php if ($grand_total == 0) { ?>
        document.getElementById('terbilang').innerHTML = "Nol Rupiah";
        <?php } else{ ?>
        document.getElementById('terbilang').innerHTML = terbilang(<?= $grand_total ?>) + ' Rupiah';
        <?php } ?>



        $('#code_product').keydown(function(e) {
            let code_product = $('#code_product').val();
            if (e.keyCode == 13) {
                e.preventDefault();
                if (code_product == '') {
                    Swal.fire('Product code not yet input')
                } else {
                    CheckProduct();
                }
            }
        })
    });

    //calculate refund
    $('#paid').keyup(function(e) {
        CalculateRefund();
    });

    function CheckProduct() {
        
        $.ajax({
            type: "POST",
            url: "<?= base_url('Selling/CheckProduct') ?>",
            data: {
                code_product: $('#code_product').val(),
            },
            dataType: "JSON",
            success: function(response) {
                if (response.name_product == '') {
                    Swal.fire('Code product not registered in Database')
                } else {
                    $('[name="name_product"]').val(response.name_product);
                    $('[name="name_category"]').val(response.name_category);
                    $('[name="name_unit"]').val(response.name_unit);
                    $('[name="selling_price"]').val(response.selling_price);
                    $('[name="purchase_price"]').val(response.purchase_price);
                    $('#qty').focus();
                }
            }
        });
    }

    function PickProduct(code_product) {
        $('#code_product').val(code_product);
        $('#search-product').modal('hide');
        $('#code_product').focus();
    }
    $

    function paying() {
        $('#paying').modal('show');
        $('#paid').focus();
    }

    new AutoNumeric('#paid', {
        digitGroupSeparator: ',',
        decimalPlaces: 0,
    });

    function CalculateRefund() {
        let grand_total = $('#grandtotal').val().replace(/[^.\d]/g, '').toString();
        let paid = $('#paid').val().replace(/[^.\d]/g, '').toString();

        let refund = parseFloat(paid) - parseFloat(grand_total)
        $('#refund').val(refund)

        new AutoNumeric('#refund', {
            digitGroupSeparator: ',',
            decimalPlaces: 0,
        });
    }
    </script>

    <script>
    function startTime() {
        var today = new Date;
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML = h + ':' + m + ':' + s;
        var t = setTimeout(function() {
            startTime()
        }, 500);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        };
        return i;
    }
    </script>



    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>