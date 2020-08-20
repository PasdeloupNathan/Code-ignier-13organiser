<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listdata extends CI_Controller {


function listdat() 
    {
    $data['dat'] = array("Donna Lee", "So What", "Maiden Voyage","Kind of Blue", "A Night in Tunisia");
    
    $this->load->view('listdata_page', $data);
    }
}