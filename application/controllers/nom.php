<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nom extends CI_Controller {


    public function liste2()
    {
  
    $data["prenom"] = "Dave";
    $data["nom"] = "grohi";
    // On passe le tableau en second argument de la méthode
    $this->load->view('nom_message', $data);
}
}