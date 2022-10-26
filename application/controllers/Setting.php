<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/controllers/MyController.php';

class Setting extends My_Controller {

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
    
    public function opd() {
    	$get = $this->input->get();

    	$data['setting_opd'] = $this->SettingModel->get_setting_opd();
    	$data['id_opd'] = $this->get_session_by_id('id_opd');
		
		$this->load->view('setting_opd', $data);
		unset($_SESSION['alert']);
	}

	public function opdtambah() {
		$data = array(
			'form_action' => 'opdadd',
			'id_opd' => $this->get_session_by_id('id_opd')
		);

		$this->load->view('setting_opd_form', $data);
	}

	public function opdedit() {
		$get = $this->input->get();
		$filter['id_setting_opd'] = $get['id'];

    	$data = array(
			'form_action' => 'opdupdate',
			'setting_opd' =>  $this->SettingModel->get_setting_opd($filter)[0],
			'id_opd' => $this->get_session_by_id('id_opd')
		);

		$this->load->view('setting_opd_form', $data);
	}

	// POST TRANSACTION
	public function opdadd() {
		$post = $this->input->post();

		$data['tahun_anggaran'] = $post['tahun_anggaran'];
		$data['perubahan_ke'] = $post['perubahan_ke'];
		$data['tgl_mulai'] = $post['tgl_mulai'];
		$data['tgl_selesai'] = $post['tgl_selesai'];

		$result = $this->SettingModel->add_data_setting_opd($data);
		$opd['id'] = $this->db->insert_id();

		$this->set_alert('success', 'Data Setting Usulan Belanja Berhasil Ditambah');

		redirect(base_url().'setting/opd?id='.$opd['id']);
	}

	public function opdupdate() {
		$post = $this->input->post();
		$id = $post['id'];

		$data['tahun_anggaran'] = $post['tahun_anggaran'];
		$data['perubahan_ke'] = $post['perubahan_ke'];
		$data['tgl_mulai'] = $post['tgl_mulai'];
		$data['tgl_selesai'] = $post['tgl_selesai'];
		$data['update_time'] = $this->TimeConstant->get_current_timestamp();

		$this->SettingModel->update_data_setting_opd($data, $id);

		$this->set_alert('success', 'Data Setting Usulan Belanja Berhasil Diperbarui');

		redirect(base_url().'setting/opd/?id='.$id);
	}
}