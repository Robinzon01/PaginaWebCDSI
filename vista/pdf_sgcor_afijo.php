<?php

try{
    $ruta = '../archivo/ISANEG-ACTIVO_FIJO.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-ACTIVO_FIJO.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }  

?>

