<?php
ob_start();
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regiao News</title>
  <link rel="stylesheet" type="text/css" href="/PI_RegiaoNews-main/RGnews/Formatacao/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/PI_RegiaoNews-main/RGnews/Formatacao/css/style.css">
  <link rel="stylesheet" type="text/css" href="/PI_RegiaoNews-main/RGnews/Formatacao/estilo.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="Formatacao/css/bootstrap.css">
  <link rel="stylesheet" href="Formatacao/css/style.css">
</head>

<body>

  <!--CABECALHO-->
  <!------------------------------------->

  <!-- Modal -->
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="ModalLoginTitulo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLoginTitulo">Entre na sua conta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="post">
            <div class="form-group">
              <label for="loginEmail">Email </label>
              <input type="email" class="form-control" name="loginEmail">

            </div>
            <div class="form-group">
              <label for="loginSenha">Senha </label>
              <input type="password" class="form-control" name="loginSenha">
            </div>

            <button type="submit" class="btn btn-primary">Entrar na conta </button>

           
              <!-- mensagem quando usuario erra senha ou email -->
            <?php

            if(isset($_SESSION['msgsenh'])){

                echo  $_SESSION['msgsenh'];
                unset($_SESSION['msgsenh']);
                } 
            ?> 


          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- modal2 -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header bg-danger text-white">
          <h4 class="modal-title" id="myModalLabel">Confirma????o para Deletar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>

        <div class="modal-body">


          <p>Tem certeza de que quer excluir este item? </p>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger btn-ok">Delete</a>
        </div>
      </div>
    </div>
  </div>


  <?php

  if (isset($_POST['loginEmail'])) {


    $email = addslashes($_POST['loginEmail']);
    $senha = addslashes($_POST['loginSenha']);

    if (!empty($email) && !empty($senha)) {

      $usuario = new ServicoLogin;
      if ($usuario->loga($email, MD5($senha))) {
        header("location: /PI_RegiaoNews-main/RGnews/home");
      } else {


        header("location: home");
      }
    } else {
      echo "Preencha todos os campos!";
    }
  }
  ?>
  <!--fecha model-->

  <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top py-3 box-shadow ">
    <a href="/PI_RegiaoNews-main/RGnews/index" class="navbar-brand">
      <img style=" width:150px; height: 30px; " src="/PI_RegiaoNews-main/RGnews/Formatacao/img/12.png" alt="Rgiao News">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <?php

        if (isset($_SESSION['idAdminApoiado'])) {
        ?>
          <li class="nav-item active dropdown px-4 ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img style=" width:40px; height:40px" src="/PI_RegiaoNews-main/RGnews/Media/<?php echo $_SESSION['foto'] ?>"  class="rounded-circle">
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo '/PI_RegiaoNews-main/RGnews/adminApoiado'; ?>">Administrador</a>
              <a class="dropdown-item" href="<?php echo '/PI_RegiaoNews-main/RGnews/adminApoiado/newsapoiado/' . $_SESSION['idAdminApoiado']; ?>">Noticias</a>
              <a class="dropdown-item" href="<?php echo '/PI_RegiaoNews-main/RGnews/home/sair'; ?>">Sair</a>
            </div>
          </li>

        <?php

        } else {

        ?>
          <li class="nav-item active">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">
              Login</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="/PI_RegiaoNews-main/RGnews/home/sobre">Sobre</a>
          </li>

        <?php
        }

        ?>

      </ul>
    </div>
  </nav>
  <!-- FECHA CABECALHO-->
  <!------------------------------------->


  <?php $this->carregarViewNoTemplate($nomeView, $dadosModel, $dados2); ?>



  <!-------------------------------------------->
  <!--RODAPE-->
  <footer class="gradient text-white mt-1  ">
    <div class="conteiner px-4 py-2 ">
      <div class="row  d-flex justify-content-center">
        <div class="col-md-3 col-6 pl-5 ">
          <h4 class="h6">Dados de contato </h4>
          <ul class="list-unstyled text-dark">

            <li>ifes.lopes@gmail.com</li>
            <li>279989-xxxx </li>
            <li>De Seg ?? Sex. D??s 8h ??s 18h</li>
          </ul>
        </div>
        <div class="col-md-3 col-6 pl-5">
          <h4 class="h6">Redes Sociais </h4>
          <ul class="list-unstyled text-dark">
            <li><a class="btn btn-outline-dark mb-2 btn-block btn-sm" href="https://www.linkedin.com/in/l3onardo-lop3s/" style="max-width:140px">Facebook</a></li>
            <li><a class="btn btn-outline-dark mb-2 btn-block btn-sm" href="https://www.linkedin.com/in/l3onardo-lop3s/" style="max-width:140px">LinkedIn</a></li>
            <li><a class="btn btn-outline-dark mb-2 btn-block btn-sm " style="max-width:140px" href="https://www.linkedin.com/in/l3onardo-lop3s/">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bg-primary text-center py-3">
      <p class="mb-0">
        Leonardo Lopes @ 2022
      </p>
    </div>
  </footer>

  <!-------------------------------------------->
  <!--RODAPE-->



  <script type="text/javascript" src="/PI_RegiaoNews-main/RGnews/Formatacao/js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="/PI_RegiaoNews-main/RGnews/Formatacao/js/popper.min.js"></script>
  <script type="text/javascript" src="/PI_RegiaoNews-main/RGnews/Formatacao/js/bootstrap.js"></script>
  <script type="text/javascript" src="/PI_RegiaoNews-main/RGnews/Formatacao/js/app.js"></script>




</body>

</html>
<?php ob_end_flush(); ?>