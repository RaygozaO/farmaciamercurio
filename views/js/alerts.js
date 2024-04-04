
const formsAjax = document.querySelectorAll(".FormularioAjax");

function enviarFormAjax(e){
    e.preventDefault();
    let data = new FormData(this);
    let method = this.getAttribute("method");
    let action = this.getAttribute("action");
    let tipo = this.getAttribute("data-form");

    let header = new Headers();
    let config = {
        method: method,
        headers: header,
        mode: 'cors',
        cache: 'no-cache',
        body: data
    }
    let textAlert;
    if(tipo==="guardar"){
        textAlert="Los datos se guardarán en el sistema";
    }else if(tipo==="borrar"){
        textAlert="Los datos se eliminarán del sistema";
    }else if(tipo==="actualizar"){
        textAlert="Los datos serán actualizados";
    }else if(tipo==="buscar"){
        textAlert="Los datos serán actualizados";
    }else if(tipo==="citas"){
        textAlert="¿Desea borrar los datos de la cita?";
    }
    Swal.fire({
        title: '¿Estás seguro?',
        text: textAlert,
        type: 'question',
        confirmButtonColor: '#4caf50',
        cancelButtonColor: '#d33',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result)=>{
        if (result.value){
            fetch(action,config)
                .then(respuesta => respuesta.json())
                .then(respuesta => {
                    return alertasAjax(respuesta);
                });
        }
    });
}

formsAjax.forEach(forms =>{
    forms.addEventListener('submit',enviarFormAjax);
});

function alertasAjax(alerta){
    if(alerta.Alerta==="simple"){
        Swal.fire({
            title: alerta.Titulo,
            type: alerta.Icono,
            text: alerta.Texto,
            cancelButtonText: 'Aceptar',
            footer: '<a href="#">Necesitas Ayuda?</a>'
        });
    }else if(alerta.Alerta==='recargar'){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Icono,
            confirmButtonColor: "#4caf50",
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.value) {
                location.reload();
            }
        });
    }else if(alerta.Alerta==="limpiar"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Icono,
            confirmButtonColor: "#4caf50",
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.value) {
                document.querySelector(".FormularioAjax").reset();
            }
        });
    }else if(alerta.Alerta==="redireccion"){
        window.location.href=alerta.URL;

    }

}