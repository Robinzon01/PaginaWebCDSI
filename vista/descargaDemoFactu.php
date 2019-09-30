<?php

try{
    $ruta = '../archivo/DemoFactu.exe';
    header("Content-disposition: attachment; filename=DemoFactu.exe");
    header("Content-type: application/exe");
    readfile($ruta);
}catch(Exception $e){
       echo $e;
}

?>