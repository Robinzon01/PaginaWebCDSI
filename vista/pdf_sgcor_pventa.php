<?php
try{
    $ruta = '../archivo/ISANEG-PUNTO_VENTA.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-PUNTO_VENTA.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

