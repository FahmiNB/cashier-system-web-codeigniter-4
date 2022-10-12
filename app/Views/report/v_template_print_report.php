<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entwo Kasir | <?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- jQuery -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
function ViewTableReport() {
    let date = $('#date').val();
    if (date == "") {
        Swal.fire('Date not yet chosen');
    } else {
        $.ajax({
            type: "POST",
            url: "<?= base_url('Report/ViewReportDays') ?>",
            data: {
                date: date,
            },
            dataType: "JSON",
            success: function(response) {
                if (response.data) {
                    $('.tableAjax').html(response.data)
                }
            }
        });
    }
}

function PrintReport() {
    let date = $('#date').val();
    if (date == "") {
        Swal.fire('Date not yet chosen !');
    } else {
        NewWin=window.open('<?= base_url('Report/PrintDataDays') ?>', 'NewWin' , 'toolbar=no,width=1500, scrollbars=yes')
    }
}
</script>
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-12 text-center">
                    <p class="page-header text-primary">
                        <i class="fas fa-shopping-cart fa-3x"></i><b>
                            <font size=9> <?= $web['name_shop'] ?></font>
                        </b><br>
                    <address>
                        <strong><?= $web['address'] ?></strong><br>
                        <strong><?= $web['no_phone'] ?></strong><br>
                    </address>
                    </p>
                </div>
                <div class="col-12 text-center">
                    <!-- /.row -->
                    <hr>
                    <b>
                        <h4><?= $title ?></h4>
                    </b>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->

            <!-- Table row -->
            <div class="row">
                <?php if ($page) {
                    echo view($page);
                } ?>
                <!-- /.col -->
            </div>
            <!-- /.row -->


            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
    window.addEventListener("load", window.print());
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<!-- <script>
function ViewTableReport() {
    let date = $('#date').val();
    if (date == "") {
        Swal.fire('Date not yet chosen');
    } else {
        $.ajax({
            type: "POST",
            url: "< base_url('Report/ViewReportDays') ?>",
            data: {
                date: date,
            },
            dataType: "JSON",
            success: function(response) {
                if (response.data) {
                    $('.tableAjax').html(response.data)
                }
            }
        });
    }
}

function PrintReport() {
    let date = $('#date').val();
    if (date == "") {
        Swal.fire('Date not yet chosen !');
    } else {
        NewWin= window.open('< base_url('Report/PrintDataDays') ?>/' + date, 'NewWin' , 'toolbar=no,width=1500, scrollbars=yes')
    }
}
</script> -->
</body>

</html>