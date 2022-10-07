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
    	$filter2['status'] = 1;    	
    	$filter3['status'] = 0;    	

    	$data = array(
    		'jumlah_opd' => $this->DashboardModel->total_pengajuan_opd($filter1),
    		'jumlah_acc' => $this->DashboardModel->total_pengajuan_opd($filter2),
    		'jumlah_blm_bahas' => $this->DashboardModel->total_pengajuan_opd($filter3),
    	);

		$this->load->view('dashboard', $data);
	}
}