<?php
include_once __DIR__ . "/../models/aboutuser.php";
class LectureHTML {
public function __construct()
{
    
}
public function insertlecture(){
    $user=new Aboutuser();
    $questions=$user->getquestionsHTML();
    if($_SESSION['idCSS']<sizeof($questions))
   echo ' <iframe width="500" height="250" src="'.strval($questions[$_SESSION['idHTML']]->lecture).'"> 
        </iframe>';
        else
        {  echo ' <iframe width="500" height="250" src="'.'https://www.youtube.com/embed/crC4WGXEVgA'.'"> 
            </iframe>';}
}



}