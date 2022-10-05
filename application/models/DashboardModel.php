<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model {
    
    public function total_pegawai($filter=[]) {

        if (!empty($filter['kgb2bln'])) {
            $where_caluse = 'tgl_mengajukan_kgb between now() and (NOW() + INTERVAL 2 MONTH)';
            $this->db->where($where_caluse);
        }

        if (!empty($filter['kp1thn'])) {
            $where_caluse = 'tmt_jabatan_berikutnya between now() and (NOW() + INTERVAL 1 YEAR)';
            $this->db->where($where_caluse);
        }

        if (!empty($filter['berkas_url'])) {
            $this->db->where('berkas_url <> ', '');
        }

        if (!empty($filter['status'])) {
            $this->db->where('status', $filter['status']);
        }

        return $this->db->count_all_results('pegawai');
    } 

}

?>