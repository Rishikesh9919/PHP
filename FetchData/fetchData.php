<?php
require "connection.php";

// PHP Program to fetch data in json format when method is GET.
$db = new database();

    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        http_response_code(200);
        echo json_encode(($db->query("SELECT * FROM tbl_profile")));
    }
    elseif($_SERVER['REQUEST_METHOD'] == "POST"){
        http_response_code(400);
        echo "This is post method";
    }
    else{
        http_response_code(404);
    }
?>