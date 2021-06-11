<?php
include_once __DIR__ . "/../models/aboutuser.php";
class HTML extends Controller
{
    public  function __construct()
    {
    }

    public function index()
    {
        $this->view('HTML', null);
        $user=new Aboutuser();
        $questions=$user->getquestionsHTML();
        $id=$user->getprogresHTML();
        $_SESSION['idHTML']=$id;
        if($id<sizeof($questions))
       { 
        $this->change('question',$questions[$id]->question);
        $this->change('option1',$questions[$id]->option1);
        $this->change('option2',$questions[$id]->option2);
        $this->change('option3',$questions[$id]->option3);
        if(isset($_POST['answear']) && (strval($_POST['answear'])==strval($questions[$id]->answear))){
          
            $user->updateprogresHTML($id+1);
        }}
        else
        $this->change('question','You finished this section! Congratulations!');
    }
}
