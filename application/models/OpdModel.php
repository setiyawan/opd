<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class OpdModel extends CI_Model {
    
    public function get_opd($filter=[]) {
        if (!empty($filter['id_opd']) && $filter['id_opd'] > 0) {
            $this->db->where('id', $filter['id_opd']);
        }

        return  $this->db->get('data_unit')->result_array();
        // print_r($this->db->last_query());  
        // die;
    }

    // POST TRANSACTION
    public function add_data_opd($data) {
        return $this->db->insert('data_unit', $data);
    }

    public function update_data_opd($data, $id_opd){
        $this->db->set($data);
        $this->db->where('id', $id_opd);
        return $this->db->update('data_unit');
    }

}

?>