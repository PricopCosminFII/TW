<?php
include_once __DIR__ . "/../models/aboutuser.php";
class Logout extends Controller
{
    public function __construct()
    { 
        session_unset();

        session_destroy();
        $this->view('Home',null);
        
       
       
      
    }

}