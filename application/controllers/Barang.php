<?php

	class Barang extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_barang');
		}

		function data()
		{
			// $sql = "SELECT tk.*, ttk.nama_ruangan, tj.nama_ruangan 
			// FROM tbl_barang AS tk, tbl_tingkatan_barang AS ttk, tbl_ruangan AS tj 
			// WHERE tk.kd_tingkatan = ttk.kd_tingkatan AND tk.spesifikasi_barang = tj.spesifikasi_barang"
			// Biasanya menggunakan query untuk mengambil nama dari tabel yang berbeda tapi saling berelasi,
			// karena terlalu panjang, harus menggunakan foreach lagi dan menurut saya sepertinya 
			//tidak bisa melakukan foreach di datatable, maka saya menggunaka create view kita bisa membuat query tersebut menjadi sebuah table

			// nama table
			$table      = 'tbl_barang';
			// nama PK
			$primaryKey = 'kd_barang';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama datatable di view)
				array('db' => 'kd_barang', 'dt' => 'kd_barang'),
		        array('db' => 'nama_barang', 'dt' => 'nama_barang'),
				array('db' => 'merek_barang', 'dt' => 'merek_barang'),
				array('db' => 'spesifikasi_barang', 'dt' => 'spesifikasi_barang'),
				array('db' => 'tahun_barang', 'dt' => 'tahun_barang'),
				array('db' => 'kd_ruangan', 'dt' => 'kd_ruangan'),
				array('db' => 'jumlah_barang', 'dt' => 'jumlah_barang'),
				array('db' => 'kondisi_barang', 'dt' => 'kondisi_barang'),

		        //untuk menampilkan aksi(edit/delete dengan parameter kode barang)
		        array(
		              'db' => 'kd_barang',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('barang/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('barang/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
			$this->template->load('template', 'barang/view');
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_barang->save();
				redirect('barang');
			} else {
				$this->template->load('template', 'barang/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_barang->update();
				redirect('barang');
			} else {
				$kd_barang 		= $this->uri->segment(3);
				$data['barang']	= $this->db->get_where('tbl_barang', array('kd_barang' => $kd_barang))->row_array();
				$this->template->load('template', 'barang/edit', $data);
			}
		}

		function delete()
		{
			$kode_barang = $this->uri->segment(3);
			if (!empty($kode_barang)) {
				$this->db->where('kd_barang', $kode_barang);
				$this->db->delete('tbl_barang');
			}
			redirect('barang');
		}

	}

?>