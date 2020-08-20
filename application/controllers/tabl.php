<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabl extends CI_Controller {


    public function liste3()
    {
        $data['os'] = array("Donna Lee", "So What", "Maiden Voyage",
        "Kind of Blue", "A Night in Tunisia");
        $this->load->view('table', $data);
  
    
}
}