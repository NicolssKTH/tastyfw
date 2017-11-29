<?php
class comments_model extends CI_Model{
    public function __construct(){
        $this->load->Database();
    }
    public function get_comments($slug = FALSE){
        if($slug === FALSE){
            $query = $this->db->get('comments');
            return $query->result_array();
        }

        $query = $this->db->get_where('comments', array('slug' => $slug));
        return $query->row_array();
    }
}
