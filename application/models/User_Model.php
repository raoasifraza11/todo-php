<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert($data){
        return $this->db->insert('users', $data);
    }

    public function all($table){
        return $this->db->get($table)->result();
    }

    public function get($table, $id){
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    public function update($table, $id , $data){
        $this->db->where('id', $id);
        $this->db->set('todotext',$data);
        return $this->db->update($table);
    }

    public function delete($table, $id){
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

}