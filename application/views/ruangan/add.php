<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Ruangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('ruangan/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">



                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Ruangan</label>

                      <div class="col-sm-9">
                        <input type="text" name="kd_ruangan" class="form-control" placeholder="Masukkan Kode Ruangan">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Ruangan</label>

                      <div class="col-sm-9">
                        <input type="text" name="nama_ruangan" class="form-control" placeholder="Masukkan Nama Ruangan">
                      </div>
                  </div>

				  <div class="form-group">
                      <label class="col-sm-2 control-label">Kondisi Ruangan</label>
                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('kondisi_ruangan', array('Pilih Kondisi Ruangan', 'Baik'=>'Baik', 'Kurang Baik'=>'Kurang Baik', 'Rusak Berat'=>'Rusak Berat'), null, "class='form-control'");
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
                          echo anchor('ruangan', 'Kembali', array('class'=>'btn btn-danger'));
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