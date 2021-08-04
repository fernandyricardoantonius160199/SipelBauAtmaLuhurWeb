<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('barang/edit', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Barang</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $barang['kd_barang']; ?>" name="kd_barang" readonly="true" class="form-control" placeholder="Masukkan Kode barang">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $barang['nama_barang']; ?>" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                      </div>
                  </div>
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Merek Barang</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $barang['merek_barang']; ?>" name="merek_barang" class="form-control" placeholder="Masukkan Merek Barang">
                      </div>
                  </div>
				  
                   <div class="form-group">
                      <label class="col-sm-2 control-label">Spesifikasi Barang</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $barang['spesifikasi_barang']; ?>" name="spesifikasi_barang" class="form-control" placeholder="Masukkan Spesifikasi Barang">
                      </div>
                  </div>
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tahun Buat/Beli Barang</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $barang['tahun_barang']; ?>" name="tahun_barang" class="form-control" placeholder="Masukkan Tahun Buat/Beli Barang">
                      </div>
                  </div>
				  
				<div class="form-group">
                      <label class="col-sm-2 control-label">Jumlah Barang</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $barang['jumlah_barang']; ?>" name="jumlah_barang" class="form-control" placeholder="Masukkan Merek Barang">
                      </div>
                  </div>
				  
				  <div class="form-group">
				  
				    <label class="col-sm-2 control-label">Nama Ruangan</label>
                      <div class="col-sm-9">
                        <?php
                          echo cmb_dinamis('ruangan', 'tbl_ruangan', 'nama_ruangan', 'kd_ruangan', $barang['kd_ruangan']);
                        ?>
                      </div>
				</div>
				  	  
					<div class="form-group">
                      <label class="col-sm-2 control-label">Kondisi Barang</label>
                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('kondisi_barang', array('Pilih Kondisi Barang', 'Baik'=>'Baik', 'Kurang Baik'=>'Kurang Baik', 'Rusak Berat'=>'Rusak Berat'), $barang['kondisi_barang'], "class='form-control'");
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