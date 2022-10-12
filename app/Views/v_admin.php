<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?= $TProduct ?></h3>

            <p>Product</p>
        </div>
        <div class="icon">
            <i class="fas fa-boxes"></i>
        </div>
        <a href="<?= base_url('Product')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3><?= $TCategory ?></h3>
            <!-- <sup style="font-size: 20px">%</sup> -->
            <p>Category</p>
        </div>
        <div class="icon">
            <i class="fas fa-th-list"></i>
        </div>
        <a href="<?= base_url('Category')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3><?= $TUnit ?></h3>

            <p>Unit</p>
        </div>
        <div class="icon">
            <i class="fas fa-list"></i>
        </div>
        <a href="<?= base_url('Unit')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3><?= $TUser ?></h3>

            <p>User</p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <a href="<?= base_url('User')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- 
<div class="col-sm-12"> -->
    <!-- Info Boxes Style 2 -->
    <!-- <div class="info-box mb-3 bg-navy">


        <div style="align-items: center;" class="info-box-content">
            <span class="info-box-text">Jumlah Penjualan</span>
            <span class="info-box-number">5,200</span>
        </div> -->
        <!-- /.info-box-content -->
    <!-- </div>
</div> -->

<div class="col-md-4">
    <!-- Info Boxes Style 2 -->
    <div class="info-box mb-3 bg-olive">
        <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Income Today</span>
            <span class="info-box-number">Rp <?= number_format($IncomeDays['total_price'], 0) ?></span>
        </div>
        <!-- /.info-box-content -->
    </div>
</div>

<div class="col-md-4">
    <!-- Info Boxes Style 2 -->
    <div class="info-box mb-3 bg-olive">
        <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Income This Month</span>
            <span class="info-box-number">Rp <?= number_format($IncomeMonth['total_price'], 0) ?></span>
        </div>
        <!-- /.info-box-content -->
    </div>
</div>

<div class="col-md-4">
    <!-- Info Boxes Style 2 -->
    <div class="info-box mb-3 bg-olive">
        <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Income This Year</span>
            <span class="info-box-number">Rp <?= number_format($IncomeYear['total_price'], 0) ?></span>
        </div>
        <!-- /.info-box-content -->
    </div>
</div>

<div class="col-md-12">
    <canvas id="myChart" width="100" height="20"></canvas>
</div>
<?php foreach($chart as $key => $value) {
    $date[] = $value['date_sell'];
    $total[] = $value['total_price'];
    $profit[] = $value['profit'];

} ?>

<script>
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?= json_encode($date) ?>,
        datasets: [{
            label: 'Chart income selling month <?= date('M Y') ?>',
            data: <?= json_encode($total) ?>,
            backgroundColor: [
                'rgba(25, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(25, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 3
        },
        {
            label: 'Chart income profit month <?= date('M Y') ?>',
            data: <?= json_encode($profit) ?>,
            backgroundColor: [
                'rgba(255, 199, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(25, 599, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>