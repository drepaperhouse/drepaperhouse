<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class login_controller extends CI_Controller {

function _construct() {
    
    parent:: _contruct(); 
}

function index() {
    
    $this->load->helper(array('form')); 
    $this->load->view('login'); 
}

}

?>
