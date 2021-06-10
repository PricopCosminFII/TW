<?php
include_once __DIR__ . "/user.php";
include_once __DIR__ . "/../core/Database.php";
session_start();

class Aboutuser
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
   
    public function register($data)
    {
        $this->db->query('INSERT INTO users (username, email, password,firstname,lastname,gender,HTMLprogres,CSSprogres) VALUES(:username, :email, :password,:firstname,:lastname,:gender,0,0)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':gender', $data['gender']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function findUserByEmail($email)
    {

        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        $this->db->execute();
       if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getprogresCSS(){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $_SESSION['username']);
        $row=$this->db->single();
        return intval($row->CSSprogres);
        
    }
    public function getprogresHTML(){
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $_SESSION['username']);
        $row=$this->db->single();
        return intval($row->HTMLprogres);
        
    }
    public function updateprogresCSS($value){
        $this->db->query('UPDATE users SET CSSprogres=:value WHERE username=:username');
        $this->db->bind(':username', $_SESSION['username']);
        $this->db->bind(':value',$value);
       if( $this->db->execute())
       return true;
       else
       return false;
    }
    public function updateprogresHTML($value){
        $this->db->query('UPDATE users SET HTMLprogres=:value WHERE username=:username');
        $this->db->bind(':username', $_SESSION['username']);
        $this->db->bind(':value',$value);
       if( $this->db->execute())
       return true;
       else
       return false;
    }
    public function findUserByUsername($username)
    {

        $this->db->query('SELECT * FROM users WHERE username = :username');


        $this->db->bind(':username', $username);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM users WHERE username = :username  ');
        $this->db->bind(':username', $username);
        $row = $this->db->single();
        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }
}

