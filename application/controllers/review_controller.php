<?php

class review_controller extends CI_Controller  {
    
  function _contruct() {
        
        parent::_contruct();  
      
    }
    
    function index() {
        
        $this->load->model('film_entrymodel'); 
        $this->load->view('film_entry'); 
        
    }
 
    function input() {
        
        $this->load->helper('form'); 
        $this->load->model('film_entrymodel'); 
        
      //  if($this->input->post('mysubmit')) 
         $this->film_entrymodel->insertFilm(); 
         echo "Film review submitted"; 
         $this->load->view('film_entry');
        
    }
}
?>
