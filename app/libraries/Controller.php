<?php
    //base controller will extend pages controller etc
    //This loads the models in views

    class Controller{
        
        public function model($model){
            //require model file
            require_once "../app/models/" . $model . '.php';
            
           //instatiate model
            return new $model();
        }
        
        //load view
        public function view($view, $data = []){
            
            //check for the view file
            
            if(file_exists("../app/models/" . $view . '.php')){
                
                require_once '../app/models/' . $view . '.php';
            }else{
                //view does not exist
                die("view does not exist");
                
            }
            
        };
        
        
        
        
    }


?>