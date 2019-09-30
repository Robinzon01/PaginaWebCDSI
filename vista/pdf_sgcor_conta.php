<?php
try{
    $ruta = '../archivo/ISANEG-CONTABILIDAD.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-CONTABILIDAD.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

