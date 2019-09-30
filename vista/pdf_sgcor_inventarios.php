<?php
try{
    $ruta = '../archivo/ISANEG-INVENTARIOS.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-INVENTARIOS.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }

?>

