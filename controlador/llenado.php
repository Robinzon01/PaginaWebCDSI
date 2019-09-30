<?php
     $host="localhost";
     $dbname="cdsicom_web";
    
     $username="cdsicom_manuel";
     $password="Cdsi123QAZ";
     
     //$username="root";
     //$password="";
     //PARAMETROS DE ENTRADA

    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    $stmt = $conn->query("SELECT configuracion,razon_social FROM COMPANIA");
    
    $clientes = $stmt->fetchAll(PDO::FETCH_OBJ);
    
    echo json_encode($clientes);
    
?>

