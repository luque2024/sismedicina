<?php
include ('../app/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
 
   

  <title>
 Hospital Virtual
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
</head>
<style>
        .title-container {
            display: flex;
            align-items: center; /* Centra verticalmente el icono y el texto */
        }
        .title-container h1 {
            margin-left: 10px; /* Espacio entre el icono y el título */
        }
        .navbar {
            justify-content: center; /* Centra el contenido de la navbar */
        }
        .hidden {
            display: none; /* Clase para ocultar elementos */
        }
    </style>
<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
          
          <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="" style="text-align: center; width: 100%; display: block;"><i class="bi bi-hospital" style="font-size: 24px;"></i>
            Bienvenido al Hospital Virtual SOSPC.
        </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
           
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
        
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-danger shadow-danger border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Carrera de Medicina</h4>
                  <div class="row mt-3">
                
                  </div>
                </div>
              </div>
              <div style="text-align: center;">
             <img src="../assets/img/medicina/logo.jpg" alt="Descripción de la imagen" width="300" height="200">
            </div>
              <div class="card-body">
              <form id="loginForm" method="POST" action="controller_login.php">
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" oninput="toggleLabel(this)" required>
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" oninput="toggleLabel(this)" required>
  </div>
  <script>
    function toggleLabel(input) {
      const label = input.previousElementSibling;
      if (input.value !== '') {
        label.style.opacity = 0;
      } else {
        label.style.opacity = 1;
      }
    }
  </script>
  <div class="text-center">
    <button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Iniciar Sesion</button>
  </div>
</form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
              Elaborado por el <i class="bi bi-person-workspace"></i> 
                <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Univ. Luque </a>
     
              </div>
            </div>
            <div class="col-12 col-md-6">
             
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>
</html>