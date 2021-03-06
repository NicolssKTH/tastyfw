<?php
class comments_model extends CI_Model{
    public function __construct(){
        $this->load->Database();
    }

    public function longpolling($rows){
        while(true){

            $query = $this->db->get('comments');

            if($rows != $query->num_rows()){

                $rows = $query->num_rows();

                return $rows;
            }
            session_write_close();
            sleep(1);
        }
    }

    public function showComments(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('comments');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function addComment(){

        $comment = htmlspecialchars($this->input->post('body'));
        $data = array(
            'username' => $this->session->userdata('username'),
            'comment' => $comment,
            'food'=>$this->input->post('food'),
        );

        $this->db->insert('comments', $data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }

    }
    function delete_comment(){

        $id = $this->input->get('id');
        $comment_query = $this->db->query("SELECT * FROM comments WHERE id = '$id'");

        if($comment_query->row(0)->username == $this->session->userdata('username')){

            $this->db->query("DELETE FROM comments WHERE id = '$id'");
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
    }
}




/**************** Without javascript ***********************
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
            'food' => $food);
        return $this->db->insert('comments', $data);
    }
    public function delete_comment($id){
        $comment_query = $this->db->query("SELECT * FROM comments WHERE id = '$id'");
        if($comment_query->row(0)->username == $this->session->userdata('username')){
            $this->db->query("DELETE FROM comments WHERE id = '$id'");
            return true;
        }else{
            die('You cant delete other users comments!');
        }
    */
