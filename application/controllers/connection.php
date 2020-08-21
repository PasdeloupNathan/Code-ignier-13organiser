<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connection extends CI_Controller {


	public function indexco()
	{

        $this->load->view('connection_page');
        

        
	}
	
}

// public function index()
// {
//     $this->load->database();
    
//     $resultat = $this->db->query('SELECT * FROM users')->result();

//     $data["naruto"] = $resultat;

//     $this->load->view('connection_page', $data);
    

    
// }

// }