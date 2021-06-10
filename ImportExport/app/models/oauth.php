<?php

function goToAuthUrl()
{
    $client_id = "2f8f367777b6b0372f2c";
    $redirect_url = "http://localhost:3000/Project/callback";
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $url = 'https://github.com/login/oauth/authorize?client_id=' . $client_id . "&redirect_url=" . $redirect_url . "&scope=user";
        header("location: $url");
    }
    
}

