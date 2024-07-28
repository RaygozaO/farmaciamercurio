<!-- Main container -->

<div class="full-box main-container" >
    <!-- Page content -->
    <div class="full-box page-content">
        <nav class="full-box navbar-info">
            <a href="#" class="float-left show-nav-lateral">
                <i class="fas fa-exchange-alt"></i>
            </a>
            <a href="user-update">
                <i class="fas fa-user-cog"></i>
            </a>
            <a href="#" class="btn-exit-system">
                <i class="fas fa-power-off"></i>
            </a>
        </nav>
        <!-- Page header -->
        <div class="centra-head" style="background-color: #FEF3E2;>
            <div class="receta-head">
        <img src="./assets/img/unam.png" style="max-width: 150px; float: left; margin-left: 100px;">
        <img CLASS="right" src="./assets/img/fondoLoto.png" style="max-width: 200px; float: right; margin-right: 100px;">
        <h4>Consultorio Médico General</h4>
        <h1 class="mb-0">Farmacia Mercurio</h1>
        <p>Estudios Clinicos</p>
        <hr style="border: 0; border-top: 5px solid #00318b; width: 98%; margin: auto; margin-bottom: 4px;">
        <hr style="border: 0; border-top: 5px solid #00318b; width: 98%; margin: auto;">

        <form class="mt-2">
            <div class="input-group col-12 col-md-12">
                <button class="btn " type="button"><i class="fa fa-search" aria-hidden="true"></i> </button>
                <select class="form-select form-control" id="inputGroupSelect03" aria-label="Example select with button addon">
                    <option selected>Buscar Paciente</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </form>
    </div>

    <div class="full-box page-header" style="background-color: #FEF3E2;>
         <form action="generar_estudio.php"  class="form-neon formularioAjax" method="POST">
    <div class="row">
        <!-- Primera columna -->
        <fieldset class="col-lg-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group">
                        <label class="bmd-label-static"  for="fecha-estudio">Fecha Solicitud:</label>
                        <input class="form-control" type="date" id="proximaFecha" name="fecha-estudio" required>
                    </div>
                </div>
            </div>
            <div>
                <table class="mt-2 fondo-tabla">
                    <tbody>
                    <tr>
                        <th scope="row w-25">&#1758;</th>
                        <td class="w-275">Analisis Clinicos</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Cultivos</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Papanicolao</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Colposcopia</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Androscopia</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Toma de biopsias</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Toma de biopsias</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Rayos X</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Ultrasonido</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Electrocardiograma</td>
                    </tr>
                    <tr>
                        <th scope="row">&#1758;</th>
                        <td>Prenupciales</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <p class="fondo-paja mt-1">
                Calle Benito Juárez Lt. 8 Mz. 130<br>
                Col. Miguel Hidalgo C.P. 55490<br>
                <span style="font-size: 15px;">(Entre Juan Aldama e Ignacio Aldama)</span><br>
                Ecatepec, Edo. de México.
                <a class="m-0" href="https://wa.me/521xxxxxxxxxx?text=Hola%20Dra.%20Mitzy,%20necesito%20una%20consulta." class="whatsapp-button" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" width="40" height="40">
                </a>
            </p>
        </fieldset>
        <!-- Segunda Seccion -->
        <fieldset class="col-lg-8">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="item_codigo" class="bmd-label-floating">Nombre Paciente</label>
                            <input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="item_codigo_reg" id="item_codigo" maxlength="45">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating" for="diagnostico">Diagnóstico:</label>
                        <textarea style="width: 100%; border-radius: 5px;" id="diagnostico" name="diagnostico" rows="5" required></textarea>
                    </div>
                    <h3>Los siguientes estudios</h3>
                    <div class="form-group medicamentos">
                        <label class="bmd-label-static" >Estudio:</label>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Estudio 1" required>
                        </div>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Estudio 2">
                        </div>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Estudio 3">
                        </div>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Estudio 4">
                        </div>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Estudio 5">
                        </div>
                        <div class="add-medicamento">+ Agregar más medicamentos</div>
                    </div>
                    <div>
                        <button class="btn btn-login" type="submit">Solicitar Estudio</button>
                    </div>
        </fieldset>

    </div>
</div>
</form>
</div>
<script>
    document.querySelector('.add-medicamento').addEventListener('click', function() {
        const medicamentoDiv = document.createElement('div');
        medicamentoDiv.innerHTML = '<input type="text" name="medicamento[]" placeholder="Medicamento adicional">';
        document.querySelector('.medicamentos').appendChild(medicamentoDiv);
    });
</script>
</section>

</main>


