<?php
namespace Exporter;

interface Exportable
{
    public function Export();
}

abstract class Export implements Exportable
{
    protected $data;
    protected $format;
    public function __construct($title, $content)
    {
        $this->data = ['title' => str_replace(' ', '-', $title), 'content' => str_replace(' ', '-', $content)];
    }
}