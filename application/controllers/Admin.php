<?php

	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_admin');
		}

		function data()
		{

			// nama_admin table
			$table      = 'tbl_admin';
			// nama_admin PK
			$primaryKey = 'id_admin';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama_admin datatable di view)
				array('db' => 'id_admin', 'dt' => 'id_admin'),
				array('db' => 'nama_admin', 'dt' => 'nama_admin'),
				array('db' => 'email_admin', 'dt' => 'email_admin'),
				array('db' => 'no_hp_admin', 'dt' => 'no_hp_admin'),
				array('db' => 'user_admin', 'dt' => 'user_admin'),
		        array('db' => 'pass_admin', 'dt' => 'pass_admin'),
		        //untuk menampilkan aksi(edit/delete dengan parameter kode admin)
		        array(
		              'db' => 'id_admin',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('admin/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('admin/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
			$this->template->load('template', 'admin/view');
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_admin->save();
				redirect('admin');
			} else {
				$this->template->load('template', 'admin/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_admin->update();
				redirect('admin');
			} else {
				$id_admin 		= $this->uri->segment(3);
				$data['admin'] 	= $this->db->get_where('tbl_admin', array('id_admin' => $id_admin))->row_array();
				$this->template->load('template', 'admin/edit', $data);
			}
		}

		function delete()
		{
			$kode_admin = $this->uri->segment(3);
			if (!empty($kode_admin)) {
				$this->db->where('id_admin', $kode_admin);
				$this->db->delete('tbl_admin');
			}
			redirect('admin');
		}

	}

?>