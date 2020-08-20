<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index(){

        $this->load->model("main_model");
        $data["fetch_data"] = $this->main_model->fetch_data();

        $this->load->view("main_view", $data);
    }

    public function form_validation()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules("first_name", "First Name", '
            required|alpha');
        $this->form_validation->set_rules("last_name", "Last Name", '
        required|alpha');

        if($this->form_validation()->run())
        {}
    }
}