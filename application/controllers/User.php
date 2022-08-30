<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct()
    {   
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        $result = $this->User_model->getUser();
        print_r($result);
        // $this->load->view('user_view');
    }
}

?>