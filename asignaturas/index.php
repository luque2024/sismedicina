<?php
include ('../app/config.php');
?>

<?php
session_start(); // Iniciar la sesión

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
  // Redirige al usuario a la página de inicio de sesión sin mostrar SweetAlert
  header("Location: ../login/index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>
   Carrera Medicina
  </title>
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
.full-width {
    display: block; /* Hace que el enlace se comporte como un bloque */
    width: 100%;   
    text-align: center; 
}



</style>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/medicina/logo.jpg" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">SIS_MEDICINA</span>
      </a>
         </div>

         <div style="text-align: center; font-size: 14px;"><i class="bi bi-person-circle" style="font-size: 24px;"></i>
  <?php
  echo $_SESSION['user_nombre'];
  ?>
</div>

         
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link active text-white" style="background-color: #001f3f;" data-bs-toggle="collapse" href="#dashboardMenu1" role="button" aria-expanded="false" aria-controls="dashboardMenu1">

    <i class="material-symbols-rounded opacity-5">1</i>
    <span class="nav-link-text ms-1" style="font-size: 15px;">
    <i class="bi bi-ui-checks" style="margin-right: 8px;"></i>Roles
    </span>
  </a>
  <div class="collapse" id="dashboardMenu1">
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="../roles/index.php" class="nav-link active" style="display: block; padding: 5px 5px; color: #2e4053; background-color: #d7dbdd ; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;" > <i class="bi bi-card-checklist" style="margin-right: 8px;"></i>Listado de roles</a>
    </li>
    </ul>
  </div>
</li>
<li class="nav-item">
<a class="nav-link active text-white" style="background-color: #001f3f;" data-bs-toggle="collapse" href="#dashboardMenu2" role="button" aria-expanded="false" aria-controls="dashboardMenu2">

    <i class="material-symbols-rounded opacity-5">2</i>
    <span class="nav-link-text ms-1" style="font-size: 15px;">
    <i class="bi bi-book" style="margin-right: 8px;"></i>Asignaturas</span>
  </a>
  <div class="collapse" id="dashboardMenu2">
  <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="../asignaturas/index.php" class="nav-link active" style="display: block; padding: 5px 5px; color: #2e4053; background-color: #d7dbdd ; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;" > <i class="bi bi-journal-bookmark-fill" style="margin-right: 8px;"></i>1° año</a>
    </li>
</ul>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="../roles/index.php" class="nav-link active" style="display: block; padding: 5px 5px; color: #2e4053; background-color: #d7dbdd ; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;" > <i class="bi bi-journal-bookmark-fill" style="margin-right: 8px;"></i>2° año</a>
    </li>
</ul>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="../roles/index.php" class="nav-link active" style="display: block; padding: 5px 5px; color: #2e4053; background-color: #d7dbdd ; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;" > <i class="bi bi-journal-bookmark-fill" style="margin-right: 8px;"></i>3° año</a>
    </li>
</ul>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="../roles/index.php" class="nav-link active" style="display: block; padding: 5px 5px; color: #2e4053; background-color: #d7dbdd ; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;" > <i class="bi bi-journal-bookmark-fill" style="margin-right: 8px;"></i>4° año</a>
    </li>
</ul>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="../roles/index.php" class="nav-link active" style="display: block; padding: 5px 5px; color: #2e4053; background-color: #d7dbdd ; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;" > <i class="bi bi-journal-bookmark-fill" style="margin-right: 8px;"></i>5° año</a>
    </li>
</ul>
     
   


<li class="nav-item">
<a class="nav-link active text-white" style="background-color: #001f3f;" data-bs-toggle="collapse" href="#dashboardMenu3" role="button" aria-expanded="false" aria-controls="dashboardMenu3">

    <i class="material-symbols-rounded opacity-5">dashboard3</i>
    <span class="nav-link-text ms-1">Dashboard3</span>
  </a>
  <div class="collapse" id="dashboardMenu3">
    <ul class="nav ms-4">
      <li><a href="../pages/dashboard-overview.html" class="nav-link">Overview</a></li>
      <li><a href="../pages/dashboard-analytics.html" class="nav-link">Analytics</a></li>
      <li><a href="../pages/dashboard-reports.html" class="nav-link">Reports</a></li>
    </ul>
  </div>
</li>

<li class="nav-item">
<a class="nav-link active text-white" style="background-color: #001f3f;" data-bs-toggle="collapse" href="#dashboardMenu4" role="button" aria-expanded="false" aria-controls="dashboardMenu4">

    <i class="material-symbols-rounded opacity-5">dashboard4</i>
    <span class="nav-link-text ms-1">Dashboard4</span>
  </a>
  <div class="collapse" id="dashboardMenu4">
    <ul class="nav ms-4">
      <li><a href="../pages/dashboard-overview.html" class="nav-link">Overview</a></li>
      <li><a href="../pages/dashboard-analytics.html" class="nav-link">Analytics</a></li>
      <li><a href="../pages/dashboard-reports.html" class="nav-link">Reports</a></li>
    </ul>
  </div>
</li>



<li class="nav-item">
<a class="nav-link active text-white" style="background-color: #001f3f;" data-bs-toggle="collapse" href="#dashboardMenu5" role="button" aria-expanded="false" aria-controls="dashboardMenu5">

    <i class="material-symbols-rounded opacity-5">dashboard5</i>
    <span class="nav-link-text ms-1">Dashboard5</span>
  </a>
  <div class="collapse" id="dashboardMenu5">
    <ul class="nav ms-4">
      <li><a href="../pages/dashboard-overview.html" class="nav-link">Overview</a></li>
      <li><a href="../pages/dashboard-analytics.html" class="nav-link">Analytics</a></li>
      <li><a href="../pages/dashboard-reports.html" class="nav-link">Reports</a></li>
    </ul>
  </div>
</li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/tables.html">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/billing.html">
            <i class="material-symbols-rounded opacity-5">receipt_long</i>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/virtual-reality.html">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/rtl.html">
            <i class="material-symbols-rounded opacity-5">format_textdirection_r_to_l</i>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/notifications.html">
            <i class="material-symbols-rounded opacity-5">notifications</i>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/profile.html">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-up.html">
            <i class="material-symbols-rounded opacity-5">assignment</i>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-dark mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a href="../layout/logout.php" class="btn btn-danger full-width">
    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
</a>
      </div>
    </div>
  </aside>

<?php
include ( 'parte2.php');
  ?>