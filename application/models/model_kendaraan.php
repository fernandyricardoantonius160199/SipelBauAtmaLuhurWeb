<?php
 
	class Model_kendaraan extends CI_Model
	{
		
		public $table = "tbl_kendaraan";

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'kd_kendaraan'            => $this->input->post('kd_kendaraan', TRUE),
				'nama_kendaraan'          => $this->input->post('nama_kendaraan', TRUE),
				'merek_kendaraan'          => $this->input->post('merek_kendaraan', TRUE),
				'jenis_kendaraan'          => $this->input->post('jenis_kendaraan', TRUE),
				'tahun_kendaraan'          => $this->input->post('tahun_kendaraan', TRUE),
				'jumlah_kendaraan'          => $this->input->post('jumlah_kendaraan', TRUE),
				'kondisi_kendaraan'		  => $this->input->post('kondisi_kendaraan', TRUE)
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$data = array(
				//tabel di database => name di form
				'kd_kendaraan'            => $this->input->post('kd_kendaraan', TRUE),
				'nama_kendaraan'          => $this->input->post('nama_kendaraan', TRUE),
				'merek_kendaraan'          => $this->input->post('merek_kendaraan', TRUE),
				'jenis_kendaraan'          => $this->input->post('jenis_kendaraan', TRUE),
				'tahun_kendaraan'          => $this->input->post('tahun_kendaraan', TRUE),
				'jumlah_kendaraan'          => $this->input->post('jumlah_kendaraan', TRUE),
				'kondisi_kendaraan'		  => $this->input->post('kondisi_kendaraan', TRUE)
			);
			$kode_barang	= $this->input->post('kd_kendaraan');
			$this->db->where('kd_kendaraan', $kode_barang);
			$this->db->update($this->table, $data);
		}

	}

?>