<?php
    session_start();
     $host="localhost";
     $dbname="cdsicom_web";
    
     //$username="cdsicom_manuel";cdsicom_web
     $username="cdsicom_web";
     $password="Cdsi123QAZ";
     
     //$username="root";
     //$password="";
     //PARAMETROS DE ENTRADA

     $usua = $_POST["usuario"];
     $pass = $_POST["password"];

    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    $stmt = $conn->query("SELECT count(*) as cantidad FROM usuario WHERE codigo='".$usua."' and contrasena ='".$pass."'");
    $clientes = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($clientes as $cliente){
        echo $cliente->cantidad;
        $_SESSION["sesion"] = $cliente->cantidad;
    }
    

    
 
?>
