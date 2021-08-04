<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('user/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">
				
				<div class="form-group">
                      <label class="col-sm-2 control-label">Id User</label>
                      <div class="col-sm-9">
                        <input type="text" name="id_user" class="form-control" placeholder="Masukkan Id User">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Lengkap</label>
                      <div class="col-sm-9">
                        <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama Lengkap User">
                      </div>
                  </div>
				  	  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">E - Mail</label>
                      <div class="col-sm-9">
                        <input type="text" name="email_user" class="form-control" placeholder="Masukkan E - Mail">
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">No. Handphone</label>
                      <div class="col-sm-9">
                        <input type="text" name="no_hp_user" class="form-control" placeholder="Masukkan No.Handphone">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" name="user_user" class="form-control" placeholder="Masukkan Username">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="pass_user" class="form-control" placeholder="Masukkan Password">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>
                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                      </div>
                      <div class="col-sm-1">
                        <?php
                          echo anchor('user', 'Kembali', array('class'=>'btn btn-danger'));
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