<?php

class film_entrymodel extends CI_Model {
    
    //function film_entrymodel() {
        
      //  parent::CI_Model(); 
   // }
    

   function insertFilm() {
       
      $this->load->database(); 
      
      $data = array('title'=>$this->input->post('title'),
                    'genre'=>$this->input->post('genre'),
                    'director'=>$this->input->post('director'),
                    'actors'=>$this->input->post('actors'),
                    'yr'=>$this->input->post('yr'),
                    'summary'=>$this->input->post('summary'),
                    'link'=>$this->input->post('link'),
                    'youtube'=>$this->input->post('youtube'),
                    'special'=>$this->input->post('special'),); 
      
      $this->db->insert('films', $data); 
   }    
    
}



?>
