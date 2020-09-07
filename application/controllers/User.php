<?php

class User extends CI_controller {
    function create() {

        $this->load->model('User_model');
        
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()== false){
            $this->load->view('create');
        } else {
            $formArray = array();
            $formArray['username'] = $this->input->post('username');
            $formArray['password'] = $this->input->post('password');

            $this->User_model->create($formArray);
            $this->session->set_flashdata('success', 'Record Added');
            redirect(base_url().'index.php/user/index');
        }
    }

    function index() {

        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['users'] = $users;

        $this->load->view('list',$data);
    }

    function edit($userId){
        
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userId);
        $data = array();
        $data['user'] = $user;
        $this->load->view('edit',$data);

        $formArray = array();
        $formArray['username'] = $this->input->post('username');
        $formArray['password'] = $this->input->post('password');

        $this->User_model->updateUser($userId,$formArray);
        $this->session->set_flashdata('success','Record updated');

        redirect(base_url().'index.php/user/index');

    }
}

?>