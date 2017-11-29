<?php
class users extends CI_Controller{
    public function register(){
        $data['title'] = 'sign up';

        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|is_unique[user.username]', array('is_unique' => 'That username does already exist!'));
        $this->form_validation->set_rules('psw', 'Password', 'required');
        $this->form_validation->set_rules('psw2', 'Repeat Password', 'matches[psw]');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        }else{
            $enc_password = password_hash($this->input->post('psw'), PASSWORD_DEFAULT);

            $this->user_model->register($enc_password);

            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');
            redirect('home');
        }
    }

    public function login(){
        $data['title'] = 'sign in';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login($username, $password);

            if($user_id){
                $userdata = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true);

                $this->session->set_userdata($userdata);
                echo $user_id;
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                redirect('home');
            }else{

                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('home');
            }
        }
    }
}
