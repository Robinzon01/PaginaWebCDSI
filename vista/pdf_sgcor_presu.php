<?php
try{
    $ruta = '../archivo/ISANEG-PRESUPUESTO.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=ISANEG-PRESUPUESTO.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }

?>

