<?php

	class Tampilan_utama extends CI_Controller
	{
		
		function index()
		{
			$qadmin = 'SELECT COUNT(*) AS hasil FROM tbl_admin';
			$data['admin'] = $this->db->query($qadmin)->row_array();

			$quser = 'SELECT COUNT(*) AS hasil FROM tbl_user';
			$data['user'] = $this->db->query($quser)->row_array();

			$qruangan = 'SELECT COUNT(*) AS hasil FROM tbl_ruangan';
			$data['ruangan'] = $this->db->query($qruangan)->row_array();

			$qbarang = 'SELECT COUNT(*) AS hasil FROM tbl_barang';
			$data['barang'] = $this->db->query($qbarang)->row_array();
			
			$qkendaraan = 'SELECT COUNT(*) AS hasil FROM tbl_kendaraan';
			$data['kendaraan'] = $this->db->query($qkendaraan)->row_array();
			
			$qkomplain = 'SELECT COUNT(*) AS hasil FROM tbl_komplain';
			$data['komplain'] = $this->db->query($qkomplain)->row_array();

			$this->template->load('template', 'dashboard', $data);
		}

	}

?>