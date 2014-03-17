<?php

class film_model extends CI_Model {
    
    
    function getFilms() {
        
        $query = $this->db->query("SELECT * FROM  films ORDER BY title"); 
        
        return $query->result(); 
    }
    
   function getMovie($id) {
       
   $query = $this->db->query("SELECT * FROM films WHERE film_id = '$id'"); 
     
   return $query->result(); 
       
   } 
   
   function getLatest() {
       $query = $this->db->query("SELECT * from films ORDER BY film_id LIMIT 100"); 

       
       return $query->result(); 
       
   }
    
}



?>
