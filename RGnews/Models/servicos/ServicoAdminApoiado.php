<?php
require_once 'Conexao.php';
require_once '../RGnews/Models/entidades/InterfaceCrud.php';


class ServicoAdminApoiado implements InterfaceCrud
{
    private $con;

    public function __construct(){

        $this->con = Conexao::getConexao();

    }

     public function salvar($adminApoiado)
    {

         $nomeCompleto = $adminApoiado->getNomeCompleto();
         $email =$adminApoiado->getEmail();
         $senha = MD5($adminApoiado->getSenha());
         $administrado =  $adminApoiado->getAdministrado();
         $resumoBio = $adminApoiado->getResumoBio();
         $foto = $adminApoiado->getFoto();

         $msg='';


        $userExiste = $this->con->query("SELECT idadminApoiado FROM adminApoiado WHERE email='$email';");
        if($userExiste->rowCount() > 0){

               
                        $msg= '<div class="alert alert-danger" role="alert">
                          Esse email já foi usado por outra conta
                          </div>';
                          
        }else{
            $inserindoUsuario = "INSERT INTO adminApoiado (nomeCompleto, email, senha, adminstrador, resumoBio, foto)
            VALUES('$nomeCompleto',
            '$email',
            '$senha',
            '$administrado',
            '$resumoBio',
            '$foto' )";

            $resultado = $this->con->query($inserindoUsuario);
            
            if ($resultado->rowCount()) {
                $msg ='<div class="alert alert-success" role="alert">
                            Cadastro realizado com Sucesso!!
                        </div>';
            } else {
                $msg = '<div class="alert alert-danger" role="alert">
                          Erro na hora Salvar no banco de dado!!
                          </div>';;
            }
        }
        return $msg;
    }
    public function listar()
    {
       
        $dados = array();

            $listandoUsuario = "SELECT * FROM adminApoiado";
                
            $resultado = $this->con->query($listandoUsuario);
            
            $dados = $resultado->fetchall(PDO::FETCH_ASSOC);
                    
                
            return $dados;
    }

    public function listarID($id){

         $dados = array();
            
            $listandoUsuario = "SELECT * FROM adminApoiado WHERE idAdminApoiado='$id';";
                
            $resultado = $this->con->query($listandoUsuario);
            

            
               $dados = $resultado->fetch(PDO::FETCH_ASSOC);
                    
                
                return $dados;

    }


     public function listarNoticiaApoiado($id){

         $dados = array();
            
            $listandoUsuario = "SELECT admapd.idAdminApoiado, admapd.nomeCompleto, admapd.foto, nt.* FROM adminApoiado admapd JOIN noticias nt 
            ON(admapd.idAdminApoiado = nt.adminApoiadoFK)
            WHERE admapd.idAdminApoiado='$id';";
                
            $resultado = $this->con->query($listandoUsuario);
            
            
                $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
                               
                return $dados;
             
           
    }
    public function editar($adminApoiado, $id)
    {
        $msg='';

         $nomeCompleto = $adminApoiado->getNomeCompleto();
         $email =$adminApoiado->getEmail();
         $senha = $adminApoiado->getSenha();
         $administrado =  $adminApoiado->getAdministrado();
         $resumoBio = $adminApoiado->getResumoBio();
         $foto = $adminApoiado->getFoto();


        $inserindoUsuario = "UPDATE adminApoiado SET 
        nomeCompleto= '$nomeCompleto', 
        email= '$email',
        senha='$senha',
        adminstrador= '$administrado', 
        resumoBio='$resumoBio', 
        foto='$foto' WHERE idAdminApoiado ='$id' ";

        $resultado = $this->con->query($inserindoUsuario);
        
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
        
        $inserindoUsuario = "DELETE  FROM adminApoiado
        WHERE idAdminApoiado ='$id' ";

        $resultado = $this->con->query($inserindoUsuario);
        
          if ($resultado->rowCount()) {
              session_start();
                $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
                            Item deletado com Sucesso!!
                        </div>';

                         header("location:/PI_RegiaoNews-main/RGnews/adminApoiado");
                         exit;
            } else {
                session_start();
                $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
                          Erro na hora deletar item no banco de dado!!
                          </div>';

                          header("location:/PI_RegiaoNews-main/RGnews/adminApoiado");
                          exit;
            }

    }

}
    
?>
