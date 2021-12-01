<?php
class AdminApoiado implements InterfaceCrud
{
    private $idadminApioado;
    private $nomeCompleto;
    private $email;
    private $senha;
    private $administrado;
    private $resumoBio;
    private $foto;

    function __construct(
        $nomeCompleto,
        $senha,
        $email,
        $administrado,
        $resumoBio,
        $foto
    ) {
        $this->nomeCompleto = $nomeCompleto;
        $this->senha = $senha;
        $this->email = $email;
        $this->administrado = $administrado;
        $this->resumoBio = $resumoBio;
        $this->foto = $foto;
    }

    public function getIdadminApioado()
    {
        return $this->idadminApioado;
    }

    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    public function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;

        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    public function getAdministrado()
    {
        return $this->administrado;
    }

    public function setAdministrado($administrado)
    {
        $this->administrado = $administrado;

        return $this;
    }

    public function getResumoBio()
    {
        return $this->resumoBio;
    }

    public function setResumoBio($resumoBio)
    {
        $this->resumoBio = $resumoBio;

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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    //Crud

    public function salvar()
    {
    }
    public function listar()
    {
    }
    public function editar()
    {
    }
    public function deletar()
    {
    }
}

?>
