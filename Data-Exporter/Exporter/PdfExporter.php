<?php
namespace Exporter;

session_start();
include 'Exporter.php';
class PdfExporter extends Export
{
    protected $format = '.pdf';
    public function Export()
    {
        return true;
    }

}