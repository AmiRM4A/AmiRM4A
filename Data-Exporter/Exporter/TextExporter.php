<?php
namespace Exporter;

session_start();
include 'Exporter.php';
class TextExporter extends Export
{
    protected $format = '.txt';
    public function Export()
    {
        $fileName = $this->data['title'] . '_' . time() . $this->format;
        $_SESSION['Form']['CreationPath'] = dirname(__DIR__) . '\Files\\' . $fileName;
        date_default_timezone_set('Asia/Tehran');
        file_put_contents($_SESSION['Form']['CreationPath'], 'Title: ' . $this->data['title'] . ' | Content: ' . $this->data['content'] . ' | Date: ' . date('d/m/Y - H:i:s'));
        return true;
    }
}
