<?php
namespace Exporter;

session_start();
include 'Exporter.php';
class JsonExporter extends Export
{
    protected $format = '.json';
    public function Export()
    {
        $fileName = $this->data['title'] . '_' . time() . $this->format;
        $_SESSION['Form']['CreationPath'] = dirname(__DIR__) . '\Files\\' . $fileName;
        file_put_contents($_SESSION['Form']['CreationPath'], json_encode($this->data));
        return true;
    }
}