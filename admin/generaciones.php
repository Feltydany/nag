<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="generaciones.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
    <!--nav derecha-->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link">Ciclo: cuatrimestre 6. junio - agosto</a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- inicio --------------------- BARRA DE NAVEGACIÓN IZQUIERDA------------->
  <?php
    include 'plantilla_barra_izquierda.php';
  ?>
  <!-- Fin --------------------- BARRA DE NAVEGACIÓN IZQUIERDA------------->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bienvenido  _</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
             <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Configuración de la generación actual</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                <h3>Generación actual 2017-2020.</h3>
                <label for="ciclo">Periodo</label>
                  <div class="form-group row acomodar-select">
                        <label for="ciclo" class="col-sm-2 col-form-label">Inicio</label>
                        
                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Año</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Mes</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Día</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                  </div>

                  <div class="form-group row acomodar-select">
                        <label for="ciclo" class="col-sm-2 col-form-label">Fin</label>
                        
                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Año</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Mes</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Día</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                         </div>
                    <h6>Cambiar a generación desactivada</h6>
                    <div class="desactivar">   
                        <p>Esta acción cambia toda la arquitectura de los alumnos, docentes,
                            licenciaturas, calificaciones y más
                        </p>
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" name="gen1" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Desactivado / Activado</label>
                            </div>
                        </div>
                    </div>  


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <h5>Ciclos activos en la generación: </h5>
                  <button type="submit" class="btn btn-default float-right">Guardar Cambios</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

             <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Configuración de la generación actual</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                <h3>Generación actual 2018-2021.</h3>
                <label for="ciclo">Periodo</label>
                  <div class="form-group row acomodar-select">
                        <label for="ciclo" class="col-sm-2 col-form-label">Inicio</label>
                        
                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Año</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Mes</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Día</option>
                                <option>option 2</option>
                                <option>option 3</option>

                                </select>
                            </div>
                  </div>

                          <div class="form-group row acomodar-select">
                            <label for="ciclo" class="col-sm-2 col-form-label">Fin</label>
                        
                            <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Año</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                              <!-- select -->
                              <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Mes</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                              </div>

                              <!-- select -->
                              <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Día</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                              </div>
                          </div>
                    <h6>Cambiar a generación desactivada</h6>
                        <div class="desactivar">   
                          <p>Esta acción cambia toda la arquitectura de los alumnos, docentes,
                            licenciaturas, calificaciones y más
                          </p>
                          <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" name="gen2" class="custom-control-input" id="customSwitch2">
                              <label class="custom-control-label" for="customSwitch2">Desactivado / Activado</label>
                            </div>
                          </div>
                        </div>  


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <h5>Ciclos activos en la generación: </h5>
                  <button type="submit" class="btn btn-default float-right">Guardar Cambios</button>
                </div>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

             <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Configuración de la generación actual</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                <h3>Generación actual 2019-2022.</h3>
                <label for="ciclo">Periodo</label>
                  <div class="form-group row acomodar-select">
                        <label for="ciclo" class="col-sm-2 col-form-label">Inicio</label>
                        
                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Año</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Mes</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Día</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                  </div>

                  <div class="form-group row acomodar-select">
                        <label for="ciclo" class="col-sm-2 col-form-label">Fin</label>
                        
                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Año</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Mes</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Día</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                         </div>
                    <h6>Cambiar a generación desactivada</h6>
                    <div class="desactivar">   
                        <p>Esta acción cambia toda la arquitectura de los alumnos, docentes,
                            licenciaturas, calificaciones y más
                        </p>
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" name="gen3" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3">Desactivado / Activado</label>
                            </div>
                        </div>
                    </div>  


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <h5>Ciclos activos en la generación: </h5>
                  <button type="submit" class="btn btn-default float-right">Guardar Cambios</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

            
             <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Agregar una nueva generación</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <label for="ciclo">Periodo</label>
                    <div class="form-group row acomodar-select">
                        <label for="ciclo" class="col-sm-2 col-form-label">Inicio</label>
                        
                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Año</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Mes</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Día</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                      </div>

                      <div class="form-group row acomodar-select">
                        <label for="ciclo" class="col-sm-2 col-form-label">Fin</label>
                        
                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Año</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Mes</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>

                        <!-- select -->
                            <div class="form-group acomodar-select">
                                <select class="form-control" id="ciclo">
                                <option value="#" disabled selected>Día</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                         </div>
                          <label for="">Ciclos de la generación</label>
                            <div class="form-group">
                              <div class="acomodarcheck">

                                <h5>Cuatrimestre III, VI y IX. Junio- Agosto</h5>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Agregar</label>
                                </div>

                                <h5>Cuatrimestre III, VI y IX. Junio- Agosto</h5>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Agregar</label>
                                </div>

                                <h5>Cuatrimestre III, VI y IX. Junio- Agosto</h5>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Agregar</label>
                                </div>

                                <h5>Cuatrimestre III, VI y IX. Junio- Agosto</h5>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Agregar</label>
                                </div>

                                <h5>Cuatrimestre III, VI y IX. Junio- Agosto</h5>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Agregar</label>
                                </div>

                                <h5>Cuatrimestre III, VI y IX. Junio- Agosto</h5>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label">Agregar</label>
                                </div>

                              </div>
                            </div>
                            
  

                      </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <h5>Ciclos activos en la generación: </h5>
                  <button type="submit" class="btn btn-default float-right">Guardar Cambios</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="../dist/js/pages/dashboard2.js"></script>
</body>
</html>