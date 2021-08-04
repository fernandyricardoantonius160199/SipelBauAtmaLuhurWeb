<?php
 
	class Model_komplain extends CI_Model
	{
		
		public $table ="tbl_komplain";

		function save($foto_komplain)
		{
			$data = array(
				//tabel di database => name di form
				'kd_komplain'            				=> $this->input->post('kd_komplain', TRUE),
				'jenis_komplain'          	 			=> $this->input->post('jenis_komplain', TRUE),
				'isi_komplain'          	  			=> $this->input->post('isi_komplain', TRUE),
				'jam_komplain'          	  			=> $this->input->post('jam_komplain', TRUE),
				'tanggal_komplain'          	  		=> $this->input->post('tanggal_komplain', TRUE),
				'status_komplain'          	  			=> $this->input->post('status_komplain', TRUE),
				'id_user'		  						=> $this->input->post('user', TRUE),
				'kd_ruangan'		  					=> $this->input->post('ruangan', TRUE),
				'foto_komplain'					  	=> $foto_komplain,
			);
			$this->db->insert($this->table, $data);
		}

		function update($foto_komplain)
		{
			if (empty($foto_komplain)) {
				$data = array(
					//tabel di database => name di form
				'jenis_komplain'          	  		=> $this->input->post('jenis_komplain', TRUE),
				'isi_komplain'          	  		=> $this->input->post('isi_komplain', TRUE),
				'jam_komplain'          	  		=> $this->input->post('jam_komplain', TRUE),
				'tanggal_komplain'          	  	=> $this->input->post('tanggal_komplain', TRUE),
				'status_komplain'          	  		=> $this->input->post('status_komplain', TRUE),
				'id_user'		  					=> $this->input->post('user', TRUE),
				'kd_ruangan'		  				=> $this->input->post('ruangan', TRUE)
				);
			} else {
				$data = array(
					//tabel di database => name di form
				'jenis_komplain'          	  		=> $this->input->post('jenis_komplain', TRUE),
				'isi_komplain'          	  		=> $this->input->post('isi_komplain', TRUE),
				'jam_komplain'          	  		=> $this->input->post('jam_komplain', TRUE),
				'tanggal_komplain'          	  	=> $this->input->post('tanggal_komplain', TRUE),
				'id_user'		  					=> $this->input->post('user', TRUE),
				'kd_ruangan'		  				=> $this->input->post('ruangan', TRUE),
				'status_komplain'          	  		=> $this->input->post('status_komplain', TRUE),
				'foto_komplain'						=> $foto_komplain,
				);
			}		
			$kd_komplain 	= $this->input->post('kd_komplain', TRUE);
			$this->db->where('kd_komplain', $kd_komplain);
			$this->db->update($this->table, $data);
		}
		
			function getData()
	{
		$data_komplain = $this->db->get('tbl_komplain');
		return $data_komplain->result();
	}
}

?>