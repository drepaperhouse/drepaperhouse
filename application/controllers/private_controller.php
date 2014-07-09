<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class private_controller extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
   
     $this->load->view('private', $data);
   }
   else
   {
     //If no session, redirect to login page
       echo "Restricted"; 
     redirect('login_controller', 'refresh');
   }
 }
 
 
     function input() {
        
        $this->load->helper('form'); 
        $this->load->model('film_entrymodel'); 
        
      //  if($this->input->post('mysubmit')) 
         $this->film_entrymodel->insertFilm(); 
         echo "Film review submitted"; 
         redirect('private_controller', 'refresh');
        
    }


 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('', 'refresh');
 }

}

?>
