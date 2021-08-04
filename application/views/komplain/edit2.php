<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Komplain Kerusakan Sarana Prasarana</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('komplain/edit', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Komplain</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $komplain['kd_komplain']; ?>" readonly="true" name="kd_komplain" class="form-control" placeholder="Masukkan Kode Komplain">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Id User</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $komplain['id_user']; ?>" readonly="true" name="id_user" class="form-control">
                      </div>
                  </div>
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Komplain</label>
					  <div class="col-sm-9">
                        <?php
                          echo form_dropdown('jenis_komplain', array('Pilih Jenis Komplain', 'Kerusakan Sarana'=>'Kerusakan Sarana', 'Kerusakan Prasarana'=>'Kerusakan Prasarana'), $komplain['jenis_komplain'], "class='form-control'");
                        ?>
                      </div>
                  </div>

                 

               
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Status Komplain</label>

                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('status_komplain', array('Pilih Status komplain', 'Belum Dikerjakan'=>'Belum Dikerjakan', 'Sedang Dikerjakan'=>'Sedang Dikerjakan', 'Selesai Dikerjakan'=>'Selesai Dikerjakan',
						  'Maaf, terjadi pelaporan komplain kerusakan yang sama'=>'Maaf, terjadi pelaporan komplain kerusakan yang sama'), $komplain['status_komplain'], "class='form-control'");
                        ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('komplain', 'Kembali', array('class'=>'btn btn-danger'));
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