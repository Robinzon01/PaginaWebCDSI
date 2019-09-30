<?php
try{
    $ruta = '../archivo/PCPE-PRODUCCION.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=PCPE-PRODUCCION.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

