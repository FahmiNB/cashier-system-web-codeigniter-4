<div class="col-12">
<table id="example1" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Code Product</th>
                        <th>Name Product</th>
                        <th>Name category</th>
                        <th>Name unit</th>
                        <th>purchase price</th>
                        <th>selling price</th>
                        <th>stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    // $query = mysqli_query($Unit,"SELECT * From tbl_unit");
                    // while($Unit = mysqli_fetch_all($query))
                     foreach ($Product as $key => $value) { ?>
                    <tr class="<?= $value['stock'] == 0 ? 'text-danger' : '' ?>">
                        <td class="text-center"><?= $no++ ?></td>
                        <td class="text-center"><?= $value['code_product'] ?></td>
                        <td><?= $value['name_product'] ?></td>
                        <td class="text-center"><?= $value['name_category'] ?></td>
                        <td class="text-center"><?= $value['name_unit'] ?></td>
                        <td class="text-center">Rp. <?=number_format($value['purchase_price']) ?></td>
                        <td class="text-center">Rp. <?=number_format($value['selling_price']) ?></td>
                        <td class="text-center"><?= $value['stock'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <b>Print Date : <?= date('d M Y H:i:s ') ?></b>
            </Table>
</div>