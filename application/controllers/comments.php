<?php
class comments extends CI_Controller{
    public function create(){
        $food = $this->input->post('food');

        /* $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('pages/'.$food);
        $this->load->view('templates/footer');
        }else{ */
        $this->comments_model->create_comment($food);
        $this->session->set_flashdata('comment_posted', 'Your comment has been posted!');

        redirect($food);
        //}

    }
}
