<?php
class database{
    
    // Program to connect with Database
    public $conn;
    public function __construct()
    {
        $host = 'localhost';  
        $user = 'root';  
        $pass = '';  
        $dbname = 'dbprofile';  
        $conn = mysqli_connect($host, $user, $pass,$dbname);  
        
        $this-> conn = $conn;
        
        if(!$conn)
        {  
            die('Could not connect: '.mysqli_connect_error());  
        }
    }

    // Fetching data from database and returning it
    public function query($query)
    {
        $con = $this->conn;
        $sql = $query;
        $data = mysqli_query($con, $sql);
        $rows= mysqli_fetch_all($data);
        return $rows;
        
    }
}
    
?>