<?php
include_once "InterfaceCrud.php";
include_once "conexao.php";
class Noticias
{
    private $idnoticia;
    private $titulo;
    private $textoDestaque;
    private $textoCompleto;
    private $foto;
    private $data;
    private $idadminApioadoFK;

    function __construct(
        $titulo,
        $textoDestaque,
        $textoCompleto,
        $foto,
        $data,
        $idadminApioadoFK
    ) {
        $this->titulo = $titulo;
        $this->textoDestaque = $textoDestaque;
        $this->textoCompleto = $textoCompleto;
        $this->foto = $foto;
        $this->data = $data;
        $this->idadminApioadoFK = $idadminApioadoFK;
    }

    public function getIdnoticia()
    {
        return $this->idnoticia;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getTextoDestaque()
    {
        return $this->textoDestaque;
    }

    public function setTextoDestaque($textoDestaque)
    {
        $this->textoDestaque = $textoDestaque;

        return $this;
    }

    public function getTextoCompleto()
    {
        return $this->textoCompleto;
    }

    public function setTextoCompleto($textoCompleto)
    {
        $this->textoCompleto = $textoCompleto;

        return $this;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getIdadminApioadoFK()
    {
        return $this->idadminApioadoFK;
    }

    //Crud
}
?>
