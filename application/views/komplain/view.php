<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Data Tabel Komplain Kerusakan Sarana Prasarana</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('komplain/add', '<button class="btn bg-navy margin">Tambah Data</button>');
				echo anchor('komplain/export_excel', '<button class="btn btn-success btn-sm name="export_excel"><i class="fa fa-print" aria-hidden="true"></i> Xls</button>');
				echo anchor('komplain/export_pdf','<button class="btn btn-danger btn-sm margin name="export_pdf""><i class="fa fa-print" aria-hidden="true"></i> Pdf</button>');
				echo anchor('komplain/export_pdf','<button class="btn btn-sm btn-primary name="export_pdf""><i class="fa fa-print" aria-hidden="true"></i> Print</button>');
            ?>

              <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
						<th>Kode Komplain</th>
						<th>Id User</th>
						<th>Jenis Komplain</th>
						<th>Isi Komplain</th>
                        <th>Jam Komplain</th>
                        <th>Tanggal Komplain</th>
                        <th>Tempat Komplain</th>
						<th>Foto Komplain</th>
                        <th>Status Komplain</th>
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
                "ajax": '<?php echo site_url('Komplain/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "class": "text-center",
                        "orderable": false,
                    },
					{ 
                        "data": "kd_komplain",
                        "width": "10px",
						"class": "text-center"
                    },	
					{ 
                        "data": "id_user",
                       "width": "10px",
						"class": "text-center"
                    },	
					{ 
                        "data": "jenis_komplain",
                        "width": "10px",
						"class": "text-center"
                    },
                    { 
                        "data": "isi_komplain",
                        "width": "10px",
						"class": "text-center"
                    },
                    {
                        "data": "jam_komplain",
                        "width": "10px",
                        "class": "text-center"
                    },
                    { 
                        "data": "tanggal_komplain",
						"width": "10px",
                        "class": "text-center"
                    },
                    { 
                        "data": "kd_ruangan",
                        "width": "10px",
						"class": "text-center"
                    },
					{ 
                        "data": "foto_komplain",
                        "class": "text-center",
						"class": "text-center"
                    },
					{ 
                        "data": "status_komplain", 
                       "width": "10px",
                        "class": "text-center"
                    },
					{ 
                        "data": "aksi",
                        "width": "150px",
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