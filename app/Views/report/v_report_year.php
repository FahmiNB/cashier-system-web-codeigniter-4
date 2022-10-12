<div class="col-md-12">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title"><?= $subTittle ?></h3>



            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Year</label>
                        <div class="col-10 input-group">
                        <div class="col-8">
                                <select name="year" id="year" class="form-control">
                                    <option value="value">--Year--</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                            </div>
                            <span class="input-group-append">
                                <button onclick="ViewTableReport()" class="btn btn-primary btn-flat" data-toggle="modal"
                                    data-target="#search-product">
                                    <i class="fas fa-file-alt">view report</i>
                                </button>
                                <button onclick="PrintReport()" class="btn btn-success btn-flat">
                                    <i class="fas fa-print">Print report</i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                   

                    <div class="col-sm-12">
                        <hr>
                        <div class="tableAjax"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script> -->

<script>
function ViewTableReport() {
    let year = $('#year').val();
    if ((year == "")) {
        Swal.fire('Year not yet chosen');
    } else {
        $.ajax({
            type: "POST",
            url: "<?= base_url('Report/ViewReportYear') ?>",
            data: {
                year: year,
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
    let year = $('#year').val();
   if ((year == "")) {
        Swal.fire('Year not yet chosen');
    } else {
        NewWin = window.open('<?= base_url('Report/PrintDataYear') ?>/' + year , 'NewWin',
            'toolbar=no,width=1500, scrollbars=yes')
    }
}
</script>