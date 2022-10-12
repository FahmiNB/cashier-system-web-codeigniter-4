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

            <table id="example1" class="table table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Name User</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                     foreach ($User as $key => $value) { ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td><?= $value['name_user'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td style="color: ;" class="text-center"><!--<?= $value['password'] ?> -->
                        </td>
                        <td class="text-center"><?php
                            if ($value['level'] == 1) { ?>
                            <label class="badge bg-success">Admin</label>
                            <?php } else { ?>
                            <label class="badge bg-primary">kasir</label>
                            <?php } ?>
                        </td>
                        <td>
                            <button class="btn- btn-warning btn-sm btn-flat"><i class="fas fa-pencil-alt"
                                    data-toggle="modal" data-target="#edit-data<?= $value['id_user']?>"></i></button>
                            <button class="btn- btn-danger btn-sm btn-flat" data-toggle="modal"
                                data-target="#delete-data<?= $value['id_user']?>"><i class="fas fa-trash"></i></button>
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
            <?php echo form_open("User/InsertData")?>
            <div class="modal-body">
                <div class="form-group">
                    <label form="">Name User</label>
                    <input name="name_user" class="form-control" placeholder="Name User">
                </div>
                <div class="form-group">
                    <label form="">Email</label>
                    <input name="email" class="form-control" placeholder="Name User">
                </div>
                <div class="form-group">
                    <label form="">Password</label>
                    <input name="password" class="form-control" placeholder="Name User">
                </div>
                <div class="form-group">
                    <label form="">Level</label>
                    <select name="level" class="form-control">
                        <option value="1 <?= $value['level']== 1 ? 'Selected' : '' ?>">Admin</option>
                        <option value="2" <?= $value['level']== 1 ? 'Selected' : '' ?> selected>Kasir</option>
                    </select>
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
<?php foreach ($User as $key => $value) { ?>
<div class="modal fade" id="edit-data<?= $value['id_user'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data <?= $subTittle?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open("User/UpdateData/" . $value['id_user'])?>
            <div class="modal-body">
                <div class="form-group">
                    <label form="">Name User</label>
                    <input name="name_user" value="<?= $value['name_user'] ?>" class="form-control"
                        placeholder="name user">
                </div>
                <div class="form-group">
                    <label form="">Email</label>
                    <input name="email" value="<?= $value['email'] ?>" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <label form="">Password</label>
                    <input name="password" value="<?= $value['password'] ?>" class="form-control"
                        placeholder="name user">
                </div>
                <div class="form-group">
                    <label form="">Level</label>
                    <select name="level" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2" selected>Kasir</option>
                    </select>
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
<?php foreach ($User as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['id_user'] ?>">
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
                        <h5><?= $value ['name_user']?></h5>
                    </b>
                </p>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flatt">Close</button>
                <a href="<?= base_url('User/DeleteData/' . $value['id_user'])?>"
                    class="btn btn-danger btn-flat">Delete</a>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>