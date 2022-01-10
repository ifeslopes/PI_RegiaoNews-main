<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova noticia</title>
</head>
<body>
    <div id="corpo-form-cad">
    <h1>inserindo USUARIO teste</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>NOME COMPLETO</label>
        <input type="text" name="name">
        <label>EMAIL</label>
        <input type="text" name="email">
        <label>SENHA</label>
        <input type="text" name="senha"> 
        <label>TIPO USUARIO</label>
         <select name="tipoUsuario" >
            <option value="0">Apoiador</option>
            <option value="1">Administrador</option>
         </select>
         <br>
        <label>BIOGRAFRIA</label>
        <input type="text" name="biografia">

        <input type="file" name="foto">
        
        <input type="submit" >
    </form>
</div>
    
</body>
</html> -->




<?php if (isset($_POST["name"])) {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senhaconf = $_POST["confiSenha"];
    $tipoUsuario = $_POST["tipoUsuario"];
    $biografia = $_POST["biografia"];

    $imgobjeto = new RetornoImage($_FILES["foto"]);

    if($senha != $senhaconf){

      $msg= '<div class="alert alert-success" role="alert">
                            Senhas diferentes
                        </div>';
      
    }else{
    $foto = $imgobjeto->getNomeimage();
    $noticia = new AdminApoiado(
        $nome,
        $senha,
        $email,
        $tipoUsuario,
        $biografia,
        $foto
    );
    $inserido = new ServicoAdminApoiado();
   $msg = $inserido->salvar($noticia);
  }
}

?>


  <section class="container ">

    <div class="my-5 text-center">

      <h2 class="display-4 text-primary ">Cadastra Novo Usuário</h2>
    </div>
    <div class="row justify-content-md-center">

    <a href="<?php echo '/PI_RegiaoNews-main/RGnews/adminApoiado'; ?>">
        <button type="submit" class="btn btn-success">Voltar</button>
    </a>
       
      <div class="col-md-7 mb-4 ">

       <? if(isset($msg)){
      echo $msg;

         }   ?>

        <form  method="post" enctype="multipart/form-data" class="bg-light rounded p-4 box-shadow  ">
          <div class="form-group">
            <label for="clientEmail">Nome</label>
            <input type="text" class="form-control" id="nome" name="name">
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Email</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Senha</label>
            <input type="password" class="form-control" id="emaill" name="senha">
          </div>
          
          <div class="form-group">
            <label for="clientMenssagem">Confirma senha</label>
            <input type="password" class="form-control" id="confSenha" name="confiSenha">
          </div>

          <div class="form-group">
            <label for="clientMenssagem">Tipo de Usuário</label>
            <select name="tipoUsuario" >
              <option value="0">Apoiador</option>
              <option value="1">Administrador</option>
            </select>
          </div>

            <div class="form-group">
            <label for="clientMenssagem">Biografia</label>
            <textarea class="form-control"  rows="4" name="biografia" >  </textarea>
          </div>



             <div class="form-group">
            <label for="clientMenssagem">Adicionar foto</label><br>
               <input  name="foto" type="file" class="file" data-browse-on-zone-click="true">
            
          </div>


          <button type="submit" class="btn btn-primary">Salvar Usuário</button>
        </form>
      </div>

    </div>
  </section>



