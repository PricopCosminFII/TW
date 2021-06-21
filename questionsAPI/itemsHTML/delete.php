<?php 
  // Headers
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: DELETE");
  header("Access-Control-Max-Age: 3600");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  include_once '../config/Database.php';
  include_once '../class/Items.php';

  if(strcasecmp($_SERVER["REQUEST_METHOD"],'delete') == 0) {
    
    $database = new Database();
    $db = $database->getConnection();

    $items = new Items($db, 'questionshtml');

    $items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

    $data = json_decode(file_get_contents("php://input")); 
  
  if($items->delete()) {
    http_response_code(201);
    echo json_encode(
      array('message' => 'Post Deleted')
    );
  } else {
    http_response_code(201);
    echo json_encode(
      array('message' => 'Unable to create item.')
    );
  }

  }
else {
    http_response_code(405);
    echo json_encode(
        array('message' => 'Wrong method')
      );
}
