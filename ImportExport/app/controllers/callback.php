<?php
include_once __DIR__ . "/../models/aboutuser.php";
class Callback
{
    public function __construct()
    {


        $client_id = "2f8f367777b6b0372f2c";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['code'])) {
                $code = $_GET['code'];
                $post = [
                    'client_id' => $client_id,
                    'client_secret' => '954a37d02c0b44562edc2c0f22a657db47a6d475',
                    // 'redirect_url' => $redirect_url,

                    'code' => $code,

                ];
            }
            $URL = "https://github.com/login/oauth/access_token";
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $URL);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt(
                $ch,
                CURLOPT_POSTFIELDS,
                $post
            );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
            $response = curl_exec($ch);
            curl_close($ch);

            $data = json_decode($response);
            if ($data->access_token != "") {
                $_SESSION['token'] = $data->access_token;
                $URL = "https://api.github.com/user";
                $authHeader = "Authorization: token " . $_SESSION['token'];
                $userAgentHeader = "User-Agent: proiect";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $URL);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', $authHeader, $userAgentHeader));
                $response = curl_exec($ch);
                curl_close($ch);
                $gender="Unknown";
                $info = json_decode($response);
                $_SESSION['username'] = $info->login;
                $_SESSION['gender']=$gender;
                $_SESSION['firstname'] = 'Logged with ';
                $_SESSION['lastname'] =' ';
                $_SESSION['image']='public/Photos/GitHub-logo.png';
               header('location:' . 'http://localhost:3000/Project/homelog');
            }
        }
    }
}
