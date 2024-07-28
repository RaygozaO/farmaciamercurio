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
        <p style="font-family: 'Dancing Script', cursive;" >Dra. Jocelyn Galán Basurto</p>
        <p style="font-size: 20px;">CEDULA PROFESIONAL 4094810 U.N.AM FES IZTACALA. MEDICINA GENERAL, AYURVEDA y ORIENTAL</p>
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
        <form action="generar_factura.php"  class="form-neon formularioAjax" method="POST">
    <div class="row">
        <!-- Primera columna -->
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
                        <textarea style="width: 100%; border-radius: 5px;" id="diagnostico" name="diagnostico" rows="10" required></textarea>
                    </div>
                    <div class="form-group medicamentos">
                        <label class="bmd-label-static" >Medicamentos:</label>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Medicamento 1" required>
                        </div>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Medicamento 2">
                        </div>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Medicamento 3">
                        </div>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Medicamento 4">
                        </div>
                        <div>
                            <input class="form-control" type="text" name="medicamento[]" placeholder="Medicamento 5">
                        </div>
                        <div class="add-medicamento">+ Agregar más medicamentos</div>
                    </div>
                    <p class=" fondo-paja">
                        Calle Benito Juárez Lt. 8 Mz. 130<br>
                        Col. Miguel Hidalgo C.P. 55490<br>
                        <span style="font-size: 15px;">(Entre Juan aldama e Ignacio aldama)</span><br>
                        Ecatepec, Edo. de México.
                        <a class="m-0" href="https://wa.me/521xxxxxxxxxx?text=Hola%20Dra.%20Mitzy,%20necesito%20una%20consulta." class="whatsapp-button" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" width="40" height="40">
                        </a>
                    </p>
        </fieldset>
        <!-- Segunda columna -->
        <fieldset class="col-lg-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group">
                        <label class="bmd-label-static"  for="proximaFecha">Fecha:</label>
                        <input class="form-control" type="date" id="proximaFecha" name="proximaFecha" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-static" for="hora">Hora:</label>
                        <input class="form-control" type="time" id="hora" name="hora" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating" for="temperatura">Temperatura:</label>
                        <input class="form-control" type="number" step="0.1" id="temperatura" name="temperatura" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating" for="frecuenciaCardiaca">Frecuencia Cardíaca:</label>
                        <input class="form-control" type="number" id="frecuenciaCardiaca" name="frecuenciaCardiaca" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating" for="alergias">Alergias:</label>
                        <input class="form-control" type="text" id="alergias" name="alergias">
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating" for="peso">Peso:</label>
                        <input class="form-control" type="number" step="0.1" id="peso" name="peso" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating" for="altura">Altura:</label>
                        <input class="form-control" type="number" step="0.1" id="altura" name="altura" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-static"  for="proximaFecha">Próxima Cita:</label>
                        <input class="form-control" type="date" id="proximaFecha" name="proximaFecha" required>
                    </div>
                    <button class="btn btn-login" type="submit">Generar Receta en PDF</button>
                </div>
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


