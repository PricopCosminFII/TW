<?php 
  // Headers
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: PUT");
  header("Access-Control-Max-Age: 3600");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  include_once '../config/Database.php';
  include_once '../class/Items.php';

  if(strcasecmp($_SERVER["REQUEST_METHOD"],'PUT') == 0) {

  // Instantiate DB & connect
  $database = new Database();
    $db = $database->getConnection();

    $items = new Items($db,"questionscss");

    $items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

    $data = json_decode(file_get_contents("php://input"));  
  if (
    !empty($data->id) && !empty($data->lecture) && !empty($data->question) && !empty($data->option1) && !empty($data->option2) && !empty($data->option3) &&
    !empty($data->answear)
) {

  // Set ID to update
    $items->lecture = $data->lecture;
    $items->question = $data->question;
    $items->option1 = $data->option1;
    $items->option2 = $data->option2;
    $items->option3 = $data->option3;
    $items->answear = $data->answear;

  // Update post
  if($items->update()) {
    http_response_code(201);
    echo json_encode(
      array('message' => 'Post Updated')
    );
  } else {
    http_response_code(503);
    echo json_encode(
      array('message' => 'Unable to create item.')
    );
  }

http_response_code(200);
}
  }
else {
    http_response_code(405);
    echo json_encode(
        array('message' => 'Wrong method')
      );
}