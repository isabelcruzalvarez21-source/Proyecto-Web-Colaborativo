// Validación del formulario de contacto
document.addEventListener('DOMContentLoaded', function() {
    
    // Formulario de contacto
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            const mensaje = document.getElementById('mensaje').value;
            
            if (nombre && email && mensaje) {
                alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
                contactForm.reset();
            }
        });
    }
    
    // Formulario de registro
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                alert('Las contraseñas no coinciden');
                return;
            }
            
            if (password.length < 6) {
                alert('La contraseña debe tener al menos 6 caracteres');
                return;
            }
            
            alert('¡Registro exitoso!');
            registerForm.reset();
        });
    }
    
    // Animación suave para los enlaces
    const links = document.querySelectorAll('a');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
});

// Función para validar email
function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

// Función para mostrar mensajes
function mostrarMensaje(mensaje, tipo) {
    const div = document.createElement('div');
    div.className = `mensaje ${tipo}`;
    div.textContent = mensaje;
    document.body.appendChild(div);
    
    setTimeout(() => {
        div.remove();
    }, 3000);
}