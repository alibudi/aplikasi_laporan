<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Laporan extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->library('excel');
		$this->load->model('keuanganModel');
        if(!$this->ion_auth->is_admin()){
			redirect('auth','refresh');
		}
    }
	
	public function index()
	{
		$data['main']	=	'admin/laporan/keuangan';
		$this->load->view('template/template',$data);
	}

  public function export() {
    // create file name
        $fileName = 'data-'.time().'.xlsx';  
    // load excel library
        $this->load->library('excel');
        $empInfo = $this->keuanganModel->getData();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Pengguna');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Nilai');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Keterangan');
        // $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'DOB');
        // $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Contact_No');       
        // set Row
        $rowCount = 2;
        foreach ($empInfo as $d) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $d['nama']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $d['nilai']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $d['keterangan']);
            // $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $element['dob']);
            // $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $element['contact_no']);
            $rowCount++;
        }
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');
    // download file
        header("Content-Type: application/vnd.ms-excel");
        redirect(HTTP_UPLOAD_IMPORT_PATH.$fileName);        
    }
}
