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
    	$filter['kgb2bln'] = true;
    	$filter1['kp1thn'] = true;
    	
    	$filter2['berkas_url'] = 1;
    	$filter2 = array_merge($filter1, $filter2);

    	$filter3['status'] = 1;
    	$filter3 = array_merge($filter2, $filter3);    	

    	$data = array(
    		'total_pegawai' => $this->DashboardModel->total_pegawai(),
            'total_kgb' => $this->DashboardModel->total_pegawai($filter),
    		'total_kp' => $this->DashboardModel->total_pegawai($filter1),
    		'total_berkas' => $this->DashboardModel->total_pegawai($filter2),
    		'total_terverifikasi' => $this->DashboardModel->total_pegawai($filter3),
    	);

		$this->load->view('dashboard', $data);
	}
}