<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Data Tabel Kendaraan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('kendaraan/add', '<button class="btn bg-navy margin">Tambah Data</button>');
            ?>

              <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Kendaraan</th>
						<th>Nama Kendaraan</th>
						<th>Merek Kendaraan</th>
						<th>Jenis Kendaraan</th>
                        <th>Tahun Pembelian Kendaraan</th>
						<th>Jumlah Kendaraan</th>
						<th>Kondisi Kendaraan</th>
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
                "ajax": '<?php echo site_url('kendaraan/data'); ?>',
                "order": [[ 1, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "20px",
								"class": "text-center",
								"orderable": false,
					},
					{
                        "data": "kd_kendaraan",
                        "width": "120px",
                        "class": "text-center"
                    },
                    { 
                        "data": "nama_kendaraan",
						"width": "100px",
                        "class": "text-center"
                    },
					{ 
                        "data": "merek_kendaraan",
						"width": "100px",
                        "class": "text-center"
                    },
					{ 
                        "data": "jenis_kendaraan",
                        "width": "150px",
						 "class": "text-center"
                    },
					{ 
                        "data": "tahun_kendaraan", 
                        "width": "150px",
                        "class": "text-center"
                    },
					{ 
                        "data": "jumlah_kendaraan", 
                        "width": "60px",
                        "class": "text-center"
					},
					    { 
                        "data": "kondisi_kendaraan", 
                        "width": "60px",
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