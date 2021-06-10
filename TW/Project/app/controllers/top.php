<?php
include_once __DIR__ . "/../models/aboutuser.php";
class Top extends Controller
{
    public function index()
    {
      
        $this->view('Top',null);
    }

}