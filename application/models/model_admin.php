<?php
 
	class Model_admin extends CI_Model
	{

		public $table = "tbl_admin";
		
		// mengambil data $user_admin & $pass_admin dari hasil parsing controller Auth function check_login() dan mencocokanya dengan data yang ada di database
		function login($user_admin, $pass_admin)
		{
			$this->db->where('user_admin', $user_admin);
			$this->db->where('pass_admin', $pass_admin);
			$admin = $this->db->get('tbl_admin')->row_array();
			return $admin;
		}

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'id_admin'            => $this->input->post('id_admin', TRUE),
				'nama_admin'            => $this->input->post('nama_admin', TRUE),
				'email_admin'            => $this->input->post('email_admin', TRUE),
				'no_hp_admin'            => $this->input->post('no_hp_admin', TRUE),
				'user_admin'          	  => $this->input->post('user_admin', TRUE),
				'pass_admin'          	  => $this->input->post('pass_admin', TRUE)
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$data = array(
					//tabel di database => name di form
					
				'id_admin'            => $this->input->post('id_admin', TRUE),
				'nama_admin'            => $this->input->post('nama_admin', TRUE),
				'email_admin'            => $this->input->post('email_admin', TRUE),
				'no_hp_admin'            => $this->input->post('no_hp_admin', TRUE),
				'user_admin'          	  => $this->input->post('user_admin', TRUE),
				'pass_admin'          	  => $this->input->post('pass_admin', TRUE)
				);
				
			$id_admin 	= $this->input->post('id_admin', TRUE);
			$this->db->where('id_admin', $id_admin);
			$this->db->update($this->table, $data);
		}

	}

?>