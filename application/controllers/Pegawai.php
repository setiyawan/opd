<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/controllers/MyController.php';

class Pegawai extends My_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



    public function __construct() {
        parent::__construct();

        $this->must_login();
    }
    
    public function index() {
    	$get = $this->input->get();
		if ($get['filter'] == 'kgb2bln') {
			$filter['kgb2bln'] = true;
		}

		if ($get['filter'] == 'kp1thn') {
			$filter['kp1thn'] = true;
		}

		if ($get['berkas'] == 'true') {
			$filter['berkas'] = true;
		}

		if ($get['verifikasi'] == 'true') {
			$filter['verifikasi'] = true;
		}

    	$data['pegawai'] = $this->PegawaiModel->get_pegawai($filter);
		
		$this->load->view('pegawai', $data);
	}

	public function tambah() {
		$data = array(
			'form_action' => 'add'
		);

		$this->load->view('pegawai_form', $data);
	}

	public function edit() {
		$get = $this->input->get();
		$filter['id_pegawai'] = $get['id'];

    	$data = array(
			'form_action' => 'update',
			'pegawai' =>  $this->PegawaiModel->get_pegawai($filter)[0]
		);

		$this->load->view('pegawai_form', $data);
	}

	// POST TRANSACTION
	public function add() {
		$post = $this->input->post();

		$data['nip'] = $post['nip'];
		$data['nama'] = $post['nama'];
		$data['alamat'] = $post['alamat'];
		$data['jenis_kelamin'] = $post['jenis_kelamin'];
		$data['no_telepon'] = $post['no_telepon'];
		$data['tgl_lahir'] = $post['tgl_lahir'];
		$data['golongan'] = $post['golongan'];
		$data['jenis_pegawai'] = $post['jenis_pegawai'];
		$data['tgl_mengajukan_kgb'] = $post['tgl_mengajukan_kgb'];
		$data['tmt_kgb'] = $post['tmt_kgb'];
		$data['status'] = $post['status'];
		$data['gaji'] = $post['gaji'];

		$data['pendidikan_terakhir'] = $post['pendidikan_terakhir'];
		$data['eselon'] = $post['eselon'];
		$data['jabatan'] = $post['jabatan'];
		$data['tmt_jabatan'] = $post['tmt_jabatan'];
		$data['masa_kerja'] = $post['masa_kerja'];
		$data['tmt_jabatan_berikutnya'] = $post['tmt_jabatan_berikutnya'];

		if ($data['status'] == "1") {
			$data['verify_by'] = $this->session->userdata('user_id');
		} else {
			$data['verify_by'] = 0;
		}

		$image_name = $this->upload_image('berkas_url', 'berkas', $data['nip'] . '_' . $post['berkas_url']);
        if ($image_name != "") {
            $data['berkas_url'] = $image_name;
        }

		$result = $this->PegawaiModel->add_data_pegawai($data);
		$pegawai['id_pegawai'] = $this->db->insert_id();

		$this->set_alert('success', 'Data Pegawai Berhasil Ditambah');

		redirect(base_url().'pegawai/edit?id='.$pegawai['id_pegawai']);
	}

	public function update() {
		$post = $this->input->post();
		$id_pegawai = $post['id_pegawai'];

		$data['nip'] = $post['nip'];
		$data['nama'] = $post['nama'];
		$data['alamat'] = $post['alamat'];
		$data['jenis_kelamin'] = $post['jenis_kelamin'];
		$data['no_telepon'] = $post['no_telepon'];
		$data['tgl_lahir'] = $post['tgl_lahir'];
		$data['jenis_pegawai'] = $post['jenis_pegawai'];
		$data['golongan'] = $post['golongan'];
		$data['tgl_mengajukan_kgb'] = $post['tgl_mengajukan_kgb'];
		$data['tmt_kgb'] = $post['tmt_kgb'];
		$data['status'] = $post['status'];
		$data['gaji'] = $post['gaji'];
		$data['update_time'] = $this->TimeConstant->get_current_timestamp();

		$data['pendidikan_terakhir'] = $post['pendidikan_terakhir'];
		$data['eselon'] = $post['eselon'];
		$data['jabatan'] = $post['jabatan'];
		$data['tmt_jabatan'] = $post['tmt_jabatan'];
		$data['masa_kerja'] = $post['masa_kerja'];
		$data['tmt_jabatan_berikutnya'] = $post['tmt_jabatan_berikutnya'];

		if ($data['status'] == "1") {
			$data['verify_by'] = $this->session->userdata('user_id');
		} else {
			$data['verify_by'] = 0;
		}


		$image_name = $this->upload_image('berkas_url', 'berkas', $data['nip'] . '_' . $post['berkas_url']);
        if ($image_name != "") {
            $data['berkas_url'] = $image_name;
        }

		$this->PegawaiModel->update_data_pegawai($data, $id_pegawai);

		$this->set_alert('success', 'Data Pegawai Berhasil Diperbarui');

		redirect(base_url().'pegawai/edit?id='.$id_pegawai);
	}
}