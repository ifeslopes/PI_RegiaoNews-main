<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA DE LOGIN</title>
</head>
<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form action="" method="post">
            <input type="email"  placeholder="Usuario" name="email" >
            <input type="password"  placeholder="Senha" name="senha" >
            <input type="submit" value="ACESSAR">
            <a href="cadastra.php">Ainda não é inscrito? <strong>Casatra-se</strong></a>   
        </form>
    </div>

     <?php
        if(isset($_POST['email'])){
          
       
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
          
            
            if( !empty($email) && !empty($senha))
            {
               
               
                    $usuario = new ServicoLogin;
                    if( $usuario->loga($email, $senha))
                    {
                        header("location: ../noticias");

                    }
                    else
                    {
                        echo "Email e/ou senha estão incorretos!"; 
                    }
                
               

            }
            else
            {
                echo "Preencha todos os campos!";
            }
        }

        ?>
    
</body>
</html>