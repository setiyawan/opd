<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PengajuanModel extends CI_Model {
    
    public function get_pengajuan_opd($filter=[]) {
        if (!empty($filter['id_pengajuan_opd'])) {
            $this->db->where('p.id_pengajuan_opd', $filter['id_pengajuan_opd']);
        }

        if (isset($filter['status'])) {
            $this->db->where('p.status', $filter['status']);
        }

        if (!empty($filter['tahun_anggaran'])) {
            $this->db->where('o.tahun_anggaran', $filter['tahun_anggaran']);
        }

        $this->db->select('p.*, o.nama_skpd');
        $this->db->join('data_unit o', 'o.id = p.id_opd', 'left');

        return  $this->db->get('pengajuan_opd p')->result_array();
        // print_r($this->db->last_query());
        // die;
    }

    // POST TRANSACTION
    public function add_data_pengajuan_opd($data) {
        return $this->db->insert('pengajuan_opd', $data);
    }

    public function update_data_pengajuan_opd($data, $id_pengajuan_opd){
        $this->db->set($data);
        $this->db->where('id_pengajuan_opd', $id_pengajuan_opd);
        return $this->db->update('pengajuan_opd');
    }

}

?>