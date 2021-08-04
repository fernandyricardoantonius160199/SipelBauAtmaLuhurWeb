<?php

	class Komplain extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_komplain');
		}

		function data()
		{

			// nama table
			$table      = 'tbl_komplain';
			// nama PK
			$primaryKey = 'kd_komplain';
			// list field yang mau ditampilkan
			$columns    = array(
				//tabel db(kolom di database) => dt(nama datatable di view)
				array('db' => 'foto_komplain', 
					  'dt' => 'foto_komplain',
					  'formatter' => function($d) {
					  		return "<img width='100px' src='".base_url()."/uploads/".$d."'>";
					  }
				),
				array('db' => 'kd_komplain', 'dt' => 'kd_komplain'),
				array('db' => 'id_user', 'dt' => 'id_user'),
		        array('db' => 'jenis_komplain', 'dt' => 'jenis_komplain'),
		        array('db' => 'isi_komplain', 'dt' => 'isi_komplain'),
				array('db' => 'jam_komplain', 'dt' => 'jam_komplain'),
				array('db' => 'kd_ruangan', 'dt' => 'kd_ruangan'),
				array('db' => 'status_komplain', 'dt' => 'status_komplain'),
		        array('db' => 'tanggal_komplain', 'dt' => 'tanggal_komplain'),
		        //untuk menampilkan aksi(edit/delete dengan parameter kd_komplain komplain)
		        array(
		              'db' => 'kd_komplain',
		              'dt' => 'aksi',
		              'formatter' => function($d) {
		               		return anchor('komplain/edit/'.$d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-primary" data-placement="top" title="Edit"').' 
		               		'.anchor('komplain/delete/'.$d, '<i class="fa fa-times fa fa-white"></i>', 'class="btn btn-xs btn-danger" data-placement="top" title="Delete"');
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
			$this->template->load('template', 'komplain/view');
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_komplain();
				$this->model_komplain->save($uploadFoto);
				redirect('komplain');
			} else {
				$this->template->load('template', 'komplain/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_komplain();
				$this->model_komplain->update($uploadFoto);
				redirect('komplain');
			} else {
				$kd_komplain           = $this->uri->segment(3);
				$data['komplain'] = $this->db->get_where('tbl_komplain', array('kd_komplain' => $kd_komplain))->row_array();
				$this->template->load('template', 'komplain/edit', $data);
			}
		}

		function delete()
		{
			$kd_komplain = $this->uri->segment(3);
			if (!empty($kd_komplain)) {
				$this->db->where('kd_komplain', $kd_komplain);
				$this->db->delete('tbl_komplain');
			} 
			redirect('komplain');
		}

		function upload_foto_komplain()
		{
			//validasi foto yang di upload
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 50000;
            $this->load->library('upload', $config);

            //proses upload
            $this->upload->do_upload('userfile');
            $upload = $this->upload->data();
            return $upload['file_name'];
		}
		
		function export_excel()
		{
			$this->load->library('CPHP_excel');
	        $objPHPExcel = new PHPExcel();
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', "Bagian Administrasi Umum (BAU)");
			$objPHPExcel->getActiveSheet()->mergeCells('A1:I1');
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', "Institut Sains Dan Bisnis Atma Luhur");
			$objPHPExcel->getActiveSheet()->mergeCells('A2:I2');
			$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(TRUE);
			$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setSize(15);
			$objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A3', "Data Komplain Kerusakan Sarana Dan Prasarana Mahasiswa");
			$objPHPExcel->getActiveSheet()->mergeCells('A3:I3');
			$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(TRUE);
			$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setSize(15);
			$objPHPExcel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	        $objPHPExcel->getActiveSheet()->setCellValue('A5', 'Kode Komplain');
	        $objPHPExcel->getActiveSheet()->setCellValue('B5', 'Id User');
			$objPHPExcel->getActiveSheet()->setCellValue('C5', 'Jenis Komplain');
			$objPHPExcel->getActiveSheet()->setCellValue('D5', 'Isi Komplain');
			$objPHPExcel->getActiveSheet()->setCellValue('E5', 'Jam Komplain');
			$objPHPExcel->getActiveSheet()->setCellValue('F5', 'Tanggal Komplain');
			$objPHPExcel->getActiveSheet()->setCellValue('G5', 'Tempat Komplain');
			$objPHPExcel->getActiveSheet()->setCellValue('H5', 'Foto Komplain');
			$objPHPExcel->getActiveSheet()->setCellValue('I5', 'Status Komplain');
			
	        $komplain = $this->db->get('tbl_komplain');
	        $no=6;
	        foreach ($komplain->result() as $row){
	            $objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $row->kd_komplain);
	            $objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $row->id_user);
				$objPHPExcel->getActiveSheet()->setCellValue('C'.$no, $row->jenis_komplain);
				$objPHPExcel->getActiveSheet()->setCellValue('D'.$no, $row->isi_komplain);
				$objPHPExcel->getActiveSheet()->setCellValue('E'.$no, $row->jam_komplain);
				$objPHPExcel->getActiveSheet()->setCellValue('F'.$no, $row->tanggal_komplain);
				$objPHPExcel->getActiveSheet()->setCellValue('G'.$no, $row->kd_ruangan);
				$objPHPExcel->getActiveSheet()->setCellValue('H'.$no, $row->foto_komplain);
				$objPHPExcel->getActiveSheet()->setCellValue('I'.$no, $row->status_komplain);
	            $no++;
	        }
			
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(15); 
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10); 
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15); 
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(70); 
			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15); 
			$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
			$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(60);
	        
	        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
	        $objWriter->save("data-komplain-kerusakan-sarana-prasarana-mahasiswa.pdf.xlsx");
	        $this->load->helper('download');
	        force_download('data-komplain-kerusakan-sarana-prasarana-mahasiswa.pdf.xlsx', NULL);
		}
		
    
    function export_pdf(){

		 $this->load->library('pdf');
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
		$pdf->Image('uploads/isb.png',55,10,20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',10);
        // mencetak string
		$pdf->Cell(275,5,'Bagian Administrasi Umum (BAU)',0,1,'C');
		$pdf->SetFont('Arial','B',10);
        $pdf->Cell(275,5,'Institut Sains Dan Bisnis Atma Luhur',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(275,5,'Data Komplain Kerusakan Sarana Dan Prasarana Mahasiswa',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
		$pdf->SetLineWidth(1);
		$pdf->Line(10,31,286,31);
		$pdf->SetLineWidth(0);
		$pdf->Line(10,31,286,31);
		$pdf->Ln(6);
		
        $pdf->SetFont('Arial','B',5);
        $pdf->Cell(15,5,'Kode Komplain',1,0);
		$pdf->Cell(20,5,'Id User',1,0);
		$pdf->Cell(20,5,'Jenis Komplain',1,0);
        $pdf->Cell(90,5,'Isi Komplain',1,0);
		$pdf->Cell(15,5,'Jam Komplain',1,0);
        $pdf->Cell(20,5,'Tanggal Komplain',1,0);
		$pdf->Cell(15,5,'Kode Ruangan',1,0);
		$pdf->Cell(28,5,'Foto Komplain',1,0);
		$pdf->Cell(50,5,'Status Komplain',1,1);
        $pdf->SetFont('Arial','',5);
		

        $komplain = $this->db->get('tbl_komplain')->result();
        foreach ($komplain as $row){
			
            $pdf->Cell(15,5,$row->kd_komplain,1,0);
			$pdf->Cell(20,5,$row->id_user,1,0);
			$pdf->Cell(20,5,$row->jenis_komplain,1,0);
            $pdf->Cell(90,5,$row->isi_komplain,1,0);
            $pdf->Cell(15,5,$row->jam_komplain,1,0);
            $pdf->Cell(20,5,$row->tanggal_komplain,1,0);
			$pdf->Cell(15,5,$row->kd_ruangan,1,0);
			$pdf->Cell(28,5,$row->foto_komplain,1,0);
			$pdf->Cell(50,5,$row->status_komplain,1,1);
        }
		
        $pdf->Output("data-komplain-kerusakan-sarana-prasarana-mahasiswa.pdf","I");
    }
}
?>