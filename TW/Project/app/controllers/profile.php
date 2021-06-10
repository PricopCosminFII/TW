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
        $this->change('progresHTML','Your progress is '.$user->getprogresHTML().' from '.sizeof($user->getquestionsHTML()).'.');
        $this->change('placeHTML','Your rank '.$user->globalplaceHTML().'th.');
        $this->change('progresCSS','Your progress is '.$user->getprogresCSS().' from '.sizeof($user->getquestionsCSS()).'.');
        $this->change('placeCSS','Your rank '.$user->globalplaceCSS().'th.');



    }
}
