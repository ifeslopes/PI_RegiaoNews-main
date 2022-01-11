<?
require_once 'Conexao.php';

class ServicoLogin{
    private $con;

    public function __construct(){

        $this->con = Conexao::getConexao();

    }


public function loga($email, $senha)
    {
        
        //verificar se email e senha estão cadastrados, se  sim
        $sqp = $this->con->prepare("SELECT idAdminApoiado, nomeCompleto,email,adminstrador,foto  FROM adminApoiado WHERE email= '$email' AND senha = '$senha'");
        $sqp->execute();
        if($sqp->rowCount()> 0)
        {

            $dado = $sqp->fetch();
            session_start();
            $_SESSION['idAdminApoiado'] = $dado['idAdminApoiado'];
            $_SESSION['tipoUsuario'] = $dado['adminstrador'];
            $_SESSION['nome'] = $dado['nomeCompleto'];
            $_SESSION['foto'] = $dado['foto'];
        
           
           
            return true; //logado com sucesso
        }
        else
        {
             session_start();
                        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
                           Senha ou Email Invalido!!
                          </div>';

            return false;     
           }
       
       
        //caso não cadastrado

    }
}
?>