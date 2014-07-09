<?php

class gallery_controller extends CI_Controller {
    
    public function index() {
        
     $this->load->model('gallery_model');    
     
     $data['list'] = $this->gallery_model->getGalleryList();
     $data['latest'] = $this->gallery_model->latest_gallery_name(); 
   
     $this->load->view('gallery', $data);           
}
    public function getGallery($gallery) {
        
        $this->load->model('gallery_model');
        
        $data['list'] = $this->gallery_model->getGalleryList();
        $data['latest'] = $this->gallery_model->getPhotos($gallery); 
        
       
        
        $this->load->view('gallery',  $data); 
    }
    
}
?>
