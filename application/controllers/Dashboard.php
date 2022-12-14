<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/controllers/MyController.php';

class Dashboard extends My_Controller {

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
    	$filter1['tahun_anggaran'] = $this->TimeConstant->get_current_year();
    	$filter1['id_opd'] = $this->get_session_by_id('id_opd');

    	$filter2['status'] = 1;
    	$filter2['id_opd'] = $this->get_session_by_id('id_opd');

    	$filter3['status'] = 0;
    	$filter3['id_opd'] = $this->get_session_by_id('id_opd');


    	$data = array(
    		'jumlah_opd' => $this->DashboardModel->total_pengajuan_opd($filter1),
    		'jumlah_acc' => $this->DashboardModel->total_pengajuan_opd($filter2),
    		'jumlah_blm_bahas' => $this->DashboardModel->total_pengajuan_opd($filter3),
    		'id_opd' => $this->get_session_by_id('id_opd'),
    		'perubahan_ke' => $this->get_session_by_id('perubahan_ke'),
    		'tgl_selesai' => $this->get_session_by_id('tgl_selesai')
    	);

		$this->load->view('dashboard2', $data);
	}
}