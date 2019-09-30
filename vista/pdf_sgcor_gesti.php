<?php
try{
    $ruta = '../archivo/ISANEG-SIG_GESTION.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-SIG_GESTION.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   } 

?>

