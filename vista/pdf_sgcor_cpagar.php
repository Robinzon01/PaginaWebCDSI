<?php
try{
    $ruta = '../archivo/ISANEG-CxP.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-CxP.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

