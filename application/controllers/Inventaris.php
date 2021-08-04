<?php

	class Inventaris extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_inventaris');
		}

		function data()
		{
			// $sql = "SELECT tk.*, ttk.nama_ruangan, tj.nama_ruangan 
			// FROM tbl_inventaris AS tk, tbl_tingkatan_inventaris AS ttk, tbl_ruangan AS tj 
			// WHERE tk.kd_tingkatan = ttk.kd_tingkatan AND tk.kd_ruangan = tj.kd_ruangan"
			// Biasanya menggunakan query untuk mengambil nama dari tabel yang berbeda tapi saling berelasi,
			// karena terlalu panjang, harus menggunakan foreach lagi dan menurut saya sepertinya 
			//tidak bisa melakukan foreach di datatable, maka saya menggunaka create view kita bisa membuat query tersebut menjadi sebuah table

			// nama table
			$table      = 'tbl_inventaris';
			// nama PK
			$primaryKey = 'kd_inventaris';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama datatable di view)
				array('db' => 'kd_inventaris', 'dt' => 'kd_inventaris'),
		        array('db' => 'nama_barang', 'dt' => 'nama_barang'),
				array('db' => 'merek_barang', 'dt' => 'merek_barang'),
				array('db' => 'kd_ruangan', 'dt' => 'kd_ruangan'),
				array('db' => 'tanggal_beli', 'dt' => 'tanggal_beli'),
				array('db' => 'jumlah', 'dt' => 'jumlah'),
				array('db' => 'kondisi', 'dt' => 'kondisi'),

		        //untuk menampilkan aksi(edit/delete dengan parameter kode inventaris)
		        array(
		              'db' => 'kd_inventaris',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('inventaris/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('inventaris/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
		            }
		        )
		    );

			$sql_details = array(
				'user' => $this->db->username,
				'pass' => $this->db->password,
				'db'   => $this->db->database,
				'host' => $this->db->hostname
		    );

		    echo json_encode(
		     	SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
		     );

		}

		function index()
		{
			$this->template->load('template', 'inventaris/view');
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_inventaris->save();
				redirect('inventaris');
			} else {
				$this->template->load('template', 'inventaris/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_inventaris->update();
				redirect('inventaris');
			} else {
				$kd_inventaris 		= $this->uri->segment(3);
				$data['inventaris']	= $this->db->get_where('tbl_inventaris', array('kd_inventaris' => $kd_inventaris))->row_array();
				$this->template->load('template', 'inventaris/edit', $data);
			}
		}

		function delete()
		{
			$kode_inventaris = $this->uri->segment(3);
			if (!empty($kode_inventaris)) {
				$this->db->where('kd_inventaris', $kode_inventaris);
				$this->db->delete('tbl_inventaris');
			}
			redirect('inventaris');
		}

	}

?>