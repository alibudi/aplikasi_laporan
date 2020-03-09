<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('keuanganModel');
        if(!$this->ion_auth->in_group(2)){
			redirect('auth','refresh');
		}
    }
	
	public function index()
	{
     
		$data['main']	=	'user/list';
		$this->load->view('template/template',$data);
	}

	public function keuangan()
	{
		$data['keuangan']	= $this->keuanganModel->getData();
		$data['main']	= 'user/kelola/list';
		$this->load->view('template/template',$data);
	}


  public function export()
  {
  		$data['keuangan']	= $this->keuanganModel->getData();
  		$data['title']	= 'keuangan';
	
		$this->load->view('admin/laporan/keuangan',$data);
  }


}
