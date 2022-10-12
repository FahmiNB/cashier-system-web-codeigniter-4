<div class="col-md-12">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title"><?= $subTittle ?></h3>

            <div class="card-tools">
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
            <table id="example1" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Units</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    // $query = mysqli_query($Unit,"SELECT * From tbl_unit");
                    // while($Unit = mysqli_fetch_all($query))
                     foreach ($Unit as $key => $value) { ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td><?= $value['name_unit'] ?></td>
                        <td>
                            <button class="btn- btn-warning btn-sm btn-flat"><i class="fas fa-pencil-alt"
                                    data-toggle="modal" data-target="#edit-data<?= $value['id_unit']?>"></i></button>
                            <button class="btn- btn-danger btn-sm btn-flat" data-toggle="modal"
                                data-target="#delete-data<?= $value['id_unit']?>"><i class="fas fa-trash"></i></button>
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
            <?php echo form_open("Unit/InsertData")?>
            <div class="modal-body">
                <div class="form-group">
                    <label form="">Name Unit</label>
                    <input name="name_unit" class="form-control" placeholder="Units">
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

<!-- Modal Edit data -->
<?php foreach ($Unit as $key => $value) { ?>
<div class="modal fade" id="edit-data<?= $value['id_unit'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data <?= $subTittle?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open("Unit/UpdateData/" . $value['id_unit'])?>
            <div class="modal-body">
                <div class="form-group">
                    <label form="">Name Unit</label>
                    <input name="name_unit" value="<?= $value['name_unit'] ?>" class="form-control" placeholder="Units">
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flatt">Close</button>
                <button type="submit" class="btn btn-warning btn-flatt">Save changes</button>
            </div>
            <?php echo form_close()?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>

<!-- Modal Delete data -->
<?php foreach ($Unit as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['id_unit'] ?>">
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
                        <h5><?= $value ['name_unit']?></h5>
                    </b>
                </p>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flatt">Close</button>
                <a href="<?= base_url('Unit/DeleteData/' . $value['id_unit'])?>"
                    class="btn btn-danger btn-flat">Delete</a>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>