<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('barang/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Barang</label>

                      <div class="col-sm-9">
                        <input type="text" name="kd_barang" class="form-control" placeholder="Masukkan Kode Barang">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-9">
                        <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                      </div>
                  </div>
				  
				     <div class="form-group">
                      <label class="col-sm-2 control-label">Merek Barang</label>
                      <div class="col-sm-9">
                        <input type="text" name="merek_barang" class="form-control" placeholder="Masukkan Merek Barang">
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Spesifikasi Barang</label>
                      <div class="col-sm-9">
                        <input type="text" name="spesifikasi_barang" class="form-control" placeholder="Masukkan Spesifikasi Barang">
                      </div>
                  </div>
  
					<div class="form-group">
                      <label class="col-sm-2 control-label">Tahun Buat/Beli Barang</label>
                      <div class="col-sm-9">
                        <input type="text" name="tahun_barang" class="form-control" placeholder="Masukkan Tahun Buat/Beli Barang">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Jumlah Barang</label>
                      <div class="col-sm-9">
                        <input type="text" name="jumlah_barang" class="form-control" placeholder="Masukkan Jumlah Barang">
                      </div>
                  </div>
				  
				    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Ruangan</label>
                       <div class="col-sm-9">
                       <?php
                          echo cmb_dinamis('ruangan', 'tbl_ruangan', 'nama_ruangan', 'kd_ruangan');
                        ?>
                      </div>
				</div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Kondisi Barang</label>
                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('kondisi_barang', array('Pilih Kondisi Barang', 'Baik'=>'Baik', 'Kurang Baik'=>'Kurang Baik', 'Rusak Berat'=>'Rusak Berat'), null, "class='form-control'");
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
                          echo anchor('barang', 'Kembali', array('class'=>'btn btn-danger'));
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