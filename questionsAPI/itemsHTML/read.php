<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



include_once '../config/Database.php';
include_once '../class/Items.php';

if(strcasecmp($_SERVER["REQUEST_METHOD"],'GET') == 0) {

$database = new Database();
$db = $database->getConnection();


$items = new Items($db,"questionshtml");

$items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $items->read();

if ($result->num_rows > 0) {
    $itemRecords = array();
    $itemRecords["items"] = array();
    while ($item = $result->fetch_assoc()) {
        extract($item);
        $itemDetails = array(
            "id" => $id,
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


}
else {
    http_response_code(405);
    echo json_encode(
        array('message' => 'Wrong method')
      );
}
