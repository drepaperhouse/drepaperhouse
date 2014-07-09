<?php

class gallery_model extends CI_Model {
    
 function getGalleryList() {
     
   $query = $this->db->query("SELECT * FROM gallery_tbl ORDER by g_title");   
   
   return $query->result(); 
 }   
 
 function getPhotos($id) {
     
       $query = $this->db->query("SELECT * FROM gallery_tbl where gallery_id = '$id'"); 
       if($query)
       return $query->result(); 
       else {
           
             $query = $this->db->query("SELECT * from gallery_tbl ORDER BY gallery_id LIMIT 100"); 
              return $query->result(); 
       }
     
 }
    
 function latest_gallery_name() {
       $query = $this->db->query("SELECT * from gallery_tbl ORDER BY gallery_id LIMIT 100"); 
       return $query->result(); 
       }
       
       
      
    
}
?>
