<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }
      $data = [
        'title' => 'SharePosts',
        'description'=> 'App built on travesyMVC',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description'=> 'application to share posts.',
      ];

      $this->view('pages/about', $data);
    }
  }