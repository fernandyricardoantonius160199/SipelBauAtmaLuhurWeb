<?php

	class Model_user extends CI_Model
	{
		public $table ="tbl_user";

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'id_user'		=> $this->input->post('id_user', TRUE),
				'nama_user'          => $this->input->post('nama_user', TRUE),
				'email_user'          => $this->input->post('email_user', TRUE),
				'no_hp_user'          => $this->input->post('no_hp_user', TRUE),
				'user_user'            => $this->input->post('user_user', TRUE),
				'pass_user'          => $this->input->post('pass_user', TRUE)
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$data = array(
				'nama_user'          => $this->input->post('nama_user', TRUE),
				'email_user'          => $this->input->post('email_user', TRUE),
				'no_hp_user'          => $this->input->post('no_hp_user', TRUE),
				'user_user'          => $this->input->post('user_user', TRUE),
				'pass_user'          => $this->input->post('pass_user', TRUE)

			);

			$id_user	= $this->input->post('id_user');
			$this->db->where('id_user', $id_user);
			$this->db->update($this->table, $data);
		}
		
	}

?>
