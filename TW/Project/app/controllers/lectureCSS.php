<?php
include_once __DIR__ . "/../models/aboutuser.php";
class LectureCSS {
public function __construct()
{
    
}
public function insertlecture(){
    $user=new Aboutuser();
    $questions=$user->getquestionsCSS();
    if($_SESSION['idCSS']<sizeof($questions))
   { echo ' <iframe width="500" height="250" src="'.strval($questions[$_SESSION['idCSS']]->lecture).'"> 
        </iframe>';}
    else
  {  echo ' <iframe width="500" height="250" src="'.'https://www.youtube.com/embed/crC4WGXEVgA'.'"> 
    </iframe>';}
}


}