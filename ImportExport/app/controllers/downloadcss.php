<?php

$connection = mysqli_connect("localhost", "root", "Varsator123B", "lehs") or die("Error " . mysqli_error($connection));

//fetch table rows from mysql db
$sql = "select * from questionscss";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $emparray[] = $row;
}
//write to json file
    $fp = fopen('C:\Users\prico\Desktop\Project\database.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

//close the db connection
mysqli_close($connection);

function df($urlFile)
{
    $file_name    =    basename($urlFile);
    //save the file by using base name
    $fn            =    file_put_contents($file_name, file_get_contents($urlFile));
    header("Expires: 0");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Content-type: application/file");
    header('Content-length: ' . filesize($file_name));
    header('Content-disposition: attachment; filename="' . basename($file_name) . '"');
    readfile($file_name);
}

$urlPdf = 'C:\Users\prico\Desktop\Project\database.json';
df($urlPdf);
