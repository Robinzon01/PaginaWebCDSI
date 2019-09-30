<br>
<!-- Page Content -->
<div class="container">
   <h1 class="mt-4 mb-3"><strong class="cdsi">ISANEG-ERP</strong></h1>
   <!-- FORMULARIO -->
   <form class="form-inline">
        <div class="form-group">
          <label for="compania"> Compañia : </label> &nbsp;&nbsp;
          <select id="compania" class="form-control">
              
          </select>&nbsp;&nbsp;
        </div>
        <div class="form-group">
          <label for="red"> Red : </label> &nbsp;&nbsp;
          <!--<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">&nbsp;&nbsp;-->
          <select id="red" class="form-control">
              <option value="w">Web</option>
              <option value="i" >Intranet</option>
          </select>&nbsp;&nbsp;
        </div>
       <!--<button id="btnCambiar" class="btn btn-primary">Cambiar</button>-->
    </form>
   
   <br>
   
   <div class="row text-center">
        <!-- COMPRAS -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-shopping-cart text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
                <strong class="titulo">Compras</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="comp_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Compras&config=compa_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="comp_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Compras&config=compras" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- IMPORTACIONES -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-plane text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Importación</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="impo_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main&config=Impor_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="impo_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main&config=Impor" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- INVENTARIO -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-pencil-square-o text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Inventario</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="inve_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Inve&config=INVE_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="inve_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Inve&config=INVE" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- PROMOCION -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-percent text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Promoción</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="prom_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Promo&config=Promo_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="prom_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Promo&config=Promo" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Producción -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-cogs text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Producción</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="prod_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=FPCP_MAIN&config=Produ_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="prod_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=FPCP_MAIN&config=Produ" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Incentivos -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-money text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
                <strong class="titulo">Incentivos</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="ince_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Incen&config=INCEN_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="ince_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Incen&config=INCEN" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Facturación -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-calculator text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Facturación</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="fact_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Factu&config=FACTU_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="fact_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Factu&config=FACTU" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Punto de Venta -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-credit-card text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Punto Venta</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="pven_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_PVENTA&config=PVENTA_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="pven_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_PVENTA&config=PVENTA" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Activos Fijos -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-building-o text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Activos Fijos</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="acfi_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=MAIN&config=ACTIVOS_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="acfi_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=MAIN&config=ACTIVOS" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Personal -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-users text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Personal</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="pers_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=MAIN&config=Perso_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="pers_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=MAIN&config=Perso" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Cuentas x Pagar -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-american-sign-language-interpreting text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Cuenta x Pagar</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="cxp_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Cxp&config=CXP_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="cxp_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Cxp&config=CXP" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Cuentas x Cobrar -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-book text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Cuenta Cobrar</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="cxc_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Cxc&config=CXC_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="cxc_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Cxc&config=CXC" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Tesorería -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-university text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Tesorería</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="teso_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Teso&config=Tesor_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="teso_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Teso&config=Tesor" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Contabilidad -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-bar-chart text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Contabilidad</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="cont_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main&config=CONTA_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="cont_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main&config=CONTA" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        <!-- Sig. Gestión -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="card">
            <i class="fa fa-coffee text-center fa-5x titulo" aria-hidden="true"></i>
            <div class="card-body">
              <!--  <h4 class="card-title titulo"><strong>Importación</strong></h4>     -->
                <strong class="titulo">Sig. Gestión</strong>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <a id="sige_web" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Gest&config=Gesti_web" target="_blank" class="btn btn-primary btn-lg" role="button" title="Web">
                          <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="sige_star" href="http://cdsif.ngrok.io/forms/frmservlet?form=Main_Gest&config=Gesti" class="btn btn-success btn-lg" role="button" title="Descargar">
                          <i class="fa fa-download" aria-hidden="true"></i>
                        </a> 
                    </div>
                </div>
                     
            </div>
          </div>
        </div> 
        
   </div>      
    
</div>
<script src="js/cambiar.js"></script>
    <!-- /.container -->

