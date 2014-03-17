<?php

class gallery_model extends CI_Model {
    
 function getGalleryList() {
     
   $query = $this->db->query("SELECT * FROM gallery_tbl ORDER by g_title");   
   
   return $query->result(); 
 }   
 
 function getGallery($id) {
     
       $query = $this->db->query("SELECT * FROM image_tbl g _id = '$id'"); 
       return $query->result(); 
     
 }
    
 function latest_gallery_name() {
       $query = $this->db->query("SELECT * from gallery_tbl ORDER BY gallery_id LIMIT 100"); 
       return $query->result(); 
       }
       
       
      
    
}
?>
