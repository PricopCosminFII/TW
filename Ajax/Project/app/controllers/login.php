<?php
include_once __DIR__ . "/../models/aboutuser.php";

class Login extends Controller
{
    public function __construct() {
        $this->userModel = $this->model('aboutuser');
    }
    public function index()
    {  $this->view('login',null);
        if (!isset($_POST["username"]) || !isset($_POST["password"])) {

        return;
    }

    $username = $_POST["username"];
    $password = $_POST["password"];


    $loggedInUser = $this->userModel->login($username, $password);

            if ($loggedInUser) {
                $this->createUserSession($loggedInUser);
            }
            else{$this->change("error","Invalid credentials!");} 
            if (isset($_SESSION['username']) && $_SESSION['username'] != 'admin') {
                header('location:'. 'http://localhost:3000/Project/homelog');
            }
            else if(isset($_SESSION['username'])) {
                header('location:'. 'http://localhost:3000/Project/admin');
            }

    }

    public function createUserSession($user) {
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['gender'] = $user->gender;
        $_SESSION['firstname'] = $user->firstname;
        $_SESSION['lastname'] = $user->lastname;
        $_SESSION['image']='public/Photos/white.png';


    }

}