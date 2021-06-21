<?php
include_once __DIR__ . "/../models/aboutuser.php";
class Logout extends Controller
{
    public function __construct()
    { 
        if(!isset($_COOKIE['session']) || !isset($_SESSION['username']) || $_SESSION['username'] != $_COOKIE['session'])
            header('location:'. 'http://localhost:3000/Project/');
            
        else {
        $user=new Aboutuser();
        $user->updateprogresCSS(0);
        $user->updateprogresHTML(0);
        session_unset();

        session_destroy();
        $this->view('Home',null);
        
        }
       
      
    }

}