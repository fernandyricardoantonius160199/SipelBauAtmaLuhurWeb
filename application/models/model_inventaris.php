<?php
 
	class Model_inventaris extends CI_Model
	{
		
		public $table = "tbl_inventaris";

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'kd_inventaris'            => $this->input->post('kd_inventaris', TRUE),
				'nama_barang'          => $this->input->post('nama_barang', TRUE),
				'merek_barang'          => $this->input->post('merek_barang', TRUE),
				'tanggal_beli'          => $this->input->post('tanggal_beli', TRUE),
				'jumlah'          => $this->input->post('jumlah', TRUE),
				'kondisi'          => $this->input->post('kondisi', TRUE),
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
				'tanggal_beli'          => $this->input->post('tanggal_beli', TRUE),
				'jumlah'          => $this->input->post('jumlah', TRUE),
				'kondisi'          => $this->input->post('kondisi', TRUE),
				'kd_ruangan'		  => $this->input->post('ruangan', TRUE)
			);
			$kode_inventaris	= $this->input->post('kd_inventaris');
			$this->db->where('kd_inventaris', $kode_inventaris);
			$this->db->update($this->table, $data);
		}

	}

?>