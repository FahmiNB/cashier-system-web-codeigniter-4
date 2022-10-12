<div class="col-md-12">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title"><?= $subTittle ?></h3>

            <div class="card-tools">
                <button type="button" onclick="NewWin=window.open('<?= base_url('Report/PrintDataProduct') ?>', 'NewWin' , 'toolbar=no,width=1500, scrollbars=yes')" class="btn btn-tool"><i
                        class="fas fa-print"></i> Print
                </button>
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-data"><i
                        class="fas fa-plus"></i> Add Data
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
                if (session()->getFlashdata('Message')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('Message');
                    echo '</h5> </div>';
                }
            ?>

            <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)){ ?>
            <div class="alert alert-danger alert-dismissible">
                <h4>Check Again entry Form !!</h4>
                <ul>
                    <?php foreach ($errors as $key => $error) { ?>
                    <li><?= esc($error) ?></li>
                    <?php }?>
                </ul>
            </div>
            <?php } ?>
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
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    // $query = mysqli_query($Unit,"SELECT * From tbl_unit");
                    // while($Unit = mysqli_fetch_all($query))
                     foreach ($Product as $key => $value) { ?>
                    <tr class="<?= $value['stock'] == 0 ? 'bg-danger' : '' ?>">
                        <td class="text-center"><?= $no++ ?></td>
                        <td class="text-center"><?= $value['code_product'] ?></td>
                        <td><?= $value['name_product'] ?></td>
                        <td class="text-center"><?= $value['name_category'] ?></td>
                        <td class="text-center"><?= $value['name_unit'] ?></td>
                        <td class="text-center">Rp. <?=number_format($value['purchase_price']) ?></td>
                        <td class="text-center">Rp. <?=number_format($value['selling_price']) ?></td>
                        <td class="text-center"><?= $value['stock'] ?></td>
                        <td>
                            <button class="btn- btn-warning btn-sm btn-flat"><i class="fas fa-pencil-alt"
                                    data-toggle="modal" data-target="#edit-data<?= $value['id_product']?>"></i></button>
                            <button class="btn- btn-danger btn-sm btn-flat" data-toggle="modal"
                                data-target="#delete-data<?= $value['id_product']?>"><i
                                    class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </Table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- Modal Add data -->
<div class="modal fade" id="add-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Data <?= $subTittle?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- validasi data -->
            <!--  -->
            <?php echo form_open("Product/InsertData")?> 
            <div class="modal-body">
                <div class="form-group">
                    <label form="">Code Product</label>
                    <input name="code_product" i class="form-control" placeholder="Code Product" required>
                </div>
                <div class="form-group">
                    <label form="">Name Product</label>
                    <input name="name_product" class="form-control" placeholder="Name Product" required>
                </div>
                <div class="form-group">
                    <label form="">Category</label>
                    <select name="id_category" class="form-control" required>
                        <option value="" placeholder="Name purchase">--Select Category--</option>
                        <?php foreach ($Category as $key => $value){ ?>
                        <option value="<?= $value['id_category'] ?>"><?= $value['name_category'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label form="">Unit</label>
                    <select name="id_unit" class="form-control" required>
                        <option value="">--Select Unit--</option>
                        <?php foreach ($Unit as $key => $value){ ?>
                        <option value="<?= $value['id_unit'] ?>"><?= $value['name_unit'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label form="">purchase price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input name="purchase_price" id="purchase_price" class="form-control"
                            placeholder="Name purchase" required>
                    </div>
                </div>


                <div class="form-group">
                    <label form="">selling price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input name="selling_price" id="selling_price" class="form-control"
                            placeholder="Selling purchase" required>
                    </div>
                </div>

                <div class="form-group">
                    <label form="">Stock</label>
                    <input name="stock" type="number" class="form-control" placeholder="Selling purchase" required>
                </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flatt" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flatt">Save changes</button>
            </div>
            <?php echo form_close()?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php foreach ($Product as $key => $value) { ?>
<!-- Modal Update data -->
<div class="modal fade" id="edit-data<?= $value['id_product'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data <?= $subTittle?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open("Product/UpdateData/". $value['id_product'])?>
            <div class="modal-body">
                <div class="form-group">
                    <label form="">Code Product</label>
                    <input name="code_product" value="<?= $value['code_product']?>" i class="form-control"
                        placeholder="Code Product" readonly>
                </div>
                <div class="form-group">
                    <label form="">Name Product</label>
                    <input name="name_product" value="<?= $value['name_product']?>" class="form-control"
                        placeholder="Name Product">
                </div>
                <div class="form-group">
                    <label form="">Category</label>
                    <select name="id_category" class="form-control">
                        <option value="" placeholder="Name purchase">--Select Category--</option>
                        <?php foreach ($Category as $key => $Ca){ ?>
                        <option value="<?= $Ca['id_category'] ?>"
                            <?= $value['id_category']== $Ca['id_category'] ? 'Selected' : '' ?>>
                            <?= $Ca['name_category'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label form="">Unit</label>
                    <select name="id_unit" class="form-control">
                        <option value="">--Select Unit--</option>
                        <?php foreach ($Unit as $key => $Un){ ?>
                        <option value="<?= $Un['id_unit'] ?>"
                            <?= $value['id_unit']== $Un['id_unit'] ? 'Selected' : '' ?>><?= $Un['name_unit'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label form="">purchase price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input name="purchase_price" value="<?= $value['purchase_price']?>"
                            id="purchase_price<?= $value['id_product'] ?>" class="form-control"
                            placeholder="Name purchase">
                    </div>
                </div>


                <div class="form-group">
                    <label form="">selling price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input name="selling_price" value="<?= $value['selling_price']?>"
                            id="selling_price<?= $value['id_product'] ?>" class="form-control"
                            placeholder="Selling purchase">
                    </div>
                </div>

                <div class="form-group">
                    <label form="">Stock</label>
                    <input name="stock" value="<?= $value['stock']?>" type="number" class="form-control"
                        placeholder="Selling purchase">
                </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flatt" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flatt">Save changes</button>
            </div>
            <?php echo form_close()?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>

<!-- Modal Delete data -->
<?php foreach ($Product as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['id_product'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Data <?= $subTittle?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>For sure to delete data
                    <b>
                        <h5><?= $value ['name_product']?></h5>
                    </b>
                </p>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flatt">Close</button>
                <a href="<?= base_url('Product/DeleteData/' . $value['id_product'])?>"
                    class="btn btn-danger btn-flat">Delete</a>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>

<script>
new AutoNumeric('#purchase_price', {
    digitGroupSeparator: ',',
    decimalPlaces: 0,
});

new AutoNumeric('#selling_price', {
    digitGroupSeparator: ',',
    decimalPlaces: 0,
});

<?php foreach($Product as $key => $value) { ?>
new AutoNumeric('#purchase_price<?= $value['id_product'] ?>', {
    digitGroupSeparator: ',',
    decimalPlaces: 0,
});

new AutoNumeric('#selling_price<?= $value['id_product'] ?>', {
    digitGroupSeparator: ',',
    decimalPlaces: 0,
});
<?php } ?>
</script>