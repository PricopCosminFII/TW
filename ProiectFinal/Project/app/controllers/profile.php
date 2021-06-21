<?php
include_once __DIR__ . "/../models/aboutuser.php";
include_once __DIR__ . "/oauth.php";


class Profile extends Controller
{

    public function index()
    {
        if(!isset($_COOKIE['session']) || !isset($_SESSION['username']) || $_SESSION['username'] != $_COOKIE['session'])
            header('location:'. 'http://localhost:3000/Project/');
            
        else {
        
        $this->view('Profile', null);
        $this->change('username', $_SESSION['username']);
        $this->change('gender', $_SESSION['gender']);
        $this->change('name',$_SESSION["firstname"]." ".$_SESSION["lastname"]);
        $this->changeimage('image',$_SESSION['image']);
        $user=new Aboutuser();
        $this->change('progresHTML','Your progress is '.$user->getprogresHTML().' / '.sizeof($user->getquestionsHTML()).'.');
        $this->change('placeHTML','Your rank is '.$user->globalplaceHTML());
        $this->change('progresCSS','Your progress is '.$user->getprogresCSS().' / '.sizeof($user->getquestionsCSS()).'.');
        $this->change('placeCSS','Your rank is '.$user->globalplaceCSS());
        }


    }
}
