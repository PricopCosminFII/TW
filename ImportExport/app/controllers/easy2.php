

<?php
include_once __DIR__ . "/../models/questions.php";
class Easy2 extends Controller
{public static int $progres;
    
    public static function index()
    {
       $progres=2;
       $controller=new Controller();
        $controller->view('Easy2',null);
        /*$question=new Questions($progres);
        $controller->change("question",$question->question);
        
        $controller->change("code","");
        if($_POST["code"]==$question->answear)
        echo 'Corect';
        else
        echo 'Gresit';*/
       

    }

}
?>


<script type="text/javascript" src="try.js">
/*
function fetch_questions(){
    let url = "http://localhost:3000/questionsAPI/items/read/1";
    //url = url.concat();
    fetch("http://localhost:3000/questionsAPI/items/")
      .then(res => res.json())
      .then(response => {
        console.log(response);
      })
      .catch(error => console.log(error));
}*/

</script>
