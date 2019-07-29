<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct(){
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->helper('form');
        $this->load->library('form_validation');

    }


    public function index(){

        $data ['posts'] = $this->User_Model->all('users');
        $this->load->view('inc/header');
        $this->load->view('/index', $data);
        $this->load->view('inc/footer');
    }


    //    public function index( $page = "home")
//    {
//        $path = APPPATH."views/$page.php";
//        if (file_exists($path)){
//
//            $this->load->view("$page.php");
//        }else {
//            show_404();
//        }
//
//    }
}
