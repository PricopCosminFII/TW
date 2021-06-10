<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/Database.php';
include_once '../class/Items.php';

$database = new Database();
$db = $database->getConnection();

$items = new Items($db,"questionshtml");

$result = $items->read();

if ($result->num_rows > 0) {
    $itemRecords = array();
    $itemRecords["items"] = array();
    while ($item = $result->fetch_assoc()) {
        extract($item);
        $itemDetails = array(
            "lecture" => $lecture,
            "question" => $question,
            "option1" => $option1,
            "option2" => $option2,
            "option3" => $option3,
            "answear" => $answear

        );
        array_push($itemRecords["items"], $itemDetails);
    }
    http_response_code(200);
    echo json_encode($itemRecords);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "No item found.")
    );
}
