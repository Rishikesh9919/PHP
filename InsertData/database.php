<?php
// PHP Program to Insert data in database
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
    require 'connection.php';
    
    $F_name = $_POST['name'];
    $L_name = $_POST['surname'];
    $e_mail = $_POST['email'];
	$pass = $_POST['password'];
    $sql = "INSERT INTO form (Name, Surname, Email, Password) VALUES ('$F_name', '$L_name', '$e_mail','$pass');";

    if ($conn->query($sql) === TRUE) {
        http_response_code(200);
        echo "Data Inserted";
    } 
    else {
        http_response_code(400);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    http_response_code(400);
    echo "Please Change Your Method";
    echo "Access Denied";
}    
?>

