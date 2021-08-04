<?php

	class Kendaraan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_kendaraan');
		}

		function data()
		{
			// $sql = "SELECT tk.*, ttk.nama_ruangan, tj.nama_ruangan 
			// FROM tbl_kendaraan AS tk, tbl_tingkatan_kendaraan AS ttk, tbl_ruangan AS tj 
			// WHERE tk.kd_tingkatan = ttk.kd_tingkatan AND tk.jenis_kendaraan = tj.jenis_kendaraan"
			// Biasanya menggunakan query untuk mengambil nama dari tabel yang berbeda tapi saling berelasi,
			// karena terlalu panjang, harus menggunakan foreach lagi dan menurut saya sepertinya 
			//tidak bisa melakukan foreach di datatable, maka saya menggunaka create view kita bisa membuat query tersebut menjadi sebuah table

			// nama table
			$table      = 'tbl_kendaraan';
			// nama PK
			$primaryKey = 'kd_kendaraan';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama datatable di view)
				array('db' => 'kd_kendaraan', 'dt' => 'kd_kendaraan'),
		        array('db' => 'nama_kendaraan', 'dt' => 'nama_kendaraan'),
				array('db' => 'merek_kendaraan', 'dt' => 'merek_kendaraan'),
				array('db' => 'jenis_kendaraan', 'dt' => 'jenis_kendaraan'),
				array('db' => 'tahun_kendaraan', 'dt' => 'tahun_kendaraan'),
				array('db' => 'jumlah_kendaraan', 'dt' => 'jumlah_kendaraan'),
				array('db' => 'kondisi_kendaraan', 'dt' => 'kondisi_kendaraan'),

		        //untuk menampilkan aksi(edit/delete dengan parameter kode kendaraan)
		        array(
		              'db' => 'kd_kendaraan',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('kendaraan/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('kendaraan/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
			$this->template->load('template', 'kendaraan/view');
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_kendaraan->save();
				redirect('kendaraan');
			} else {
				$this->template->load('template', 'kendaraan/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_kendaraan->update();
				redirect('kendaraan');
			} else {
				$kd_kendaraan 		= $this->uri->segment(3);
				$data['kendaraan']	= $this->db->get_where('tbl_kendaraan', array('kd_kendaraan' => $kd_kendaraan))->row_array();
				$this->template->load('template', 'kendaraan/edit', $data);
			}
		}

		function delete()
		{
			$kode_kendaraan = $this->uri->segment(3);
			if (!empty($kode_kendaraan)) {
				$this->db->where('kd_kendaraan', $kode_kendaraan);
				$this->db->delete('tbl_kendaraan');
			}
			redirect('kendaraan');
		}

	}

?>