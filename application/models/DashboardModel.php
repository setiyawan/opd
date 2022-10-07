<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model {
    
    public function total_pengajuan_opd($filter=[]) {
        if (isset($filter['status'])) {
            $this->db->where('status', $filter['status']);
        }

        if (isset($filter['tahun_anggaran'])) {
            $this->db->where('tahun_anggaran', $filter['tahun_anggaran']);
        }

        return $this->db->count_all_results('pengajuan_opd');
    }

}

?>