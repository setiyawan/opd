<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PegawaiModel extends CI_Model {
    
    public function get_pegawai($filter=[]) {
        if (!empty($filter['id_pegawai'])) {
            $this->db->where('id_pegawai', $filter['id_pegawai']);
        }

        if (!empty($filter['kgb2bln'])) {
            $where_caluse = 'tgl_mengajukan_kgb between now() and (NOW() + INTERVAL 2 MONTH)';
            $this->db->where($where_caluse);
        }

        if (!empty($filter['kp1thn'])) {
            $where_caluse = 'tmt_jabatan_berikutnya between now() and (NOW() + INTERVAL 1 YEAR)';
            $this->db->where($where_caluse);
        }

        if (!empty($filter['berkas'])) {
            $this->db->where('berkas_url <> ', '');
        }

        if (!empty($filter['verifikasi'])) {
            $this->db->where('p.status', 1);
        }

        $this->db->select('p.*, u.full_name');
        $this->db->join('user u', 'u.user_id = p.verify_by', 'left');
        $this->db->order_by('p.id_pegawai', 'asc');

        return  $this->db->get('pegawai p')->result_array();
        // print_r($this->db->last_query());  
        // die;
    }

    // POST TRANSACTION
    public function add_data_pegawai($data) {
        return $this->db->insert('pegawai', $data);
    }

    public function update_data_pegawai($data, $id_pegawai){
        $this->db->set($data);
        $this->db->where('id_pegawai', $id_pegawai);
        return $this->db->update('pegawai');
    }

}

?>