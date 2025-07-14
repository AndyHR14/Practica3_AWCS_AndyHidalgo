function limpiar() {
    document.getElementById('formulario').reset(); 
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formulario');

    form.addEventListener('submit', function(event) {
        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const mensaje = document.getElementById('mensaje').value;

        if (nombre === '' || email === '' || mensaje === '') {
            alert('Por favor, ingrese toda la informacion correspondiente');
            event.preventDefault();
            return; 
        }

        form.reset();
    });
     window.limpiar = function() {
        document.getElementById('formulario').reset();
    };
});