<?php
include_once "conexao.php";
include_once "./entidades/Noticias.php";
class ServicoNoticia
{
    public function salvar(Noticias $noticias)
    {
        $conexao = new Conexaonew();
        $conn = $conexao->connectar();

        $titulo = $noticias->getTitulo();
        $textoDestaque = $noticias->getTextoDestaque();
        $textoCompleto = $noticias->getTextoCompleto();
        $foto = $noticias->getFoto();
        $data = $noticias->getData();
        $idadminApioadoFK = $noticias->getIdadminApioadoFK();

        echo $noticias->getTitulo();
        echo $noticias->getIdadminApioadoFK();
        $inserindoNoticia = "INSERT INTO noticias (titulo, texto_destaque, texto_completo, foto, dataNoticia, adminApoiadoFK)
         VALUES(' $titulo ',
        '$textoDestaque',
        '$textoCompleto',
        '$foto',
        ' $data',
        '$idadminApioadoFK' )";

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
        $conexao = new Conexaonew();
        $conn = $conexao->connectar();

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
    public function editar(Noticias $noticias, $id)
    {
        $conexao = new Conexaonew();
        $conn = $conexao->connectar();

        $titulo = $noticias->getTitulo();
        $textoDestaque = $noticias->getTextoDestaque();
        $textoCompleto = $noticias->getTextoCompleto();
        $foto = $noticias->getFoto();
        $data = $noticias->getData();
        $idadminApioadoFK = $noticias->getIdadminApioadoFK();

        $editandoNoticia = "UPDATE noticias SET 
        titulo= '$titulo', 
        texto_destaque= '$textoDestaque',
        texto_completo='$textoCompleto',
        foto= '$foto ', 
        dataNoticia='$data', 
        adminApoiadoFK='$idadminApioadoFK' WHERE idnoticias ='$id' ";

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
        $conexao = new conexao();
        $conn = $conexao->connectar();

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
