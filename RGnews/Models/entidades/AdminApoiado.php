<?php
include_once "InterfaceCrud.php";
include_once "conexao.php";
class AdminApoiado extends conexao implements InterfaceCrud
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
        $conn = $this->connectar();
        $inserindoUsuario = "INSERT INTO adminApoiado (nomeCompleto, email, senha, adminstrador, resumoBio, foto)
        VALUES('$this->nomeCompleto',
        '$this->email',
        '$this->senha',
        '$this->administrado',
        '$this->resumoBio',
        '$this->foto' )";

        $resultado = $conn->prepare($inserindoUsuario);
        $resultado->execute();
        if ($resultado->rowCount()) {
            echo "<br>Cadastrado com sucesso!";
        } else {
            echo "<br>nao foi cadastrado";
        }
    }
    public function listar($email)
    {
        $conn = $this->connectar();

        $listandoUsuario = empty($email)
            ? "SELECT * FROM adminApoiado;"
            : "SELECT * FROM adminApoiado WHERE email='$email';";
        $resultado = $conn->prepare($listandoUsuario);
        $resultado->execute();

        if (empty(!$email)) {
            while ($rows_ususario = $resultado->fetch(PDO::FETCH_ASSOC)) {
                extract($rows_ususario);
                echo "<br>Nome: $nomeCompleto <br>";
                echo "Email: $email <br>";
                return $senha;
            }
        } else {
            while ($rows_ususario = $resultado->fetch(PDO::FETCH_ASSOC)) {
                extract($rows_ususario);

                echo "<br>Nome: $nomeCompleto <br>";
                echo "Email: $email <br>";
            }
        }
    }
    public function editar($id)
    {
        $conn = $this->connectar();
        $inserindoUsuario = "UPDATE adminApoiado SET 
        nomeCompleto= '$this->nomeCompleto', 
        email= '$this->email',
        senha='$this->senha',
        adminstrador= '$this->administrado', 
        resumoBio='$this->resumoBio', 
        foto='$this->foto' WHERE idAdminApoiado ='$id' ";

        $resultado = $conn->prepare($inserindoUsuario);
        $resultado->execute();
        if ($resultado->rowCount()) {
            echo "<br>Cadastrado atualizado com sucesso!";
        } else {
            echo "<br>nao foi atualizado";
        }
    }
    public function deletar($id)
    {
        $conn = $this->connectar();
        $inserindoUsuario = "DELETE  FROM adminApoiado
        WHERE idAdminApoiado ='$id' ";

        $resultado = $conn->prepare($inserindoUsuario);
        $resultado->execute();
        if ($resultado->rowCount()) {
            echo "<br> deletado atualizado com sucesso!";
        } else {
            echo "<br>nao foi atualizado";
        }
    }
}

?>
