<?php
// generar_factura.php
require 'vendor/autoload.php'; // Asegúrate de tener instalado un paquete como Dompdf

use Dompdf\Dompdf;

// Obtén los datos del formulario
$nombrePaciente = $_POST['nombrePaciente'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$temperatura = $_POST['temperatura'];
$frecuenciaCardiaca = $_POST['frecuenciaCardiaca'];
$alergias = $_POST['alergias'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$diagnostico = $_POST['diagnostico'];
$medicamentos = $_POST['medicamento'];
$proximaFecha = $_POST['proximaFecha'];

// Crea el contenido HTML para el PDF
$html = "
<h1>Receta Médica</h1>
<p><strong>Nombre del Paciente:</strong> $nombrePaciente</p>
<p><strong>Fecha:</strong> $fecha</p>
<p><strong>Hora:</strong> $hora</p>
<p><strong>Temperatura:</strong> $temperatura</p>
<p><strong>Frecuencia Cardíaca:</strong> $frecuenciaCardiaca</p>
<p><strong>Alergias:</strong> $alergias</p>
<p><strong>Peso:</strong> $peso</p>
<p><strong>Altura:</strong> $altura</p>
<p><strong>Diagnóstico:</strong> $diagnostico</p>
<p><strong>Medicamentos:</strong></p>
<ul>";

foreach ($medicamentos as $medicamento) {
    if (!empty($medicamento)) {
        $html .= "<li>$medicamento</li>";
    }
}

$html .= "</ul>
<p><strong>Próxima Fecha:</strong> $proximaFecha</p>";

// Configura Dompdf y genera el PDF
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("receta_medica_$nombrePaciente.pdf");
?>

