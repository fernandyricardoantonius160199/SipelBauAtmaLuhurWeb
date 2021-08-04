<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Kendaraan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('kendaraan/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Kendaraan</label>

                      <div class="col-sm-9">
                        <input type="text" name="kd_kendaraan" class="form-control" placeholder="Masukkan Kode Kendaraan">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" name="nama_kendaraan" class="form-control" placeholder="Masukkan Nama Kendaraan">
                      </div>
                  </div>
				  
				     <div class="form-group">
                      <label class="col-sm-2 control-label">Merek Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" name="merek_kendaraan" class="form-control" placeholder="Masukkan Merek Barang">
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" name="jenis_kendaraan" class="form-control" placeholder="Masukkan Jenis Kendaraan">
                      </div>
                  </div>
  
					<div class="form-group">
                      <label class="col-sm-2 control-label">Tahun Pembelian Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" name="tahun_kendaraan" class="form-control" placeholder="Masukkan Tahun Kendaraan">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Jumlah Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" name="jumlah_kendaraan" class="form-control" placeholder="Masukkan Jumlah Kendaraan">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Kondisi Kendaraan</label>
                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('kondisi_kendaraan', array('Pilih Kondisi Kendaraan', 'Baik'=>'Baik', 'Kurang Baik'=>'Kurang Baik', 'Rusak Berat'=>'Rusak Berat'), null, "class='form-control'");
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
                          echo anchor('kendaraan', 'Kembali', array('class'=>'btn btn-danger'));
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