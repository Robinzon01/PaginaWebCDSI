<?php
try{
    $ruta = '../archivo/ISANEG-TESORERIA.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-TESORERIA.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

