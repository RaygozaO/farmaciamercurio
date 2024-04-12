
const formsAjax = document.querySelectorAll(".FormularioAjax");


function enviarFormAjax(e) {
    e.preventDefault();
    //const form = document.querySelector('form')
    const data = new FormData(this);
    const method = this.getAttribute("method");
    const action = this.getAttribute("action");
    const tipo = this.getAttribute("data-form");

    const header = new Headers();
    const config = {
        method: method,
        headers: header,
        mode: 'cors',
        cache: 'no-cache',
        body: data
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
        console.log(result);
        if (result.value) {
        fetch(action, config)
            .then(respuesta=>respuesta.json())
            .then(respuesta=>{
                return alertasAjax(respuesta);
            })
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
            type: alerta.Tipo,
            text: alerta.Texto,
            confirmButtonColor: "#4caf50",
            confirmButtonText: 'Aceptar'
        });
    }else if(alerta.Alerta==='recargar'){
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
    }else if(alerta.Alerta==="limpiar"){
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
                document.querySelector(".FormularioAjax").reset();
            }
        });
    }else if(alerta.Alerta==="redireccion"){
        window.location.href=alerta.URL;
    }

}