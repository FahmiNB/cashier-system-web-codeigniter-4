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
            <div class="row">
            </div>
            <table id="example" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Category</th>
                        <!-- <th width="">Action</th> -->
                    </tr>
                </thead>
                <tbody>


                </tbody>
            </Table>
        </div>
        <div class="row">
        </div>
        <table id="example1" class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th width="50px">No</th>
                    <th>Category</th>
                    <th width="">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                     foreach ($Category as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['name_category'] ?></td>
                    <td>
                        <button class="btn- btn-warning btn-sm btn-flat"><i class="fas fa-pencil-alt"
                                data-toggle="modal" data-target="#edit-data<?= $value['id_category']?>"></i></button>
                        <button class="btn- btn-danger btn-sm btn-flat" data-toggle="modal"
                            data-target="#delete-data<?= $value['id_category']?>"><i class="fas fa-trash"></i></button>
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
            <?php echo form_open("Category/InsertData")?>
            <div class="modal-body">
                <div class="form-group">
                    <label form="">Name Category</label>
                    <input name="name_category" class="form-control" placeholder="Category">
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
<?php foreach ($Category as $key => $value) { ?>
<div class="modal fade" id="edit-data<?= $value['id_category'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data <?= $subTittle?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open("Category/UpdateData/" . $value['id_category'])?>
            <div class="modal-body">
                <div class="form-group">
                    <label form="">Name Unit</label>
                    <input name="name_category" value="<?= $value['name_category'] ?>" class="form-control"
                        placeholder="Category">
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
<?php foreach ($Category as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['id_category'] ?>">
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
                        <h5><?= $value ['name_category']?></h5>
                    </b>
                </p>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flatt">Close</button>
                <a href="<?= base_url('Category/DeleteData/' . $value['id_category'])?>"
                    class="btn btn-danger btn-flat">Delete</a>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>

<!-- <script>
function listDataCategory() {
    var table = $('datacategory').DataTable({
            "processing": true,
            "servedSide": true,
            "order": [],
            "ajax": {
                "url": "< // site_url('Category/categoryAjax')?>",
                "type": "POST"
            },
            "columnDefs": [{
                "target" : 0,
                "orderable" : false,
            },
        {
            "targerts": 1,
            "orderable" : false,
        }]
        },

    )
}
</script> -->