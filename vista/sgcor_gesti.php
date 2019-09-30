<div class="container">
    
    <!-- TITULO -->
    <h1 class="mt-4 mb-3">
         iSANEG - SIG-Gestión
    </h1>
    <!-- NAVEGADOR -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-11">
                    <!-- UBICACION EN LA WEB -->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                              <a href="?pagina=principal">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="?pagina=nuestro_servicio">Nuestros Servicios</a> 
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="?pagina=sgcor">iSANEG</a>
                            </li>
                            <li class="breadcrumb-item active">
                                iSANEG - SIG-Gestión
                            </li>
                        </ol>
                </div>
                <div class="col-md-1">
                    <form action="vista/pdf_sgcor_gesti.php" method="post" rolo="form">
                      <button type="submit" id="btnPCPE" class="btn btn-danger btn-lg btn-block" title="Descargar">
                        <i class="fa fa-file-pdf-o fa-1x" aria-hidden="true"> </i>
	              </button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN NAVEGADOR -->
    <br>
    <div class="row">
        <div class="col-md-12">            
            <!-- PANEL GENERAL -->
            <div class="card mb-4">
              <div class="card-body">
                  <h2 class="card-title text-center">SISTEMA INTEGRADO <strong class="cdsi">iSANEG-ERP</strong> </h2>
                  <h3 class="text-center">CARACTERISTICAS DEL SUB-SISTEMA <strong class="cdsi">iSANEG-SIG-GESTION.</strong></h3>
              </div>
            </div> 
            <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
                      <!-- 1. OBJETIVO:  --> 
                      <div class="card">
                        <div class="card-header" role="tab" id="headingCuatro">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1" aria-expanded="false" 
				               aria-controls="collapseThree">1. OBJETIVO:</a>
                          </h5>
                        </div> 
                          <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="card-body">
                                  <ul>
                                      <li>Brindar información consolidada de los diferentes módulos del Sistema integrado iSANEG-ERP a los
                                        Directivos de la empresa: Directorio, Presidente Ejecutivo, Gerente General y Gerentes de Área.
                                        Estando en un solo Modulo pueden consultar e imprimir distintas informaciones que permite medir el
                                        grado de productividad o efectividad de un promotor, vendedor, etc.</li>
                                      <li>Obtener indicadores de gestión como índice de rotación de inventarios, índice de efectividad de la
                                        cobranza, índice de recaudación de crédito vs a lo que se factura mes a mes etc.</li>
                                      <li>Permitir la interacción de otros software de Información gerencial tales como inteligencia de negocios
                                        o facilitar la determinación de un balanced scorecard, tableros de control sumamente útiles para el
                                        planeamiento estratégico y la toma de decisiones a nivel de logro de objetivos y metas
                                        presupuestales.</li>
                                  </ul>
                              </div>
                          </div>
                      </div>  
                      <!-- 2. SIG-LOGISTICA:  --> 
                      <div class="card">
                        <div class="card-header" role="tab" id="headingCuatro">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree2" aria-expanded="false" 
				               aria-controls="collapseThree">2. SIG-LOGISTICA:</a>
                          </h5>
                        </div> 
                          <div id="collapseThree2" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Proveedores.</li>
                                                      <li>Artículos.</li>
                                                      <li>Compras.</li>
                                                      <ul>
                                                          <li><strong>Administración</strong> (Centro Emisores, Tipos de
                                                            Transacciones, Códigos de Documentos,
                                                            Correlativo de Formato, Países, Ubicaciones
                                                            Geográficas, Unidades Organizacionales).</li>
                                                          <li><strong>Consultas</strong> (Órdenes, Comprobantes, Pdte. de
                                                            Atención/Atendidas Parcialmente, Pdte. de
                                                            Facturar/ Facturado Parcialmente, Compras x
                                                            Proveedor/C.Costo/O. Gastos/Proyectos,
                                                            Histórico de Precios por Artículos).</li>
                                                          <li><strong>Reportes</strong> (Registro de Compras, Relación de
                                                            Gastos x Proyectos Editoriales/ Otros, Ranking
                                                            de Compras, Histórico de Precios x Artículos,
                                                            Consolidado de Artículos x Proveedor).</li>
                                                      </ul>
                                                  </ul>
                                              </div>
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Importaciones.</li>
                                                      <ul>
                                                          <li>Consulta de Ordenes de Importaciones.</li>
                                                          <li>Agencias de Transporte.</li>
                                                      </ul>
                                                      <li>Inventarios.</li>
                                                      <ul>
                                                          <li><strong>Administración</strong> (Tipos de Transacciones,Series de Documentos, Código de Almacenes).</li>
                                                          <li><strong>Consultas</strong> (Stock de Artículos, Consulta de
                                                            Productos según Ingreso y Egreso,
                                                            Movimientos de Stock, Guías de Remisión,
                                                            Seguimiento de Códigos de Barras).</li>
                                                          <li><strong>Reportes</strong> (Stock de Artículos x Almacén, Stock de Artículos para Ventas x Almacén, Resumen Acumulativo x Articulo).</li>
                                                      </ul>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>  
                      <!-- 3. SIG PRODUCCIÓN:  --> 
                      <div class="card">
                        <div class="card-header" role="tab" id="headingCuatro">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree3" aria-expanded="false" 
				               aria-controls="collapseThree">3. SIG PRODUCCIÓN:</a>
                          </h5>
                        </div> 
                          <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Gerencia - Proyectos Editoriales.</li>
                                                      <li>Edición de Textos y Similares</li>
                                                      <li>Producción de Textos y Similares.</li>
                                                      
                                                  </ul>
                                              </div>
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Consulta de Costos x Proyecto Editorial.</li>
                                                      <li>Reporte de Costeo.</li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>  
                      <!-- 4. SIG PROMOCIÓN VENTAS:  --> 
                      <div class="card">
                        <div class="card-header" role="tab" id="headingCuatro">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree4" aria-expanded="false" 
				               aria-controls="collapseThree">4. SIG PROMOCIÓN VENTAS:</a>
                          </h5>
                        </div> 
                          <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Clientes.</li>
                                                      <li>Promoción.</li>
                                                      <li>Ventas Mayoristas.</li>
                                                      <li>Ventas en Librerías – Ferias.</li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Reporte de Ventas/Promo/Dona/Consumo.</li>
                                                      <li>Cuadro Comparativo de Ventas Netas.</li>
                                                      <li>Consulta de Stock, Precios y Almacenes.</li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>  
                      <!-- 5. SIG PERSONAL – ACTIVO FIJO:  --> 
                      <div class="card">
                        <div class="card-header" role="tab" id="headingCuatro">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree5" aria-expanded="false" 
				               aria-controls="collapseThree">5. SIG PERSONAL – ACTIVO FIJO:</a>
                          </h5>
                        </div> 
                          <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="card-body">
                                  <ul>
                                      <li><strong>Personal</strong> (Consulta de Trabajadores,Relación Personal - Usuarios).</li>
                                      <li><strong>Planilla</strong> (Resumen de Planilla Histórica, Boleta Histórica por Trabajador, Remuneración x Pagar x Trabajador).</li>
                                      <li><strong>Activos Fijos</strong> (Listado de Activos, Listado de Activos Intangibles).</li>
                                  </ul>
                              </div>
                          </div>
                      </div>  
                      <!-- 6. SIG FINANCIERA:  --> 
                      <div class="card">
                        <div class="card-header" role="tab" id="headingCuatro">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree6" aria-expanded="false" 
				               aria-controls="collapseThree">6. SIG FINANCIERA:</a>
                          </h5>
                        </div> 
                          <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li><strong>Cuentas por Cobrar</strong> (Consulta de
                                                        Composición de Deuda por Cliente, Consulta
                                                        de Saldos por Documento, Record de
                                                        Cliente, Reporte de Análisis de Deuda por
                                                        Vencer y Vencidas, Reporte de Promotor y
                                                        Cliente)</li>
                                                      <li><strong>Cuentas por Pagar</strong> (Consulta de Record
                                                        por Documento, Consulta de Composición
                                                        de Deuda por Proveedor, Consulta de
                                                        Record por Proveedor, Reporte Composición
                                                        de Deuda por Proveedor).</li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li><strong>Tesorería</strong> (Saldo Caja – Bancos, Consulta
                                                        de Movimientos Caja – Bancos, Reporte de
                                                        Ingreso y Egresos Reales, Egresos
                                                        Efectuados por Transacción, Cuadro
                                                        Consolidado de Ingre/Egre. Reales).</li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>  
                      <!-- 7. SIG CONTABLE – COSTOS OPERATIVOS:  --> 
                      <div class="card">
                        <div class="card-header" role="tab" id="headingCuatro">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree7" aria-expanded="false" 
				               aria-controls="collapseThree">7. SIG CONTABLE – COSTOS OPERATIVOS:</a>
                          </h5>
                        </div> 
                          <div id="collapseThree7" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Consulta de Asientos Contables.</li>
                                                      <li>Consulta Planillas sin Asientos Contables.</li>
                                                      <li>Registro de Ventas – Resumidos.</li>
                                                      <li>Registro de Compras.</li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Análisis de Gastos x por Centro de Costos.</li>
                                                      <li>Compras por Proveedor/ C. Costo / O.Gastos / Proyecto.</li>
                                                      <li>Costos de Ventas.</li>
                                                      <li>Costos de Existencias.</li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div> 
                      <!-- 8. SIG INDICADORES DE GESTIÓN:  --> 
                      <div class="card">
                        <div class="card-header" role="tab" id="headingCuatro">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree8" aria-expanded="false" 
				               aria-controls="collapseThree">8. SIG INDICADORES DE GESTIÓN:</a>
                          </h5>
                        </div> 
                          <div id="collapseThree8" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Calculo de Rotación de Artículos.</li>
                                                      <li>Reportes de Artículos con Rotación.</li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-6">
                                                  <ul>
                                                      <li>Reportes de Artículos sin Rotación (Venta Cero).</li>
                                                      <li>Reporte de Ranking de Artículos de Mayor Rotación.</li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>  
            </div>
        </div>
        
    </div>
</div>

