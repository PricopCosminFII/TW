<?php
include_once __DIR__ . "/../models/aboutuser.php";
class Choose extends Controller
{
    public function index()
    { 
      
        $this->view('Choose',null);
       
    }

}
