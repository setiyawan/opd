<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/controllers/MyController.php';

class Laporan extends My_Controller {

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
    	$filter2['id_opd'] = $this->get_session_by_id('id_opd');
		$filter2['tahun_anggaran'] = $this->TimeConstant->get_current_year();

    	$data = array(
    		'opd' => $this->OpdModel->get_opd($filter2),
    		'id_opd' => $this->get_session_by_id('id_opd')
    	);

		$this->load->view('laporan', $data);
	}

	 public function cetak() {
    	$post = $this->input->post();

		$filter['tahun_anggaran'] = $post['tahun_anggaran'];
		$filter['perubahan_ke'] = $post['perubahan_ke'];
		$filter['id_opd'] = $post['id_opd'];
		$filter['status'] = $post['status'];

    	$data = array(
    		'laporan' => $this->PengajuanModel->get_pengajuan_opd($filter),
    		'perubahan_ke' => $this->PengajuanConstant->perubahan_ke()[$post['perubahan_ke']],
    		'tahun_anggaran' => $post['tahun_anggaran']
    	);

		$this->load->view('cetak', $data);
	}
}