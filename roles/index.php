<?php
include ('../app/config.php');
?>

<?php
session_start(); 
if (!isset($_SESSION['user_id'])) {
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>
   Carrera Medicina
  </title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
 
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
 
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  
</head>
<style>
.full-width {
    display: block; 
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

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Hospital Virtual Carrera de Medicina</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
          <ul class="navbar-nav d-flex align-items-center  justify-content-end">
           
           
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
              </a>
            </li>
            <li class="nav-item dropdown pe-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-symbols-rounded">notifications</i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="material-symbols-rounded">account_circle</i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">Listado de Roles </h3>
          <p class="mb-6">
            Sistema web de Optimizacion y Seguimiento a los Procesos Claves
          </p>
        </div>


 
        <title>Card Listado de Roles</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header-navy {
            background-color: #001f3f; /* Azul marino */
            color: white;
        }
        .btn-custom-edit {
  background-color: #003366;  /* Azul marino */
  color: white;
  border: none;
}

.btn-custom-edit:hover {
  background-color: #002244;  /* Un tono más oscuro de azul marino para el hover */
  color: white;
}
/* Cambiar el fondo de la tabla a blanco y el color de las letras a azul marino */
.table {
    background-color: white;  /* Fondo blanco */
    color: #003366;  /* Color de texto azul marino */
}

/* Cambiar el color de las celdas del encabezado */
.table th {
    background-color: #003366;  /* Fondo azul marino en el encabezado */
    color: white;  /* Texto blanco en el encabezado */
}

/* Cambiar el color de las celdas del cuerpo */
.table td {

}
#formularioRol {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}
/* Estilos para el formulario deslizante */
.slide-form {
  position: fixed;
  top: -100%;
  left: 0;
  width: 100%;
  background: rgba(255, 255, 255, 0.95);
  z-index: 1050;
  transition: top 0.5s ease-in-out;
  padding: 20px 0;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.slide-form.active {
  top: 0;
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
            <div class="container mt-5">
        <h1 class="mb-4">Gestión de Roles</h1>
        <div class="progress">
                            <div class="progress-bar bg-gradient-info w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="container mt-4">
  <!-- Botón para mostrar el formulario -->
  <button class="btn btn-primary btn-sm float-end" onclick="toggleFormulario()">
    <i class="fas fa-plus fa-2x"></i> Crear Nuevo Rol
  </button>

  <!-- Formulario oculto por defecto -->
  <div id="formularioRol" class="card mt-4" style="display: none; max-width: 400px; margin-left: auto; margin-right: auto;">
    <div class="card-body">
      <h5 class="card-title text-center">Crear Nuevo Rol</h5>
      <div class="form-container" id="formularioRol">
  <form action="procesar_rol.php" method="POST" class="styled-form">
    <!-- Campo para el nombre del rol -->
    <div class="form-group">
      <label for="nombre_rol" class="form-label">Nombre del Rol:</label>
      <input type="text" id="nombre_rol" name="nombre_rol" class="form-input" placeholder="Ingrese el nombre del rol" required>
    </div>

    <!-- Selección del estado -->
    <div class="form-group">
      <label for="estado" class="form-label">Estado:</label>
      <select id="estado" name="estado" class="form-select" required>
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
      </select>
    </div>

    <!-- Botones para enviar y cancelar -->
    <div class="form-group">
      <button type="submit" class="btn-submit">Agregar Rol</button>
      <button type="button" class="btn-cancel" onclick="toggleFormulario()">Cancelar</button>
    </div>
  </form>
</div>

<!-- Botón para mostrar el formulario -->
<button class="btn btn-primary btn-sm mt-4 float-end" onclick="toggleFormulario()">
  <i class="fas fa-plus fa-2x"></i> Crear Nuevo Rol
</button>
    <script>
    function toggleFormulario() {
  const formulario = document.getElementById('formularioRol');
  // Alternar la visibilidad del formulario
  if (formulario.style.display === 'none') {
    formulario.style.display = 'block';
  } else {
    formulario.style.display = 'none';
  }
}

// Evento para manejar el envío del formulario
document.getElementById('nuevoRolForm').addEventListener('submit', function (event) {
  event.preventDefault(); // Evitar el envío tradicional del formulario
  const nombreRol = document.getElementById('nombreRol').value;
  if (nombreRol.trim() !== '') {
    alert(`Nuevo Rol creado: ${nombreRol}`); // Aquí puedes integrar tu lógica para guardar
    toggleFormulario(); // Ocultar el formulario después de guardar
  }
});
</script>
  </div>
</div>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID Rol</th>
            <th>Nombre Rol</th>
            <th>Fecha Creación</th>
            <th>Fecha Actualización</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody id="rolesTable">
        <!-- Aquí se llenarán las filas de la tabla -->
    </tbody>
</table>
    </div>
    <script>
    // Obtener los datos desde obtener_roles.php
    fetch('obtener_roles.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('rolesTable');
            data.forEach(role => {
                const row = `
                    <tr>
                        <td>${role.id_rol}</td>
                        <td>${role.nombre_rol}</td>
                        <td>${role.fyh_creacion}</td>
                        <td>${role.fyh_actualizacion}</td>
                        <td>
                            ${role.estado == 1 ? 'Activo' : 'Inactivo'}
                          
                        </td>
                        <td>

<button class="btn btn-custom-edit btn-sm me-1" onclick="editarRol(${role.id_rol})">
  <i class="fas fa-pencil-alt fa-3x"></i> Editar
</button>
<button class="btn btn-danger btn-sm" onclick="eliminarRol(${role.id_rol})">
  <i class="fas fa-trash fa-3x"></i> Eliminar
</button>

                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        })
        .catch(error => console.error('Error al obtener los datos:', error));

    // Funciones de los botones
    function verRol(id) {
        alert(`Ver detalles del rol con ID: ${id}`);
    }

    function editarRol(id) {
        alert(`Editar rol con ID: ${id}`);
        window.location.href = `editar_rol.php?id=${id}`;
    }

    function eliminarRol(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este rol?')) {
            fetch(`eliminar_rol.php?id=${id}`, { method: 'DELETE' })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Rol eliminado correctamente.');
                        location.reload();
                    } else {
                        alert('Error al eliminar el rol.');
                    }
                })
                .catch(error => console.error('Error al eliminar el rol:', error));
        }
    }

    // Cambiar el estado del rol
    function cambiarEstado(id, estadoActual) {
        const nuevoEstado = estadoActual == 1 ? 0 : 1; // Cambiar entre 1 (activo) y 0 (inactivo)

        fetch(`cambiar_estado_rol.php?id=${id}&estado=${nuevoEstado}`, {
            method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Estado del rol actualizado.');
                location.reload(); // Recargar la página para reflejar el cambio
            } else {
                alert('Error al cambiar el estado del rol.');
            }
        })
        .catch(error => console.error('Error al cambiar el estado del rol:', error));
    }
</script>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
              
                <div class="col-lg-6 col-5 my-auto text-end">
                 
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Rol</title>
    <!-- Puedes agregar aquí tu CSS para dar estilo al formulario -->
</head>
<body>
    <h2>Agregar Nuevo Rol</h2>

    <form action="procesar_rol.php" method="POST">
        <!-- Campo para el nombre del rol -->
        <label for="nombre_rol">Nombre del Rol:</label>
        <input type="text" id="nombre_rol" name="nombre_rol" required>
        
        <br><br>

        <!-- Selección del estado -->
        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
        
        <br><br>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Agregar Rol</button>
    </form>
</body>
                  </thead>
                  <tbody>
                    <tr>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
            
            </div>
           
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
               creado por  
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank"><i class="bi bi-person-badge"></i>Univ Luque</a>
             
              </div>
            </div>
           
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-symbols-rounded py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-symbols-rounded">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark active" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2  active ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Views",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#43A047",
          data: [50, 45, 22, 28, 50, 60, 76],
          barThickness: 'flex'
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: '#e5e5e5'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                lineHeight: 2
              },
              color: "#737373"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 14,
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
        datasets: [{
          label: "Sales",
          tension: 0,
          borderWidth: 2,
          pointRadius: 3,
          pointBackgroundColor: "#43A047",
          pointBorderColor: "transparent",
          borderColor: "#43A047",
          backgroundColor: "transparent",
          fill: true,
          data: [120, 230, 130, 440, 250, 360, 270, 180, 90, 300, 310, 220],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            callbacks: {
              title: function(context) {
                const fullMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                return fullMonths[context[0].dataIndex];
              }
            }
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [4, 4],
              color: '#e5e5e5'
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 12,
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 12,
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Tasks",
          tension: 0,
          borderWidth: 2,
          pointRadius: 3,
          pointBackgroundColor: "#43A047",
          pointBorderColor: "transparent",
          borderColor: "#43A047",
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [4, 4],
              color: '#e5e5e5'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#737373',
              font: {
                size: 14,
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [4, 4]
            },
            ticks: {
              display: true,
              color: '#737373',
              padding: 10,
              font: {
                size: 14,
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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