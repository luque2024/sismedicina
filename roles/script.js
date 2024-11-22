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
  