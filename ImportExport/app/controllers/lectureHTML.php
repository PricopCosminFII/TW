<?php
include_once __DIR__ . "/../models/aboutuser.php";
class LectureHTML {
public function __construct()
{
    
}
public function insertlecture(){
    $user=new Aboutuser();
    $questions=$user->getquestionsHTML();
    if($_SESSION['idHTML']<sizeof($questions))
   echo ' <iframe class="frame" src="'.strval($questions[$_SESSION['idHTML']]->lecture).'"> 
        </iframe>';
        else
    echo ' <iframe class="frame" src="'.'https://www.youtube.com/embed/crC4WGXEVgA'.'"> 
    </iframe>';
}


}