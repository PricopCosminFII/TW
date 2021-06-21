<?php
include_once __DIR__ . "/../models/aboutuser.php";
class Top extends Controller
{
    public function index()
    {
        if(!isset($_COOKIE['session']) || !isset($_SESSION['username']) || $_SESSION['username'] != $_COOKIE['session'])
            header('location:'. 'http://localhost:3000/Project/');
            
        else {
        $this->view('Top',null);
        }
    }

}