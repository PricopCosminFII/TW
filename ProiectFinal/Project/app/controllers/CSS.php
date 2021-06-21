<?php
include_once __DIR__ . "/../models/aboutuser.php";
class CSS extends Controller
{
    public function index()
    {
        if(!isset($_COOKIE['session']) || !isset($_SESSION['username']) || $_SESSION['username'] != $_COOKIE['session'])
            header('location:'. 'http://localhost:3000/Project/');
            
        else {
        $this->view('CSS',null);
        $user=new Aboutuser();
        $questions=$user->getquestionsCSS();
        $id=$user->getprogresCSS();
        $_SESSION['idCSS']=$id;
        if($id<sizeof($questions)){
         
        $this->change('question',$questions[$id]->question);
        $this->change('option1',$questions[$id]->option1);
        $this->change('option2',$questions[$id]->option2);
        $this->change('option3',$questions[$id]->option3);
        if(isset($_POST['answear']) && strval($_POST['answear'])==strval($questions[$id]->answear)){
          
            $user->updateprogresCSS($id+1);
        }}
        else
        $this->change('question','You finished this section! Congratulations!');
    }
    }

}