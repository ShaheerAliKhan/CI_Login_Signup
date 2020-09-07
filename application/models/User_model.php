<?php
class User_model extends CI_Model {
    function create($formArray) {
        $this->db->insert('stud',$formArray);
    }

    function all(){
        return $users = $this->db->get('stud')->result_array();
    }

    function getUser($userId) {
        $this->db->where('id', $userId);
        return $user = $this->db->get('stud')->row_array();
    }

    function updateUser($userId,$formArray) {
        $this->db->where('id', $userId);
        $this->db->update('stud',$formArray);
    }
    
}

?>