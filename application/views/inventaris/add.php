<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Inventaris</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('inventaris/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Inventaris</label>

                      <div class="col-sm-9">
                        <input type="text" name="kd_inventaris" class="form-control" placeholder="Masukkan Kode Inventaris">
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
                      <label class="col-sm-2 control-label">Nama Ruangan</label>

                      <div class="col-sm-9">
                        <?php
                          echo cmb_dinamis('ruangan', 'tbl_ruangan', 'nama_ruangan', 'kd_ruangan');
                        ?>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Pembelian</label>
                      <div class="col-sm-9">
                        <input type="date" name="tanggal_beli" class="form-control" placeholder="Masukkan Tanggal Pembelian">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Jumlah Barang</label>
                      <div class="col-sm-9">
                        <input type="text" name="jumlah" class="form-control" placeholder="Masukkan Jumlah Barang">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Kondisi Barang</label>
                      <div class="col-sm-9">
                        <?php
                          echo form_dropdown('kondisi', array('Pilih Kondisi Barang', 'Baik'=>'Baik', 'Rusak'=>'Rusak'), null, "class='form-control'");
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
                          echo anchor('inventaris', 'Kembali', array('class'=>'btn btn-danger'));
                        ?>
                      </div>
                  </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->

          <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    
              <h4><i class="icon fa fa-warning"></i> Alert!</h4>
              Diakhir Kode Kelas harus ditambahkan angka 1/2.<br>
              Contoh : 7-A1 > untuk Kelas 7-A IPA &amp; 7-A2 > untuk Kelas 7-A IPS
          </div>

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>