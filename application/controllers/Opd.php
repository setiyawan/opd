<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/controllers/MyController.php';

class Opd extends My_Controller {

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

    	$data['opd'] = $this->OpdModel->get_opd($filter);
		
		$this->load->view('opd', $data);
	}

	public function tambah() {
		$data = array(
			'form_action' => 'add'
		);

		$this->load->view('opd_form', $data);
	}

	public function edit() {
		$get = $this->input->get();
		$filter['id_opd'] = $get['id'];

    	$data = array(
			'form_action' => 'update',
			'opd' =>  $this->OpdModel->get_opd($filter)[0]
		);

		$this->load->view('opd_form', $data);
	}

	// POST TRANSACTION
	public function add() {
		$post = $this->input->post();

		$data['nama'] = $post['nama'];
		$data['hp'] = $post['hp'];
		$data['email'] = $post['email'];
		$data['alamat'] = $post['alamat'];
		$data['status'] = 1;

		$result = $this->OpdModel->add_data_opd($data);
		$opd['id_opd'] = $this->db->insert_id();

		$this->set_alert('success', 'Data Opd Berhasil Ditambah');

		redirect(base_url().'opd/edit?id='.$opd['id_opd']);
	}

	public function update() {
		$post = $this->input->post();
		$id_opd = $post['id_opd'];

		$data['nama'] = $post['nama'];
		$data['hp'] = $post['hp'];
		$data['email'] = $post['email'];
		$data['alamat'] = $post['alamat'];
		$data['update_time'] = $this->TimeConstant->get_current_timestamp();

		$this->OpdModel->update_data_opd($data, $id_opd);

		$this->set_alert('success', 'Data Opd Berhasil Diperbarui');

		redirect(base_url().'opd/edit?id='.$id_opd);
	}
}