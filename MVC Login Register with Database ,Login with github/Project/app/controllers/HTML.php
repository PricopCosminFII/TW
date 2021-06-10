<?php
include_once __DIR__ . "/../models/questions.php";
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
        if($id<sizeof($questions))
       { $this->change('lecture',$questions[$id]->lecture);
        $this->change('question',$questions[$id]->question);
        $this->change('option1',$questions[$id]->option1);
        $this->change('option2',$questions[$id]->option2);
        $this->change('option3',$questions[$id]->option3);
        if(isset($_POST['answear']) && strval($_POST['answear'])=='option1'){
          
            $user->updateprogresHTML($id+1);
        }}
        else
        $this->change('question','You finished this section! Congratulations!');
    }
}
