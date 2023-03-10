<?php
session_start();
$host = $_SERVER['HTTP_HOST'];?>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="./src/css/perfil1.css" media="screen">
</head>

<body>
<div class="main-content">
  <!-- Top navbar -->
  <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
      <!-- Brand -->
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Perfil de Usuario</a>
      <!-- User -->
      <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="./src/php/logout.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold"><?php if (isset($_SESSION['Usuario'])){
                  echo $_SESSION['Usuario'];}?>
                </span>               
              </div>
              <span class="avatar avatar-sm rounded-circle">
                <img src="src\images\16363.png" class="rounded-circle" width="35px" heigth="35px">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bienvenido!</h6>
            </div>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Mi perfil</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Ajustes/span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Actividad</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Soporte</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Salir</span>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Header -->
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://img.freepik.com/foto-gratis/brote-coronavirus-covid-trabajadores-salud-concepto-pandemia-entusiasta-medico-sonriente-fisioterapeuta_1258-84624.jpg?w=1380&t=st=1676790497~exp=1676791097~hmac=e6cceef47b5772f7b007ca71e2326af91ea1d5b88de55bf501da918ee1c4e6ff); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white"><?php if (isset($_SESSION['Usuario'])){
                echo $_SESSION['Usuario'];
              }?></h1>
          <p class="text-white mt-0 mb-5">Esta es la pagina principal de tu usuario donde podras modificar datos y gestionar las citas</p>
          <a href="#!" class="btn btn-info">Editar Perfil</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#">
                  <img src="src\images\16363.png" class="rounded-circle">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm btn-default float-right">Ver citas</a>
            </div>
          </div>
          <div class="card-body pt-0 pt-md-4">
            <div class="row">
              <div class="col">
                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                  <div>
                    <span class="heading">10</span>
                    <span class="description">Citas</span>
                  </div>
                  <div>
                    <span class="heading">89</span>
                    <span class="description">Comentarios</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <h3>
                Dr Garcia<span class="font-weight-light">, 30</span>
              </h3>
              <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>Tamaulipas, Mexico
              </div>
              <div class="h5 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Psicologo - Espacialista en terapia
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>Universidad Autonoma de Mexico
              </div>
              <hr class="my-4">
              <p>Jose ??? Excelente Atencion, Resolvi problemas con mi pareja  Sofia ??? Medico con mucha experiancia y atento </p>
              <a href="#">Ver todos los comentarios</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Perfil</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form>
              <h6 class="heading-small text-muted mb-4">Perfil de usuario</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-username">Nombre de usuario</label>
                      <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="Garcia Doc">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Correo electronico registrado</label>
                      <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="drgarcia@example.com">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-first-name">Nombre</label>
                      <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Julio">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-last-name">Apellidos</label>
                      <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Garcia">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-address">Telefono</label>
                      <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="3324" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-city">Ciudad</label>
                      <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="Tamaulipas">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-country">Pais</label>
                      <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="Mexico">
                    </div>
                  </div>
                  <div class="col-lg-4">
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <!-- Description -->
              <h6 class="heading-small text-muted mb-4">Experiecia</h6>
              <div class="pl-lg-4">
                <div class="form-group focused">
                  <label>Nombre Doctor</label>
                  <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">Hacerca del especialista</textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6 m-auto text-center">
      <div class="copyright">
        <p><a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Consultas Medicas</a> Tede/p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
