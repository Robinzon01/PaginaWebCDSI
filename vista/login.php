<br>
<br>
<div class="container">
    <div class="row">
    	<div class="col-md-12">
            <div class="row">
                <div id="respuesta" class="col-lg-4 mb-4">
                    
                </div>
                <div class="col-lg-4 mb-4">
                    <div class=" bg-primary card card-outline-primary h-100">
                        <br>
                        <p class="text-center">
                          <i id="resultado" class="fa fa-user-circle fa-5x btn-primary" aria-hidden="true"></i>  
                        </p>                                                    
                        <h3 class="card-header bg-primary text-center text-white"><strong>LOGIN</strong></h3>
                         
                        <ul class="list-group list-group-flush">
                          <!-- USUARIO -->
                          <li class="list-group-item">
                            <div class="input-group margin-bottom-sm">
                               <span class="input-group-addon bg-primary"><i class="fa fa-user-o fa-fw text-white fa-lg" aria-hidden="true"></i></span>
                               <input id="txtUsuario" class="form-control" type="text" placeholder="Usuario">
                            </div>
                              <br>
                            <div class="input-group">
                                <span class="input-group-addon bg-primary"><i class="fa fa-lock fa-fw text-white fa-lg" aria-hidden="true"></i></span>
                                <input id="txtPassword" class="form-control" type="password" placeholder="Contraseña">
                            </div>
                              
                          </li>
                          
                          <!-- BOTONES -->
                          <li class="list-group-item">
                            <!-- <a href="#" class="btn btn-primary">Sign Up!</a> -->
                            <p id="pRes" class="malo"></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <button id="btnIniciar" type="button" class="btn btn-block btn-success" title="Iniciar Sesión">
                                                <strong>Iniciar</strong>
                                            </button>
                                        </div>

                                        <div class="col-md-6">
                                            
                                                <form action="vista/jar_siea.php" method="post" rolo="form">
                                                    
                                                    <button type="submit" id="descJar" class="btn btn-block btn-default" title="Descargar el .jar SIEA">
                                                        SIEA <img src="https://img.icons8.com/color/48/000000/java-coffee-cup-logo.png">
                                                    </button>

                                                </form>

                                                
                                            </button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>                          
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/dinamico.js"></script>

