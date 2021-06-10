<?php

function jsonToCSV($jfilename, $cfilename)
{
    if (($json = file_get_contents($jfilename)) == false)
        die('Error reading json file...');
    $data = json_decode($json, true);
    $fp = fopen($cfilename, 'w');
    $header = false;
    foreach ($data as $row)
    {
        if (empty($header))
        {
            $header = array_keys($row);
            fputcsv($fp, $header);
            $header = array_flip($header);
        }
        fputcsv($fp, array_merge($header, $row));
    }
    fclose($fp);
    return;
}


$errors = []; 

$fileExtensionsAllowed = ['json','csv']; 

$fileName = $_FILES['the_file']['name'];
$fileSize = $_FILES['the_file']['size'];
$fileTmpName  = $_FILES['the_file']['tmp_name'];
$fileType = $_FILES['the_file']['type'];
$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

$pathJSON = 'database.json';
$pathCSV = 'database.csv';

if (isset($_POST['submit'])) {

  if (!in_array($fileExtension,$fileExtensionsAllowed)) {
    $errors[] = "This file extension is not allowed. Please upload a JSON or CSV file";
  }

  if ($fileSize > 4000000) {
    $errors[] = "File exceeds maximum size (4MB)";
  }

  if (empty($errors)) {
    copy($fileTmpName, $pathJSON);

    if($fileExtension != 'csv'){
        jsonToCSV($pathJSON, $pathCSV);
    }
    else copy($pathJSON, $pathCSV);

    $file = fopen($pathCSV, "r");

    $connection = mysqli_connect("localhost", "root", "Varsator123B", "lehs") or die("Error " . mysqli_error($connection));

    while($data = fgetcsv($file, $lineLength = 0, $delimiter = ",")) {
        
        $sql = "insert ignore into questions values ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."')";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
     }
  }
  
  header('location:'. 'http://localhost:3000/Project/admin');

    
}

?>