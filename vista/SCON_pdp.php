<?php
try{
    $ruta = '../archivo/scont.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=scont.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

