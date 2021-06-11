<?php
include_once __DIR__ . "/../models/aboutuser.php";
class Logout extends Controller
{
    public function __construct()
    { $user=new Aboutuser();
        $user->updateprogresCSS(0);
        $user->updateprogresHTML(0);
        session_unset();

        session_destroy();
        $this->view('Home',null);
        
       
       
      
    }

}