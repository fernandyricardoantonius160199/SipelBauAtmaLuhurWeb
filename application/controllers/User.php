<?php

	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_user');
		}

		function data()
		{

			// nama_user table
			$table      = 'tbl_user';
			// nama_user PK
			$primaryKey = 'id_user';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama_user datatable di view)
				array('db' => 'id_user', 'dt' => 'id_user'),
				array('db' => 'nama_user', 'dt' => 'nama_user'),
				array('db' => 'email_user', 'dt' => 'email_user'),
				array('db' => 'no_hp_user', 'dt' => 'no_hp_user'),
				array('db' => 'user_user', 'dt' => 'user_user'),
		        array('db' => 'pass_user', 'dt' => 'pass_user'),
		        //untuk menampilkan aksi(edit/delete dengan parameter kode user)
		        array(
		              'db' => 'id_user',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('user/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('user/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
			$this->template->load('template', 'user/view');
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_user->save();
				redirect('user');
			} else {
				$this->template->load('template', 'user/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_user->update();
				redirect('user');
			} else {
				$id_user 		= $this->uri->segment(3);
				$data['user'] 	= $this->db->get_where('tbl_user', array('id_user' => $id_user))->row_array();
				$this->template->load('template', 'user/edit', $data);
			}
		}

		function delete()
		{
			$kode_user = $this->uri->segment(3);
			if (!empty($kode_user)) {
				$this->db->where('id_user', $kode_user);
				$this->db->delete('tbl_user');
			}
			redirect('user');
		}

	}

?>