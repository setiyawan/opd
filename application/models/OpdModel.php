<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class OpdModel extends CI_Model {
    
    public function get_opd($filter=[]) {
        if (!empty($filter['id_opd'])) {
            $this->db->where('id_opd', $filter['id_opd']);
        }

        return  $this->db->get('opd')->result_array();
        // print_r($this->db->last_query());  
        // die;
    }

    // POST TRANSACTION
    public function add_data_opd($data) {
        return $this->db->insert('opd', $data);
    }

    public function update_data_opd($data, $id_opd){
        $this->db->set($data);
        $this->db->where('id_opd', $id_opd);
        return $this->db->update('opd');
    }

}

?>