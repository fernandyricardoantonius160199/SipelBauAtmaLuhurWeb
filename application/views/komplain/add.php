<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Komplain Kerusakan Sarana Prasarana</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('komplain/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Komplain</label>

                      <div class="col-sm-9">
                        <input type="text" name="kd_komplain" class="form-control" placeholder="Masukkan Kode Komplain">
                      </div>
                  </div>
				  
				 <div class="form-group">
                      <label class="col-sm-2 control-label">Nama User</label>

                      <div class="col-sm-9">
                        <?php
                          echo cmb_dinamis('user', 'tbl_user', 'nama_user', 'id_user');
                        ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Komplain</label>
                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('jenis_komplain', array('Pilih Jenis Komplain', 'Kerusakan Sarana'=>'Kerusakan Sarana', 'Kerusakan Prasarana'=>'Kerusakan Prasarana'), null, "class='form-control'");
                        ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Isi Komplain</label>
                      <div class="col-sm-9">
                        <input type="text" name="isi_komplain" class="form-control" placeholder="Masukkan Isi Komplain">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat, Jam, Tanggal Komplain</label>
                       <div class="col-sm-5">
                       <?php
                          echo cmb_dinamis('ruangan', 'tbl_ruangan', 'kd_ruangan', 'kd_ruangan');
                        ?>
                      </div>

                      <div class="col-sm-2">
                        <input type="time" name="jam_komplain" class="form-control">
                      </div>

                      <div class="col-sm-2">
                        <input type="date" name="tanggal_komplain" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Foto Komplain</label>
                      <div class="col-sm-9">
                        <input type="file" name="userfile">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Status Komplain</label>
                      <div class="col-sm-9">
                       <?php
                          echo form_dropdown('status_komplain', array('Pilih Status Komplain', 'Belum Dikerjakan'=>'Belum Dikerjakan', 'Sedang Dikerjakan'=>'Sedang Dikerjakan', 'Selesai Dikerjakan'=>'Selesai Dikerjakan','Maaf, terjadi pelaporan komplain kerusakan yang sama'=>'Maaf, terjadi pelaporan komplain kerusakan yang sama'), null, "class='form-control'");
                        ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
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