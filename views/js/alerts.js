const formsAjax = document.querySelectorAll(".FormularioAjax");

function enviarFormAjax(e) {
    e.preventDefault();

    let formData = new FormData(this);


    let method = this.getAttribute("method");
    let action = this.getAttribute("action");
    let tipo = this.getAttribute("data-form");

    let config = {
        method: method,
        mode: 'cors',
        cache: 'no-cache',
        body: formData
    };

    let textAlert = "";
    if (tipo === "guardar") {
        textAlert = "Los datos se guardarán en el sistema";
    } else if (tipo === "borrar") {
        textAlert = "Los datos se eliminarán del sistema";
    } else if (tipo === "actualizar") {
        textAlert = "Los datos serán actualizados";
    }

    Swal.fire({
        title: '¿Estás seguro?',
        text: textAlert,
        type: 'question',
        confirmButtonColor: '#4caf50',
        cancelButtonColor: '#d33',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if(result.value){
            fetch(action,config)
                .then(respuesta => respuesta.json())
                .then(respuesta => {
                    return alertasAjax(respuesta);
                });
        }
    });
}

formsAjax.forEach(form => {
    form.addEventListener('submit', enviarFormAjax);
});

function alertasAjax(alerta) {
    if (alerta.Alerta === "simple") {
        Swal.fire({
            title: alerta.Titulo,
            type: alerta.Tipo,
            text: alerta.Texto,
            confirmButtonColor: "#4caf50",
            confirmButtonText: 'Aceptar'
        });
    } else if (alerta.Alerta === 'recargar') {
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            showCancelButton: true,
            confirmButtonColor: "#4caf50",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                location.reload();
            }
        });
    } else if (alerta.Alerta === "limpiar") {
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            showCancelButton: true,
            confirmButtonColor: "#4caf50",
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                form.reset(); // Resetear el formulario actual
            }
        });
    } else if (alerta.Alerta === "redireccion") {
        window.location.href = alerta.URL;
    }
}

