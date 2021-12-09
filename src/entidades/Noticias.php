<?php
include_once "InterfaceCrud.php";
include_once "conexao.php";
class Noticias extends conexao implements InterfaceCrud
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
    public function salvar()
    {
        $conn = $this->connectar();

        $inserindoNoticia = "INSERT INTO noticias (titulo, texto_destaque, texto_completo, foto, dataNoticia, adminApoiadoFK)
         VALUES('$this->titulo',
        '$this->textoDestaque',
        '$this->textoCompleto',
        '$this->foto',
        '$this->data',
        '$this->idadminApioadoFK' )";

        $resultado = $conn->prepare($inserindoNoticia);
        $resultado->execute();

        if ($resultado->rowCount()) {
            echo "<br>Noticia Salva  com sucesso!";
        } else {
            echo "<br> notica nao foi Salva";
        }
    }
    public function listar($idadminApioadoFK)
    {
        $conn = $this->connectar();

        $listandoUsuario = empty($idadminApioadoFK)
            ? "SELECT * FROM noticias;"
            : "SELECT * FROM noticias WHERE adminApoiadoFK='$idadminApioadoFK';";
        $resultado = $conn->prepare($listandoUsuario);
        $resultado->execute();

        if (empty(!$idadminApioadoFK)) {
            while ($rows_noticias = $resultado->fetch(PDO::FETCH_ASSOC)) {
                extract($rows_noticias);
                echo "<br>Titulo: $titulo <br>";
                echo "Destaque: $texto_destaque <br>";
                echo "Completo: $texto_completo <br>";
            }
        } else {
            while ($rows_noticias = $resultado->fetch(PDO::FETCH_ASSOC)) {
                extract($rows_noticias);

                echo "<br>Titulo: $titulo <br>";
                echo "Destaque: $texto_destaque <br>";
                echo "Completo: $texto_completo <br>";
            }
        }
    }
    public function editar($id)
    {
        $conn = $this->connectar();
        $editandoNoticia = "UPDATE noticias SET 
        titulo= '$this->titulo', 
        texto_destaque= '$this->textoDestaque',
        texto_completo='$this->textoCompleto',
        foto= '$this->foto', 
        dataNoticia='$this->data', 
        adminApoiadoFK='$this->idadminApioadoFK' WHERE idnoticias ='$id' ";

        $resultado = $conn->prepare($editandoNoticia);
        $resultado->execute();
        if ($resultado->rowCount()) {
            echo "<br>Noticia atualizado com sucesso!";
        } else {
            echo "<br>Noticia nao foi atualizado";
        }
    }
    public function deletar($id)
    {
        $conn = $this->connectar();

        $deletaNoticias = "DELETE  FROM noticias
        WHERE idnoticias ='$id' ";

        $resultado = $conn->prepare($deletaNoticias);
        $resultado->execute();
        if ($resultado->rowCount()) {
            echo "<br> deletado atualizado com sucesso!";
        } else {
            echo "<br>nao foi atualizado";
        }
    }
}
?>
