<?php
 
	class Model_barang extends CI_Model
	{
		
		public $table = "tbl_barang";

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'kd_barang'            => $this->input->post('kd_barang', TRUE),
				'nama_barang'          => $this->input->post('nama_barang', TRUE),
				'merek_barang'          => $this->input->post('merek_barang', TRUE),
				'tahun_barang'          => $this->input->post('tahun_barang', TRUE),
				'jumlah_barang'          => $this->input->post('jumlah_barang', TRUE),
				'kondisi_barang'          => $this->input->post('kondisi_barang', TRUE),
				'spesifikasi_barang'		  => $this->input->post('spesifikasi_barang', TRUE),
				'kd_ruangan'		  => $this->input->post('ruangan', TRUE)
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$data = array(
				//tabel di database => name di form
				'nama_barang'          => $this->input->post('nama_barang', TRUE),
				'merek_barang'          => $this->input->post('merek_barang', TRUE),
				'tahun_barang'          => $this->input->post('tahun_barang', TRUE),
				'jumlah_barang'          => $this->input->post('jumlah_barang', TRUE),
				'kondisi_barang'          => $this->input->post('kondisi_barang', TRUE),
				'spesifikasi_barang'		  => $this->input->post('spesifikasi_barang', TRUE),
				'kd_ruangan'		  				=> $this->input->post('ruangan', TRUE),
			);
			$kode_barang	= $this->input->post('kd_barang');
			$this->db->where('kd_barang', $kode_barang);
			$this->db->update($this->table, $data);
		}

	}

?>