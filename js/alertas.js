
const formularios_ajax = document.querySelectorAll(".formularioAjax");
console.log(formularios_ajax);

function enviar_formulario(e){
    e.preventDefault();
    let data = new FormData(this);
    let method = this.getAttribute("method");
    let action = this.getAttribute("action");
    let tipo = this.getAttribute("data-form");

    let encabezado = new Headers();
    let config = {
        method: method,
        headers: encabezado,
        mode: 'cors',
        cache: 'no-cache',
        body: data
    }
    let texto_alerta;
    if(tipo === "save"){
        texto_alerta = "Los datos quedaran guardados";
    }else if(tipo === "delete"){
        texto_alerta = "Los datos sera eliminados del sistema";
    }else if(tipo === "update"){
        texto_alerta = "Los datos sera actualizados en el sistema";
    }else if(tipo === "search"){
        texto_alerta = "Se eliminara el termino de busqueda";
    }else if(tipo === "dates"){
        texto_alerta = "Se eliminara los datos seleccionados";
    }else{
        texto_alerta = "Realizar la operacion";
    }

    Swal.fire({
        title: 'Estas Seguro',
        text: texto_alerta,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: '#d33',
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(action, config)
                .then(response => response.json())
                .then(response => {
                    return alertas_ajax(response);
                });
        }
    });



}

formularios_ajax.forEach(formulario => {
    formulario.addEventListener("submit", enviar_formulario );
});
function alertas_ajax(alerta) {
    if(alerta.Alerta === "simple"){
        Swal.fire({
            icon: alerta.Tipo,
            title: alerta.Titulo,
            text: alerta.Texto,
            confirmButtonText: 'Aceptar',
            footer: '<a href="#">Necesitas Ayuda ?</a>'
        });
    }else if (alerta.Alerta === "recargar"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            icon: alerta.Tipo,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Si!"
        }).then((result) => {
            if (result.value) {
                location.reload();
            }
        });
    }else if(alerta.Alerta === "limpiar"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            icon: alerta.Tipo,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Si!"
        }).then((result) => {
            if (result.value) {
                document.querySelector(".formularioAjax").reset();
            }
        });
    }else if(alerta.Alerta === "redireccionar"){
        window.location.href =alerta.URL;
    }
}

/*function buscarColonias() {
    const codigoPostal = document.getElementById('codigo_postal').value;

    fetch('../models/usuarioModel', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `codigo_postal=${codigoPostal}`
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const select = document.getElementById('colonias');
                select.innerHTML = ''; // Limpiar el select

                data.data.forEach(colonia => {
                    const option = document.createElement('option');
                    option.value = colonia.idcolonia;
                    option.textContent = colonia.nombrecolonia;
                    select.appendChild(option);
                });
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error('Error:', error));

        document.getElementById('direccionForm').addEventListener('submit', function(event) {
        const select = document.getElementById('colonias');
        const selectedOption = select.options[select.selectedIndex];

        if (selectedOption) {
        // Aquí podrías obtener los valores de id_cp, id_municipio y id_entidad de alguna manera
        // Esto asume que esos valores están disponibles en el objeto colonia en la respuesta JSON
        const colonia = data.data.find(c => c.idcolonia === parseInt(selectedOption.value));
        document.getElementById('id_cp').value = colonia.idcodigopostal;
        document.getElementById('id_municipio').value = colonia.idmunicipio;
        document.getElementById('id_entidad').value = colonia.identidadfederativa;
    } else {
        event.preventDefault();
        alert('Seleccione una colonia.');
    }
    });
}*/