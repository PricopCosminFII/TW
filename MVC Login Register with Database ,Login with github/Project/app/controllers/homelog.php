<?php
include_once __DIR__ . "/../models/aboutuser.php";
class HomeLog extends Controller
{
    public function index()
    {
       

        $this->view('HomeLog', null);
        
    }
}
