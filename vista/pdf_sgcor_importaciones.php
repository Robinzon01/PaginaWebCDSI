<?php
try{
    $ruta = '../archivo/ISANEG-IMPORTACIONES.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-IMPORTACIONES.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   } 

?>

