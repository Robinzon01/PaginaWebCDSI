<?php
try{
    $ruta = '../archivo/ISANEG-INCENTIVOS.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-INCENTIVOS.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }

?>

