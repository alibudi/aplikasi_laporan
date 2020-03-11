<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('keuanganModel');
		$this->load->model('usersModel');
        if(!$this->ion_auth->is_admin()){
			redirect('auth','refresh');
		}
    }
	
	public function index()
	{	$data['title']	= 'Lapor IMB';
		$data['main']	=	'admin/list';
		$this->load->view('template/template',$data);
	}

	public function harian()
	{
		$data['title']	= 'Lapor IMB';
		$data['keuangan']	= $this->keuanganModel->getData();
		$data['uang_masuk']	= $this->keuanganModel->get_nominal()->row_array();
		$data['uang_keluar']	= $this->keuanganModel->get_nominal('pengeluaran')->row_array();
		$data['main']	= 'admin/kelola/list';
		$this->load->view('template/template',$data);
	}

 
  public function addKelola()
  {
    $config = [
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png|jpeg',
      'max_size' => 19456, 
		
		  ];
	
			  $this->load->library('upload', $config);
			  if (!$this->upload->do_upload('nota')) 
			  {
			  $data['error'] = $this->upload->display_errors();
		
            $data['title']	= 'Lapor IMB';
       		 $data['main'] = 'admin/kelola/add';
        	$this->load->view('template/template', $data);
			  } else {
              $file = $this->upload->data();
              $config['image_library']='gd2';
              $config['source_image']='./uploads/'.$file['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['quality']= '50%';
              $config['width']= 600;
              $config['height']= 400;
              $config['new_image']= './uploads/'.$file['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();
          	$nilai = $this->input->post('nilai');
		 	$data = array(
                'nama' 			    => $this->input->post('nama'),
                'nilai' 	        => $nilai,
                'type'				=> $this->input->post('type'),
                'keterangan'    	=> $this->input->post('keterangan'),
                'tgl' 		=> date('Y-m-d H:i:s'),
                // 'total' 			=> $this->input->post('total'),
			    'nota'    =>$file['file_name'],     
					  );
					  $this->keuanganModel->addData($data); //memasukan data ke database
					  // $this->keuanganModel->transfer($query);
					  $this->session->set_flashdata('info', 'Berhasil Simpan Data!');
            redirect('admin/harian');
            // print_r ($data);
            // echo $data;
			  }
  }
    public function editKelola($id=null)
  {
    if($id==null){
      $this->session->set_flashdata('info', 'Gagal Edit Data!');
      redirect('admin/harian','refresh');
  } 
      $config = [
      'upload_path' => './uploads',
      'allowed_types' => 'gif|jpg|png|jpeg',
      'max_size' => 2048, 
      /*'max_width' => 1000,
      'max_height' => 768*/
      ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('nota')) //jika gagal upload
        {
        $data['error'] = $this->upload->display_errors(); //tampilkan error
        $data['nota']	= $this->keuanganModel->getDataById($id);
        $data['title']	= 'Lapor IMB';
        $data['main'] = 'admin/kelola/edit';
        $this->load->view('template/template', $data);
        } else {
            $file = $this->upload->data();
              $data = array(
                 'nama' 			    => $this->input->post('nama'),
                'nilai' 	        => $this->input->post('nilai'),
                'keterangan'    	=> $this->input->post('keterangan'),
                'tgl' 		=> date('Y-m-d H:i:s'),
				'nota'	    =>$file['file_name']   
            );
            $this->keuanganModel->updateData($id,$data); //memasukan data ke database
            $this->session->set_flashdata('info', 'Berhasil Update Data!');
            redirect('admin/harian');
        }
  }

	  public function lihatHarian($id=null)
    {
       
      	if ($id==null) {
        $this->session->set_flashdata('info','Id boleh kosong!');
        redirect('admin/harian','refresh');
      } else {
      	$data['title']	= 'Lapor IMB';
      	 $data['harian'] = $this->keuanganModel->getDataById($id);
      	$data['main'] = 'admin/kelola/lihat';
      	$this->load->view('template/template',$data);
      }

}

public function deleteHarian($id=null)
{
	if ($id==ull) {
		$this->session->set_flashdata('info', 'Gagal Hapus Data!');
		redirect('admin/harian', 'refresh');
	}
	$cek = $this->keuanganModel->deleteData($id);
	if ($cek) {
		$this->session->set_flashdata('info', 'Sukses Hapus Data');
		redirect('admin/harian' , 'refresh');
	} else {
		$this->session->set_flashdata('info', 'Gagal Hapus Data!');
		redirect('admin/harian', 'refresh');
	}
}
  public function export()
  {
  		$data['keuangan']	= $this->keuanganModel->getData();
  		$data['title']	= 'keuangan';
	
		$this->load->view('admin/laporan/keuangan',$data);
  }
public function deleteData($id=null)
	{
		if($id==null){
			$this->session->set_flashdata('info', 'Gagal Edit Data!');
			redirect('admin/keuangan','refresh');
		}

		$sql = $this->keuanganModel->deleteData($id);
		if($sql){
			$this->session->set_flashdata('info', 'Berhasil Hapus Data!');
			redirect('admin/keuangan','refresh');
		} else{
			$this->session->set_flashdata('info', 'Gagal Hapus Data!');
			redirect('admin/keuangan','refresh');
		}
	}
 public function profil(){
		$data['user'] = $this->ion_auth->user()->row();
		$id_user 	  = $data['user']->id;
		$data['title']	= 'Lapor IMB';
		$data['main'] = 'admin/profil';
		$this->load->view('template/template',$data);
	}

	public function changeProfil($id=null){
		if($id==null){
			$this->session->set_flashdata('info', 'Gagal Simpan Perubahan!');
			redirect('admin/profil','refresh');
		}
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == TRUE) {
			$username = strtolower($this->input->post('username'));
			$email 	= strtolower($this->input->post('email'));
			$firstname 	= ucwords(strtolower($this->input->post('firstname')));
		
			$data = array(
					'username'	=> $username,
					'email'		=> $email,
					'first_name' => $firstname,
				
				);

			$sql = $this->ion_auth->update($id,$data);
			if($sql){
				$this->session->set_flashdata('info', 'Sukses Simpan Perubahan!');
				redirect('admin/profil','refresh');
			} else{
				$this->session->set_flashdata('info', 'Gagal Simpan Perubahan!');
				redirect('admin/profil','refresh');
			}
		} else {
			$data['user'] = $this->ion_auth->user()->row();
			$id_user = $data['user']->id;
			$data['title']	= 'Lapor IMB';
			$data['main'] = 'admin/profil';
			$this->load->view('template/template',$data);
		}
	}

	public function changePassword($id=null){
		if($id==null){
			$this->session->set_flashdata('info-pass', 'Gagal Perbarui Password!');
			redirect('admin/profil','refresh');
		}

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('r_password', 'Retype Password', 'required|matches[password]');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'password' => $this->input->post('password')
				);
			$sql = $this->ion_auth->update($id,$data);
			if($sql){
				$this->session->set_flashdata('info-pass', 'Berhasil Perbarui Password!');
				redirect('admin/profil','refresh');
			} else{
				$this->session->set_flashdata('info-pass', 'Gagal Perbarui Password!');
				redirect('admin/profil','refresh');
			}
		} else {
			$data['user'] = $this->ion_auth->user()->row();
			$id_user = $data['user']->id;
				$data['title']	= 'Lapor IMB';
			$data['main'] = 'admin/profil';
			$this->load->view('template/template',$data);
		}
	}

		public function member()
	{
		$data['user']			= $this->ion_auth->user()->row();
		$data['title']			= 'Lapor IMB';
		$data['main']			= 'admin/user/list';
		// $data['list_member']	= $this->ion_auth->users()->result();
		$data['list_member']=$this->usersModel->modelmember();
		$this->load->view('template/template',$data);
	}

	public function memberadd()
	{
		$data['user']			= $this->ion_auth->user()->row();
		
		$data['list_groups']=$this->usersModel->modelgroups();

		if(isset($_POST['Submit']))
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('first_name', 'Firstname', 'trim|required|min_length[2]');
			// $this->form_validation->set_rules('last_name', 'Lastname', 'trim|required|min_length[2]');

			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]');

			if ($this->form_validation->run() == TRUE) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$email = $this->input->post('email');
				$additional_data = array(
										'first_name' => $this->input->post('first_name'),
										// 'last_name' => $this->input->post('last_name'),
										'phone'=> $this->input->post('phone')
										);

				$group = array($this->input->post('groups')); // UNTUK SESSION 
				// $this->MemberModel->us_group_add($this->uri->segment(3),$additional_data);
				$sql = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
				if($sql){
					$this->session->set_flashdata('info', 'Berhasil Tambah Data!');
					redirect(base_url("admin/member"));
				} else{
					$this->session->set_flashdata('info', 'Gagal Tambah Data!');
					redirect(base_url("admin/member"));
				}
			} else {
				$data['title']	= 'Lapor IMB';
				$data['main']			= 'admin/user/add';
				$this->load->view('template/template', $data);
			}
		} else{
			$data['title'] = 'Lapor IMB';
			$data['main']			= 'admin/user/add';
			$this->load->view('template/template', $data);
		}
	}

	public function beban()
	{
		$data['saldo']	= $this->keuanganModel->saldo();
		$data['beban']	= $this->keuanganModel->beban();
		$data['title']	= 'Lapor IMB';
		$data['main']	= 'admin/beban/list';
		$this->load->view('template/template',$data);
	}

	public function addBeban()
	 
	  {
	    $config = [
				'upload_path' => './uploads/beban',
				'allowed_types' => 'gif|jpg|png|jpeg',
	      'max_size' => 19456, 
			
			  ];
		
				  $this->load->library('upload', $config);
				  if (!$this->upload->do_upload('nota')) 
				  {
				  $data['error'] = $this->upload->display_errors();
				 $data['saldo']	= $this->keuanganModel->Saldo();
	            $data['title']	= 'Lapor IMB';
	       		 $data['main'] = 'admin/beban/add';
	        	$this->load->view('template/template', $data);
				  } else {
	              $file = $this->upload->data();
	              $config['image_library']='gd2';
	              $config['source_image']='./uploads/beban/'.$file['file_name'];
	              $config['create_thumb']= FALSE;
	              $config['maintain_ratio']= FALSE;
	              $config['quality']= '50%';
	              $config['width']= 600;
	              $config['height']= 400;
	              $config['new_image']= './uploads/beban/'.$file['file_name'];
	              $this->load->library('image_lib', $config);
	              $this->image_lib->resize();
	          	$saldo['saldo'] = $this->input->post('saldo');
			 	$data = array(
	                'penggunaan' 		=> $this->input->post('penggunaan'),
	                'saldo' 	        => $saldo['saldo'] - $this->input->post('harga'),
	                'keterangan'    	=> $this->input->post('keterangan'),
	                'tgl' 		=> date('Y-m-d H:i:s'),
	                // 'total' 			=> $this->input->post('total'),
				    'nota'    =>$file['file_name'],     
						  );
						  $this->keuanganModel->addBeban($data); //memasukan data ke database
						  $this->keuanganModel->updateSaldo($saldo);
						  $this->session->set_flashdata('info', 'Berhasil Simpan Data!');
	            redirect('admin/beban');
	            // print_r ($data);
	            // echo $data;
				  }
	  }

 public function editBeban($id=null)
  {
    if($id==null){
      $this->session->set_flashdata('info', 'Gagal Edit Data!');
      redirect('admin/beban','refresh');
  } 
      $config = [
      'upload_path' => './uploads/beban',
      'allowed_types' => 'gif|jpg|png|jpeg',
      'max_size' => 2048, 
      /*'max_width' => 1000,
      'max_height' => 768*/
      ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('nota')) //jika gagal upload
        {
        $data['error'] = $this->upload->display_errors(); //tampilkan error
        $data['beban']	= $this->keuanganModel->getDataBebanId($id);
        // $data['saldo']	= $this->keuanganModel->getSaldo();
        $data['title']	= 'Lapor IMB';
        $data['main'] = 'admin/beban/edit';
        $this->load->view('template/template', $data);
        } else {
            $file = $this->upload->data();
            $data['harga']	= $this->input->post('harga', TRUE);
              $data = array(
                 'penggunaan' 			    => $this->input->post('penggunaan'),
                 'harga' 			    => $this->input->post('harga'),
                'total' 	        => ($this->input->post('total')- $data['harga']),
                'keterangan'    	=> $this->input->post('keterangan'),
                'tgl' 		=> date('Y-m-d H:i:s'),
				'nota'	    =>$file['file_name']   
            );
            $this->keuanganModel->updateBeban($id,$data); //memasukan data ke database
            // print_r($data);
            // echo $data;
            $this->session->set_flashdata('info', 'Berhasil Update Data!');
            redirect('admin/beban');
        }
  }

	  public function addSaldo()
	  {
			$this->form_validation->set_rules('saldo', 'Nama Kategori','trim|required');
	  
    	if ($this->form_validation->run() == TRUE) {
        	 $data = array(
        	'saldo' => $this->input->post('saldo'),
        	);
			
				$sql = $this->keuanganModel->addSaldo($data);
				if($sql){
					$this->session->set_flashdata('info', 'Berhasil Tambah Data!');
					redirect(base_url("admin/beban"));
				} else{
					$this->session->set_flashdata('info', 'Gagal Tambah Data!');
					redirect(base_url("admin/beban"));
				}
			} else {
				$data['main']			= 'admin/beban/add_saldo';
				$this->load->view('template/template', $data);
			}
		
	}

	public function saldo()
	{
			$this->form_validation->set_rules('nilai', 'Username', 'trim|required|min_length[2]');
			if ($this->form_validation->run() == TRUE) {
				$nilai = $this->input->post('nilai');
				$data = array(
		
					'nilai'	=> $nilai
										);
				$sql = $this->keuanganModel->addData($data);
				if($sql){
					$this->session->set_flashdata('info', 'Berhasil Tambah Data!');
					redirect(base_url("harian"));
				} else{
					$this->session->set_flashdata('info', 'Gagal Tambah Data!');
					redirect(base_url("harian"));
				}
			} else {
				print_r($data);
				echo $data;
				// $data['title']	= 'Lapor IMB';
				// $data['main']			= 'admin/kelola/add';
				// $this->load->view('template/template', $data);
			}
	
		$this->keuanganModel->transfer($nilai);
	}
}