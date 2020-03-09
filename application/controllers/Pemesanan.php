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
		$data['sub']		= $this->pemesananModel->dataTotal();
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
				$nama2 = $this->input->post('nama2');
				$jumlah2 = $this->input->post('jumlah2');
				$harga2 = $this->input->post('harga2');
				$nama3 = $this->input->post('nama3');
				$jumlah3 = $this->input->post('jumlah3');
				$harga3 = $this->input->post('harga3');
				date_default_timezone_set('Asia/Jakarta');
			$tgl = date('Y-m-d H:i:s');
				$data = array(
					'nomor'	=> $this->input->post('nomor'),
					'kepada'	=> $this->input->post('kepada'),
					'alamat'	=> $this->input->post('alamat'),
					'nama'	=> $nama,
					'tgl'	=> $tgl,
					'keterangan'	=> $keterangan,
					'jumlah'	=> $jumlah,
					'harga'	=> $harga,
					'nama2'	=> $nama2,
					'jumlah2'	=> $jumlah2,
					'harga2'	=> $harga2,
					'nama3'	=> $nama3,
					'jumlah3'	=> $jumlah3,
					'harga3'	=> $harga3,
					'total'	=> $harga * $jumlah,
					'total2'	=> $harga2 * $jumlah2,
					'total3'	=> $harga3 * $jumlah3,
					'subtotal'	=> $total + $total2 + $total3
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
	}


	  public function lihatPesanan($id=null)
    {
       
      	if ($id==null) {
        $this->session->set_flashdata('info','Id boleh kosong!');
        redirect('pesanan','refresh');
      } else {
      	$data['title']	= 'Lapor IMB';
      	 $data['pesanan'] = $this->pemesananModel->getDataById($id);
      	$data['main'] = 'admin/pemesanan/lihat';
      	$this->load->view('template/template',$data);
      }

  //     	if($this->input->post('submit')==true){
  //       $this->form_validation->set_rules('nama_kategori', 'Nama Kategori','trim|required');

  //   	if ($this->form_validation->run() == TRUE) {
  //    		$data = array(
  //       	'nama_kategori' => $this->input->post('nama_kategori')
  //       );

  //   	$sql = $this->modelKategori->updateData($id,$data);
  //   	if ($sql) {
  //     	$this->session->set_flashdata('info', 'Edit Data sukses');
  //     	redirect('admin/kategori','refresh');
  //   	}else{
  //     	$this->session->set_flashdata('info', 'Edit Data gagal');
  //     	redirect('admin/editData'.$id,'refresh');
  //   	} 
    
  //   }

  // }
}
}
