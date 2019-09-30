<?php

try{
    $ruta = '../archivo/sileg.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=sileg.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }  

?>

