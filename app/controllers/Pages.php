<?php

class Pages extends Controller{
    
    
    public function __construct(){
        echo "page is loaded";
    }
    public function index(){
        
    }
    public function about($id){
      if(isset($id)){
           echo $id;
      }
       
    }
    
    
}


?>