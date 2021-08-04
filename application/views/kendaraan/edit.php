<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Kendaraan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('kendaraan/edit', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $kendaraan['kd_kendaraan']; ?>" name="kd_kendaraan" readonly="true" class="form-control" placeholder="Masukkan Kode Kendaraan">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $kendaraan['nama_kendaraan']; ?>" name="nama_kendaraan" class="form-control" placeholder="Masukkan Nama Kendaraan">
                      </div>
                  </div>
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Merek Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $kendaraan['merek_kendaraan']; ?>" name="merek_kendaraan" class="form-control" placeholder="Masukkan Merek Kendaraan">
                      </div>
                  </div>
				  
                   <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $kendaraan['jenis_kendaraan']; ?>" name="jenis_kendaraan" class="form-control" placeholder="Masukkan Jenis Kendaraan">
                      </div>
                  </div>
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tahun Pembelian Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $kendaraan['tahun_kendaraan']; ?>" name="tahun_kendaraan" class="form-control" placeholder="Masukkan Tahun Pembelian Kendaraan">
                      </div>
                  </div>
				  
				<div class="form-group">
                      <label class="col-sm-2 control-label">Jumlah Kendaraan</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $kendaraan['jumlah_kendaraan']; ?>" name="jumlah_kendaraan" class="form-control" placeholder="Masukkan Merek Kendaraan">
                      </div>
                  </div>
				  	  
					<div class="form-group">
                      <label class="col-sm-2 control-label">Kondisi Kendaraan</label>
                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('kondisi_kendaraan', array('Pilih Kondisi kendaraan', 'Baik'=>'Baik', 'Kurang Baik'=>'Kurang Baik', 'Rusak Berat'=>'Rusak Berat'), $kendaraan['kondisi_kendaraan'], "class='form-control'");
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