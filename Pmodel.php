<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pmodel extends CI_Model{

    public function all_data_with_limit($limit, $offset) {
        
        $this->db->limit($limit, $offset);
        $query = $this->db->get('user_data');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
?>