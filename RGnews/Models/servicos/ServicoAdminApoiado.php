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
         $senha = $adminApoiado->getSenha();
         $administrado =  $adminApoiado->getAdministrado();
         $resumoBio = $adminApoiado->getResumoBio();
         $foto = $adminApoiado->getFoto();


        
        $inserindoUsuario = "INSERT INTO adminApoiado (nomeCompleto, email, senha, adminstrador, resumoBio, foto)
        VALUES('$nomeCompleto',
        '$email',
        '$senha',
        '$administrado',
        '$resumoBio',
        '$foto' )";

        $resultado = $this->con->query($inserindoUsuario);
        
        if ($resultado->rowCount()) {
            echo "<br>Cadastrado com sucesso!";
        } else {
            echo "<br>nao foi cadastrado";
        }
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
            
            $listandoUsuario = "SELECT admapd.nomeCompleto, admapd.foto, nt.* FROM adminApoiado admapd JOIN noticias nt 
            ON(admapd.idAdminApoiado = nt.adminApoiadoFK)
            WHERE admapd.idAdminApoiado='$id';";
                
            $resultado = $this->con->query($listandoUsuario);
            

            
               $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
                    
                
                return $dados;

    }
    public function editar($adminApoiado, $id)
    {
        

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
            echo "<br>Cadastrado atualizado com sucesso!";
        } else {
            echo "<br>nao foi atualizado";
        }
    }
    public function deletar($id)
    {
        
        $inserindoUsuario = "DELETE  FROM adminApoiado
        WHERE idAdminApoiado ='$id' ";

        $resultado = $this->con->query($inserindoUsuario);
        
        if ($resultado->rowCount()) {
            echo "<br> deletado atualizado com sucesso!";
        } else {
            echo "<br>nao foi atualizado";
        }
    }



    



}
    


?>
