<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PegawaiConstant extends CI_Model {
	function verifikasi_data() {
		return array(
			'0' => 'Belum Terverifikasi', 
			'1' => 'Terverifikasi'
		);
	}

	function jenis_pegawai() {
		return array(
			'0' => 'Non PNS', 
			'1' => 'PNS'
		);
	}

	function pendidikan_terakhir() {
		return array(
			'0' => 'SD/Sederajat', 
			'1' => 'SLTP/Sederajat',
			'2' => 'SLTA/Sederajat',
			'3' => 'Diploma',
			'4' => 'S1',
			'5' => 'S2',
			'6' => 'S3'
		);
	}

	function eselon() {
		return array(
			'I' => 'I', 
			'II' => 'II',
			'III' => 'III', 
			'IV' => 'IV' 
		);
	}

	function golongan()	{
		return array(
			'-' => '-',

			'IA' => 'IA',
			'IB' => 'IB',
			'IC' => 'IC',
			'ID' => 'ID',

			'IIA' => 'IIA',
			'IIB' => 'IIB',
			'IIC' => 'IIC',
			'IID' => 'IID',

			'IIIA' => 'IIIA',
			'IIIB' => 'IIIB',
			'IIIC' => 'IIIC',
			'IIID' => 'IIID',

			'IVA' => 'IVA',
			'IVB' => 'IVB',
			'IVC' => 'IVC',
			'IVD' => 'IVD',
		);
	}

}

?>