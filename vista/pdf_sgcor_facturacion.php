<?php
try{
    $ruta = '../archivo/ISANEG-FACTURACION.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-FACTURACION.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

