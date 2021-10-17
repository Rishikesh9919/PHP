<?php

// PHP API program to check even and odd numbers
function even($num)
{
    if(empty($num)){
        http_response_code(400);
        echo "Please enter something.";
    }
    if ($num % 2 == 0){
        http_response_code(200);
        echo $num." is even number";
    }
    else{
        http_response_code(200);
        echo $num." is odd number";
    }    
}

// PHP API program to print fibonacci series
function fib($num){
    if($num<0){
        http_response_code(400);
        echo "Please enter a positive number";
    }
    else{
        $num1 = 0;  
        $n1 = 0;  
        $n2 = 1; 
        http_response_code(200); 
        echo "\n";
        echo "Fibonacci series: ";    
        echo $n1.' '.$n2.' ';  
        while ($num1 <= $num )  
        {  
            $n3 = $n2 + $n1;  
            echo $n3.' ';  
            $n1 = $n2;  
            $n2 = $n3;  
            $num1 = $num1 + 1;  
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $type = $_POST['type'];
    $num = $_POST["num"];
    if($type == "EvenOrOdd")
    {
        even($num);
    }
    elseif($type == "Fibonacci")
    {
        fib($num);
    }
    else{
        echo "Please choose correct method[EvenOrOdd/Fibonacci]";
        http_response_code(400);
    }
}
else{
    echo "Bad Request. Change your Method";
    http_response_code(404);
}
?>