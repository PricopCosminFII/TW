<?php
class Controller
{
    public function model($model, $params = []) {
        require_once __DIR__ . '/../models/'. $model .'.php';

        $modelClass = $model;

        return new $modelClass(...$params);
    }

    public function view($view, $data) {
        require_once __DIR__ . '/../views/' . $view . '.php';
       
    }
    public function change($id ,$changedwith){
        echo "<script type=\"text/javascript\">
        document.getElementById("."'".$id."'".").innerHTML="."'".$changedwith."'".";
        </script>";

    }
    public function changeimage($id ,$changedwith){
        echo "<script type=\"text/javascript\">
        document.getElementById("."'".$id."'".").src="."'".$changedwith."'".";
        </script>";

    }
   
}
