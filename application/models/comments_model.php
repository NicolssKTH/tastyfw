<?php
class comments_model extends CI_Model{
    public function __construct(){
        $this->load->Database();
    }
    public function get_comments($slug = FALSE){
        if($slug === FALSE){
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('comments');
            return $query->result_array();
        }

        $query = $this->db->get_where('comments', array('slug' => $slug));
        return $query->row_array();
    }

    public function create_comment($food){

        $comment = htmlspecialchars($this->input->post('body'));

        $data = array(
        'username' => $this->session->userdata('username'),
        'comment' => $comment,
        'food' => $food
        );
        return $this->db->insert('comments', $data);
    }
}
