<div class="col-md-12">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title"><?= $subTittle ?></h3>

            <div class="card-tools">
                
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
            ?>
            <?php echo form_open('Admin/UpdateSetting') ?>
            <div class="form-group">
                    <label form="">Name shop</label>
                    <input name="name_shop" class="form-control" value='<?=$setting['name_shop']?>'>
                </div>
                <div class="form-group">
                    <label form="">Address</label>
                    <input name="address" class="form-control" value='<?=$setting['address']?>'>
                </div>
                <div class="form-group">
                    <label form="">No Phone</label>
                    <input name="no_phone" class="form-control" value='<?=$setting['no_phone']?>'>
                </div>
                <div class="form-group">
                    <label form="">Description</label>
                   <textarea rows="3" name="description" class="form-control" ><?=$setting['description']?></textarea>
                </div>

                <div class="form_group">
                    <button class="tbn btn-flat btn-primary">Simpan</button>
                </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

