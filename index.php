<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="CDSI">
    <title>CDSI</title>
    
    <!-- Custom fonts for this template -->
    <link href="plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">  
    <link href="css/normalize.css" rel="stylesheet" type="text/css"> 
    <!-- ESTILOS PROPIOS -->
    <link href="css/estilo.css" rel="stylesheet" type="text/css">    
  </head>

  <body>
     <!-- NAVEGACION -->
    <?php 
    session_start();
    include("vista/navegacion.php"); 
    ?>
    <!-- CUERPO DE LAS PAGINAS -->
     <?php
     
     
        if( isset($_GET['pagina']) ){
            $url = $_GET['pagina'];
            if($url=='modulos'){
                //echo 'SESION : '.$_SESSION["sesion"];
               if(isset($_SESSION["sesion"])>0){
                   $url = 'modulos';
               }else{
                 $url = 'login';
               }
            }
            
            unset( $_SESSION['sesion'] );
            session_destroy();          
            
            
        }else{
            $url ="principal";
        } 
        $nombre_fichero = "vista/".$url.".php";
        //$nombre_fichero = "vista/".$url;

        if (file_exists($nombre_fichero)) {
            include ($nombre_fichero);
        } else {
            include ("vista/error.php");
        }
       
         
     ?>
    <!-- Footer -->
    <?php include("vista/pie.php"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="plugin/jquery/jquery.min.js"></script>
    <script src="plugin/popper/popper.min.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
    
  </body>

</html>