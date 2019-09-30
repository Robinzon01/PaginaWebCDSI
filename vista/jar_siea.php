<?php

try{
    $ruta = '../archivo/Isaneg.exe';
   header('Content-Type: application/exe');
   header('Content-Disposition: attachment; filename=Isaneg.exe');
    readfile($ruta);
   }catch(Exception $e){
       echo $e;
   }  

?>

