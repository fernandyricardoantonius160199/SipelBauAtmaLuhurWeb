<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Data Tabel Inventaris</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('inventaris/add', '<button class="btn bg-navy margin">Tambah Data</button>');
            ?>

              <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Inventaris</th>
						<th>Nama Barang</th>
						<th>Merek</th>
                        <th>Kode Ruangan</th>
						<th>Tanggal Pembelian</th>
						<th>Jumlah</th>
						<th>Kondisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<!-- punya lama -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

<!-- baru tapi cdn -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> -->

<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('inventaris/data'); ?>',
                "order": [[ 1, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "20px",
                        "class": "text-center",
                        "orderable": false,
                    },
{
                        "data": "kd_inventaris",
                        "width": "120px",
                        "class": "text-center"
                    },
					
                    { 
                        "data": "nama_barang",
						"width": "100px",
                        "class": "text-center"
                    },
					{ 
                        "data": "merek_barang",
						"width": "100px",
                        "class": "text-center"
                    },
					{ 
                        "data": "kd_ruangan",
                        "width": "150px",
						 "class": "text-center"
                    },
					{ 
                        "data": "tanggal_beli", 
                        "width": "150px",
                        "class": "text-center"
                    },
					{ 
                        "data": "jumlah", 
                        "width": "100px",
                        "class": "text-center"
					},
					    { 
                        "data": "kondisi", 
                        "width": "80px",
                        "class": "text-center"
                    },
                    { 
                        "data": "aksi",
                        "width": "60px",
                        "class": "text-center"
                    },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
</script>