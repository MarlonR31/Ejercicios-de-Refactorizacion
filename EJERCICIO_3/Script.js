const form = document.querySelector('form');
const mensaje = document.querySelector('#mensaje');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    
    const usuario = document.querySelector('#usuario').value;
    const contrasena = document.querySelector('#contrasena').value;
    
    // Código de autenticación con POO
    
    if (usuario === 'adminpoo' && contrasena === 'admin') {
      // Iniciar sesión exitosamente
      mensaje.textContent = 'Sesión iniciada correctamente';
      mensaje.classList.remove('error');
      mensaje.classList.add('exito');
      setTimeout(() => {
        window.location.href = 'Usuario.html';
      }, 2000);
    } else {
      // Mensaje de error de inicio
      mensaje.textContent = 'Usuario o contraseña incorrectos';
      mensaje.classList.remove('exito');
      mensaje.classList.add('error');
    }
  });