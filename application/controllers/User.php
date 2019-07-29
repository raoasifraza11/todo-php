<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('User_Model');
            $this->load->helper('form');
            $this->load->library('form_validation');

        }

        public function insert(){
            $this->form_validation->set_rules('todotext', 'Todo List', 'trim|required|min_length[5]|max_length[100]');
            if ($this->form_validation->run() == FALSE) {
                echo "error";
            }
            $data = $this->input->post();

            if ($data){
                $this->User_Model->insert($data);
                $data ['posts'] = $this->User_Model->all('users');
                redirect(base_url('page/index'));
                echo "Data Inserted Successfully";
            }else{
                show_404();
            }


        }

        public function edit(){
            $this->form_validation->set_rules('todotext','Todo List','trim|required|min_length[10]|max_length[100]');
            if ($this->form_validation->run() == FALSE) {
                echo "error";
            }

            else{
                $data= $this->input->post();
                $this->User_Model->update('users',$this->input->post('id'),$this->input->post('todotext'));

                redirect(base_url('page/index'));
            }

        }

        public function showpost($id){

            $data['post'] = $this->User_Model->get('users', $id);
            if ($data){
                $this->load->view('/edit', $data);
            }

        }

        public function delete($id){
            $deleted = $this->User_Model->delete('users', $id);
            redirect(base_url('page/index'));
            if ($deleted){
                echo "Your Todo List Deleted!";
            }else {
                echo "Your Todo List not Deleted!";
            }
        }

}
