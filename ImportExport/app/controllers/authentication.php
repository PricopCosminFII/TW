<?php
include_once __DIR__ . "/../models/aboutuser.php";
include_once __DIR__ . "/../models/user.php";
class Authentication extends Controller
{public function __construct() {
    $this->userModel = $this->model('aboutuser');
}
    public function index()
    {

        $this->view('authentication', null);
        if (!isset($_POST["username"]) || !isset($_POST["password"]) || !isset($_POST["firstname"]) || !isset($_POST["lastname"]) || !isset($_POST["gender"]) || !isset($_POST["email"])) {

            return;
        }
        $data['username'] = $_POST["username"];
        $data['password'] = $_POST["password"];
        $data['firstname'] = $_POST["firstname"];
        $data['lastname'] = $_POST["lastname"];
        $data['email'] = $_POST["email"];
        $data['gender'] = $_POST["gender"];
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        if($this->userModel->findUserByUsername($data['username']))
        {echo'Found';
            $this->change("error","It already exists an account with this username. Please choose another username!");
            return;
        }
        if($this->userModel->findUserByEmail($data['email']))
        {
            $this->change("error","It already exists an account with this email. Please choose another email!");
            return;
        }
        if ($this->userModel->register($data)) {
            //Redirect to the login page
            header("Location: http://localhost:3000/Project/login");

        } else {
            die('Something went wrong.');
        }
    }
}