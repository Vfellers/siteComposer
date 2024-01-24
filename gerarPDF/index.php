<?php
use Mpdf\Mpdf;
require_once __DIR__."/../vendor/autoload.php";

$data = new DateTime();
$hoje = $data->format("d/m/Y");


$pdf = new Mpdf();
$pdf->WriteHTML("
    <h1>Primeiro PDF gerado</h1>
    <p>Data: {$hoje}</p>
");
$pdf->Output();