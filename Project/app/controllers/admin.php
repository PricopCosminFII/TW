<?php
class Admin extends Controller
{
    public function index()
    {

        $this->view('Admin', null);
        $message = "Succesful upload";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
