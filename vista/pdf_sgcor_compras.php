<?php

try{
    $ruta = '../archivo/ISANEG-COMPRAS.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-COMPRAS.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }  

?>

