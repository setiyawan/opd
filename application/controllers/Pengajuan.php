<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/controllers/MyController.php';

class Pengajuan extends My_Controller {

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
    	$filter['tahun_anggaran'] = $this->TimeConstant->get_current_year();
		$filter['status'] = $get['status'];
    	$filter['id_opd'] = $this->get_session_by_id('id_opd');

    	$data['pengajuan'] = $this->PengajuanModel->get_pengajuan_opd($filter);
		
		$this->load->view('pengajuan2', $data);
		unset($_SESSION['alert']);
	}

	public function tambah() {
		$data = array(
			'form_action' => 'add',
			'class' => ''
		);
    	$filter2['id_opd'] = $this->get_session_by_id('id_opd');
		$filter2['tahun_anggaran'] = $this->TimeConstant->get_current_year();

		$data['opd'] = $this->OpdModel->get_opd($filter2);

		if ($filter2['id_opd'] > 0) {
			$data['class'] = 'force-hidden';
		}

		$this->load->view('pengajuan_form2', $data);
	}

	public function edit() {
		$get = $this->input->get();
		$filter['id_pengajuan_opd'] = $get['id'];

    	$data = array(
			'form_action' => 'update',
			'class' => '',
			'pengajuan' =>  $this->PengajuanModel->get_pengajuan_opd($filter)[0]
		);

    	$filter2['id_opd'] = $this->get_session_by_id('id_opd');
		$filter2['tahun_anggaran'] = $this->TimeConstant->get_current_year();
		$data['opd'] = $this->OpdModel->get_opd($filter2);

		if ($filter2['id_opd'] > 0) {
			$data['class'] = 'force-hidden';
		}

		$this->load->view('pengajuan_form2', $data);
	}

	// POST TRANSACTION
	public function add() {
		$post = $this->input->post();

		$data['id_opd'] = $post['id_opd'];
		$data['tahun_anggaran'] = $post['tahun_anggaran'];
		$data['perubahan_ke'] = $post['perubahan_ke'];
		$data['nomor_surat_opd'] = $post['nomor_surat_opd'];
		$data['tgl_surat'] = $post['tgl_surat'];
		$data['file_surat'] = $post['file_surat'];
		$data['sumber_dana'] = $post['sumber_dana'];
		$data['dasar_hukum'] = $post['dasar_hukum'];
		$data['anggaran_apbd'] = $post['anggaran_apbd'];
		$data['anggaran_rapbd'] = $post['anggaran_rapbd'];
		$data['program'] = $post['program'];
		$data['keterangan_surat'] = $post['keterangan_surat'];
		$data['keputusan_rapat'] = $post['keputusan_rapat'];
		$data['anggaran_acc'] = $post['anggaran_acc'];
		$data['tgl_rapat'] = $post['tgl_rapat'];
		$data['status'] = $post['status'];

		$file_surat = $this->upload_image('file_surat', 'berkas', $data['nomor_surat_opd'] . '_' . $post['file_surat']);
       	$data['file_surat'] = $file_surat;

		$result = $this->PengajuanModel->add_data_pengajuan_opd($data);
		$pengajuan['id_pengajuan_opd'] = $this->db->insert_id();

		$this->set_alert('success', 'Data Pengajuan Berhasil Ditambah');

		redirect(base_url().'pengajuan/?id='.$pengajuan['id_pengajuan_opd']);
	}

	public function update() {
		$post = $this->input->post();
		$id_pengajuan_opd = $post['id_pengajuan_opd'];

		$data['id_opd'] = $post['id_opd'];
		$data['tahun_anggaran'] = $post['tahun_anggaran'];
		$data['perubahan_ke'] = $post['perubahan_ke'];
		$data['nomor_surat_opd'] = $post['nomor_surat_opd'];
		$data['tgl_surat'] = $post['tgl_surat'];
		$data['sumber_dana'] = $post['sumber_dana'];
		$data['dasar_hukum'] = $post['dasar_hukum'];
		$data['anggaran_apbd'] = $post['anggaran_apbd'];
		$data['anggaran_rapbd'] = $post['anggaran_rapbd'];
		$data['program'] = $post['program'];
		$data['keterangan_surat'] = $post['keterangan_surat'];
		$data['keputusan_rapat'] = $post['keputusan_rapat'];
		$data['anggaran_acc'] = $post['anggaran_acc'];
		$data['tgl_rapat'] = $post['tgl_rapat'];
		$data['status'] = $post['status'];
		$data['update_time'] = $this->TimeConstant->get_current_timestamp();

		$file_surat = $this->upload_image('file_surat', 'berkas', $data['nomor_surat_opd'] . '_' . $post['file_surat']);
        if($file_surat != "") {
	        $data['file_surat'] = $file_surat;
        }

		$this->PengajuanModel->update_data_pengajuan_opd($data, $id_pengajuan_opd);

		$this->set_alert('success', 'Data Pengajuan Berhasil Diperbarui');

		redirect(base_url().'pengajuan?id='.$id_pengajuan_opd);
	}
}