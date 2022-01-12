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
            
            $msg='';

            $titulo = $noticias->getTitulo();
            $textoDestaque = $noticias->getTextoDestaque();
            $textoCompleto = $noticias->getTextoCompleto();
            $foto = $noticias->getFoto();
            $data = $noticias->getData();
            $idadminApioadoFK = $noticias->getIdadminApioadoFK();

          
            $inserindoNoticia = "INSERT INTO noticias (titulo, texto_destaque, texto_completo, fotont, dataNoticia, adminApoiadoFK)
            VALUES(' $titulo ',
            '$textoDestaque',
            '$textoCompleto',
            '$foto',
            ' $data',
            '$idadminApioadoFK' )";

            $resultado = $this->con->query($inserindoNoticia);
            

            
            if ($resultado->rowCount()) {
                $msg ='<div class="alert alert-success" role="alert">
                            Cadastro realizado com Sucesso!!
                        </div>';
            } else {
                $msg = '<div class="alert alert-danger" role="alert">
                          Erro na hora Salvar no banco de dado!!
                          </div>';;
            }
        
        return $msg;
            
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
            
            $listandoUsuario = "SELECT * FROM adminApoiado ap 
            JOIN noticias nt ON(ap.idadminApoiado = nt.adminApoiadoFK) 
            WHERE idnoticias='$id';";
                
            $resultado = $this->con->query($listandoUsuario);
            

            
               $dados = $resultado->fetch(PDO::FETCH_ASSOC);
                    
                
                return $dados;

            //"SELECT * FROM noticias WHERE adminApoiadoFK='$idadminApioadoFK';";

         }
    public function editar( $noticias, $id)
        {
           $msg='';

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
            fotont= '$foto ', 
            dataNoticia='$data', 
            adminApoiadoFK='$idadminApioadoFK' WHERE idnoticias ='$id' ";

            $resultado = $this->con->query($editandoNoticia);
            
               if ($resultado->rowCount()) {
                $msg ='<div class="alert alert-success" role="alert">
                            Atualizado realizado com Sucesso!!
                        </div>';
            } else {
                $msg = '<div class="alert alert-danger" role="alert">
                          Erro na hora Atualizar no banco de dado!!
                          </div>';;
            }

             return $msg;
        }
    
    
    
    
            public function deletar($id)
            {
           

            $deletaNoticias = "DELETE  FROM noticias
            WHERE idnoticias ='$id' ";

            $resultado = $this->con->query($deletaNoticias);
           
            //quando deletar redirecionar para pagina de notícias de quem esta logado
            
              if ($resultado->rowCount()) {
              session_start();
                $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
                            Notícia deletado com Sucesso!!
                        </div>';

                         header("location:/PI_RegiaoNews-main/RGnews/adminApoiado/newsapoiado/".$_SESSION['idAdminApoiado']);

                         exit;
            } else {
                session_start();
                $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
                          Erro na hora deletar Notícia no banco de dado!!
                          </div>';

                          header("location:/PI_RegiaoNews-main/RGnews/adminApoiado/newsapoiado/".$_SESSION['idAdminApoiado']);

                          
                          exit;
            }

        }
}
