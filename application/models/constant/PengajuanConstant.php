<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PengajuanConstant extends CI_Model {
	function get_tahun_anggaran() {
		return array(
			'2022' => '2022' 
		);
	}

	function perubahan_ke() {
		return array(
			'1' => '1' ,
			'2' => '2' ,
			'3' => '3' ,
			'4' => '4' ,
			'5' => '5' 
		);
	}

	function sumber_dana() {
		return array(
			'HIBAH' => 'HIBAH' ,
			'PAD' => 'PAD' 
		);
	}

	function status_pengajuan() {
		return array(
			'0' => 'Belum Dibahas' ,
			'1' => 'Disetujui' ,
			'2' => 'Ditunda' ,
			'3' => 'Ditolak' 
		);
	}
}

?>