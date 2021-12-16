<?php
include_once "conexao.php";
include_once "./Models/entidades/InterfaceCrud.php";

class ServicoNoticia implements InterfaceCrud
{
    public function __construct(){}

    
    public function salvar(Noticias $noticias){
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

        public function listar()
        {
            
            $conexao = new Conexaonew();
            $conn = $conexao->connectar();
            $dados = array();

            $listandoUsuario = "SELECT * FROM noticias ORDER BY dataNoticia Desc;";
                
            $resultado = $conn->query($listandoUsuario);
            

            
               $dados = $resultado->fetchall(PDO::FETCH_ASSOC);
                    
                
                return $dados;
        }
           

         public function listarID($idadminApioadoFK){

             $conexao = new Conexaonew();
            $conn = $conexao->connectar();
            $dados = array();
            
            $listandoUsuario = "SELECT * FROM noticias WHERE idnoticias='$idadminApioadoFK';";
                
            $resultado = $conn->query($listandoUsuario);
            

            
               $dados = $resultado->fetch(PDO::FETCH_ASSOC);
                    
                
                return $dados;

            //"SELECT * FROM noticias WHERE adminApoiadoFK='$idadminApioadoFK';";

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
