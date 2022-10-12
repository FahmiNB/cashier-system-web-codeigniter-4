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
    <div class="col-12">
        <b>Date :</b> <?= $date ?>
        <table class="table table-bordered table-striped">

            <tr class="text-center bg-gray">
                <th>No</th>
                <th>Code product</th>
                <th>Name Product</th>
                <th>Purchase Price</th>
                <th>Selling Price</th>
                <th>QTY</th>
                <th>Total Price</th>
                <th>Total Profit</th>
            </tr>
            <?php $no = 1;
 foreach ($dataDays as $key => $value) { 
    $grandTotal[] = $value['total_price'];
    $grandProfit[] = $value['profit'];
    ?>

            <tr>
                <td><?= $no++ ?></td>
                <td class="text-center"><?= $value['code_product'] ?></td>
                <td><?= $value['name_product'] ?></td>
                <td class="text-right">Rp. <?= number_format($value['modal'], 0) ?></td>
                <td class="text-right">Rp. <?= number_format($value['selling_price'], 0) ?></td>
                <td class="text-center"><?= $value['qty'] ?></td>
                <td class="text-right">Rp. <?= number_format($value['total_price'], 0) ?></td>
                <td class="text-right">Rp. <?= number_format($value['profit'], 0) ?></td>
            </tr>

            <?php } ?>
            <tr>
                <td class="text-center bg-gray" colspan="6">
                    <h5>Grand Total</h5>
                </td>
                <td class="text-right">Rp <?= $dataDays == null ? '' : number_format(array_sum($grandTotal), 0) ?></td>
                <td class="text-right">Rp <?= $dataDays == null ? '' : number_format(array_sum($grandProfit), 0) ?></td>
            </tr>
        </table>
    </div>
    <!-- /.col -->
</div>