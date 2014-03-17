<?php

class film_controller extends CI_Controller {
    
    public function index() {
        
        $this->load->model("film_model"); 
       
    
        $data['results'] = $this->film_model->getFilms();
        $data['review'] = $this->film_model->getLatest(); 
      
        $this->load->view('film_list', $data);
       
      

}
public function getFilmReview($film)    
{
    
    $this->load->model('film_model'); 
    $data['results'] = $this->film_model->getFilms();
    $data['review'] = $this->film_model->getMovie($film);
    if($data) {
    $this->load->view('movie_review', $data); 
    }
    else $this->load->view('film_list', $data); 
    
    
}


}
?>
