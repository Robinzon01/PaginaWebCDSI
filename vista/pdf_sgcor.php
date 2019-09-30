<?php

try{
    $ruta = '../archivo/sgcor.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=sgcor.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }  

?>

