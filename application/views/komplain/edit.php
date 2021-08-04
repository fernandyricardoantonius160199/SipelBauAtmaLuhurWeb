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
                      <label class="col-sm-2 control-label">Nama User</label>

                      <div class="col-sm-9">
					  
                       <?php echo cmb_dinamis('user', 'tbl_user', 'nama_user', 'id_user', $komplain['id_user']);?>
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
                      <label class="col-sm-2 control-label">Isi Komplain</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $komplain['isi_komplain']; ?>" name="isi_komplain" class="form-control" placeholder="Masukkan Isi komplain">
                      </div>
                  </div>

               <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat, Jam dan Tanggal Komplain</label>
                      <div class="col-sm-5">
                        <?php echo cmb_dinamis('ruangan', 'tbl_ruangan', 'kd_ruangan', 'kd_ruangan', $komplain['kd_ruangan']); ?>
                      </div>

                      <div class="col-sm-2">
                        <input type="time" value="<?php echo $komplain['jam_komplain']; ?>"  name="jam_komplain" class="form-control">
                      </div>
     
				  <div class="col-sm-2">
                        <input type="date" value="<?php echo $komplain['tanggal_komplain']; ?>" name="tanggal_komplain" class="form-control">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Foto</label>

                      <div class="col-sm-5">
                        
                        <img src="<?php echo base_url()."/uploads/".$komplain['foto_komplain']; ?>" readonly="true" width="150px">
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