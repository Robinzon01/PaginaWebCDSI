<?php

try{
    $ruta = '../archivo/DemoProduc.exe';
    header("Content-disposition: attachment; filename=DemoProduc.exe");
    header("Content-type: application/exe");
    readfile($ruta);
}catch(Exception $e){
       echo $e;
}

?>