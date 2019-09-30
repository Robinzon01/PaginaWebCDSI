<?php

try{
    $ruta = '../archivo/DemoPVenta.exe';
    header("Content-disposition: attachment; filename=DemoPVenta.exe");
    header("Content-type: application/exe");
    readfile($ruta);
}catch(Exception $e){
       echo $e;
}

?>