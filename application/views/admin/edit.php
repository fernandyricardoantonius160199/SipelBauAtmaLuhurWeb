<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
				<?php
                 echo form_open_multipart('admin/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_admin', $admin['id_admin']);
            ?>

                <div class="box-body">
				
				<div class="form-group">
                      <label class="col-sm-2 control-label">Id Admin</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $admin['id_admin']; ?>" readonly="true" name="id_user" class="form-control" placeholder="Masukkan Id Admin">
                      </div>
                  </div>
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Lengkap</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $admin['nama_admin']; ?>" name="nama_admin" class="form-control" placeholder="Masukkan Nama Lengkap Admin">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $admin['user_admin']; ?>" name="user_admin" class="form-control" placeholder="Masukan Username">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">E - Mail</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $admin['email_admin']; ?>" name="email_admin" class="form-control" placeholder="Masukkan E - Mail">
                      </div>
                  </div>
				  
				 <div class="form-group">
                      <label class="col-sm-2 control-label">No. Handphone</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $admin['no_hp_admin']; ?>" name="no_hp_admin" class="form-control" placeholder="Masukkan No. Handphone">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>

                      <div class="col-sm-9">
                        <input type="password" value="<?php echo $admin['pass_admin']; ?>" name="pass_admin" class="form-control" placeholder="Masukan Password">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('admin', 'Kembali', array('class'=>'btn btn-danger'));
                        ?>
                      </div>
                  </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>