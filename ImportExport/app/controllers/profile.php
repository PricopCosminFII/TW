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
        $user=new Aboutuser();
        $this->change('progresHTML','Your progress is '.$user->getprogresHTML().' out of '.sizeof($user->getquestionsHTML()).'.');
        $this->change('placeHTML','Your rank is '.$user->globalplaceHTML());
        $this->change('progresCSS','Your progress is '.$user->getprogresCSS().' out of '.sizeof($user->getquestionsCSS()).'.');
        $this->change('placeCSS','Your rank is '.$user->globalplaceCSS());



    }
}
