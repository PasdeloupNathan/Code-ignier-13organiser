<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller {





public function listes()
    {
$data["prenom"] = "Dave";
$data["nom"] = "Grohl";
$this->load->view('liste_page', $data);


    }
}