<?php
include_once __DIR__ . "/../models/aboutuser.php";
include_once __DIR__ . "/oauth.php";
class Profile extends Controller
{
    public function index()
    {

        $this->view('Profile', null);
        $this->change('username', $_SESSION['username']);
        $this->change('gender', $_SESSION['gender']);
        $this->change('name',$_SESSION["firstname"]." ".$_SESSION["lastname"]);
        $this->changeimage('image',$_SESSION['image']);



    }
}
