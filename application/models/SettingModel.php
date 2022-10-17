<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SettingModel extends CI_Model {
    
    public function get_setting_opd($filter=[]) {
        if (!empty($filter['id_setting_opd']) && $filter['id_setting_opd'] > 0) {
            $this->db->where('id', $filter['id_setting_opd']);
        }

        if (!empty($filter['tahun_anggaran']) && $filter['tahun_anggaran'] > 0) {
            $this->db->where('tahun_anggaran', $filter['tahun_anggaran']);
        }

        if (!empty($filter['current_date'])) {
            $this->db->where('tgl_mulai <=', $filter['current_date']);
            $this->db->where('tgl_selesai >=', $filter['current_date']);
        }

        $this->db->order_by('tahun_anggaran', 'asc');
        $this->db->order_by('tgl_mulai', 'asc');

        return  $this->db->get('setting_data_unit')->result_array();
    }

    // POST TRANSACTION
    public function add_data_setting_opd($data) {
        return $this->db->insert('setting_data_unit', $data);
    }

    public function update_data_setting_opd($data, $id_setting_opd){
        $this->db->set($data);
        $this->db->where('id', $id_setting_opd);
        return $this->db->update('setting_data_unit');
    }

}

?>