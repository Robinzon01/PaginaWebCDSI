<?php
try{
    $ruta = '../archivo/ISANEG-PLANILLA.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-PLANILLA.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }

?>

