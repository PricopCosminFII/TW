<?php
include_once __DIR__ . "/../models/aboutuser.php";
class CSS extends Controller
{
    public function index()
    {
      
        $this->view('CSS',null);
        $user=new Aboutuser();
        $questions=$user->getquestionsCSS();
        $id=$user->getprogresCSS();
        if($id<sizeof($questions)){
        $this->change('lecture',$questions[$id]->lecture);
        $this->change('question',$questions[$id]->question);
        $this->change('option1',$questions[$id]->option1);
        $this->change('option2',$questions[$id]->option2);
        $this->change('option3',$questions[$id]->option3);
        if(isset($_POST['answear']) && strval($_POST['answear'])=='option1'){
          
            $user->updateprogresCSS($id+1);
        }}
        $this->change('question','You finished this section! Congratulations!');
    }

}