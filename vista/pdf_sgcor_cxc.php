<?php
try{
    $ruta = '../archivo/ISANEG-CxC.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-CxC.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

