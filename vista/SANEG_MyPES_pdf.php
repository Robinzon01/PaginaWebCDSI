<?php
try{
    $ruta = '../archivo/sanegbas.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=sanegbas.pdf');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }
?>

