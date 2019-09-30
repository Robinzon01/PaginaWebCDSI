<?php
try{
    $ruta = '../archivo/ISANEG-PROMOCION.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-PROMOCION.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

