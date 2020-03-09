<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('pemesananModel');
        if(!$this->ion_auth->is_admin()){
			redirect('auth','refresh');
		}
    }
	public function index()
	{
		$data['pemesanan']	= $this->pemesananModel->getData();
		$data['title']	= 'Lapor IMB';
		$data['main']	= 'admin/pemesanan/list';
		$this->load->view('template/template',$data);
	}

	
	public function addPemesanan()
	{
		// if(isset($_POST['Submit']))
		// {
			$this->form_validation->set_rules('nama', 'Username', 'trim|required|min_length[2]');
			if ($this->form_validation->run() == TRUE) {
				$nama = $this->input->post('nama');
				$keterangan = $this->input->post('keterangan');
				$jumlah = $this->input->post('jumlah');
				$harga = $this->input->post('harga');
				$data = array(
					'nama'	=> $nama,
					'keterangan'	=> $keterangan,
					'jumlah'	=> $jumlah,
					'harga'	=> $harga,
					'total'	=> $harga * $jumlah
										);


				$sql = $this->pemesananModel->addData($data);
				if($sql){
					$this->session->set_flashdata('info', 'Berhasil Tambah Data!');
					redirect(base_url("pemesanan"));
				} else{
					$this->session->set_flashdata('info', 'Gagal Tambah Data!');
					redirect(base_url("pemesanan"));
				}
			} else {
				$data['title']	= 'Lapor IMB';
				$data['main']			= 'admin/pemesanan/add';
				$this->load->view('template/template', $data);
			}

		// } else{
		// 	$data['title'] = 'Lapor IMB';
		// 	$data['main']			= 'admin/pemesanan/add';
		// 	$this->load->view('template/template', $data);
		// }
	}
}
