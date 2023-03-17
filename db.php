<?php 
    $servername = "localhost" ;
    $username = "root" ;
    $password = "80Sarajevo" ;
    $schema = "testSchema" ;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$schema",$username,$password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully" ;
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

?>