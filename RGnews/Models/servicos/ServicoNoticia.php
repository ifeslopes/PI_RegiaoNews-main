<?php
require_once 'Conexao.php';
require_once '../RGnews/Models/entidades/InterfaceCrud.php';


class ServicoNoticia implements InterfaceCrud
{
    private $con;

    public function __construct(){

        $this->con = Conexao::getConexao();

    }

    
    public function salvar($noticias){
            

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

            $resultado = $this->con->prepare($inserindoNoticia);
            $resultado->execute();

            if ($resultado->rowCount()) {
                echo "<br>Noticia Salva  com sucesso!";
            } else {
                echo "<br> notica nao foi Salva";
            }
        }

        public function listar()
        {
            
           
            $dados = array();

            $listandoUsuario = "SELECT * FROM noticias ORDER BY dataNoticia Desc;";
                
            $resultado = $this->con->query($listandoUsuario);
            

            
               $dados = $resultado->fetchall(PDO::FETCH_ASSOC);
                    
                
                return $dados;
        }
           

         public function listarID($id){

         
            $dados = array();
            
            $listandoUsuario = "SELECT * FROM noticias WHERE idnoticias='$id';";
                
            $resultado = $this->con->query($listandoUsuario);
            

            
               $dados = $resultado->fetch(PDO::FETCH_ASSOC);
                    
                
                return $dados;

            //"SELECT * FROM noticias WHERE adminApoiadoFK='$idadminApioadoFK';";

         }
    public function editar( $noticias, $id)
        {
           

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

            $resultado = $this->con->query($editandoNoticia);
            
            if ($resultado->rowCount()) {
                echo "<br>Noticia atualizado com sucesso!";
            } else {
                echo "<br>Noticia nao foi atualizado";
            }
        }
    
    
    
    
            public function deletar($id)
            {
           

            $deletaNoticias = "DELETE  FROM noticias
            WHERE idnoticias ='$id' ";

            $resultado = $this->con->query($deletaNoticias);
           
            if ($resultado->rowCount()) {
                echo "<br> deletado atualizado com sucesso!";
            } else {
                echo "<br>nao foi atualizado";
            }
        }
        }
    


?>
