
<html lang="en">

<?php 
if (!isset($_SESSION['idAdminApoiado'])) {
  header("location:/PI_RegiaoNews-main/RGnews/home");
  exit;
}


if (isset($_POST["name"])) {
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

       <?php if(isset($msg)){
         echo $msg;

         }   ?>

        <form  method="post" enctype="multipart/form-data" class="bg-light rounded p-4 box-shadow  ">
          <div class="form-group">
            <label for="clientnome">Nome</label>
            <input type="text" class="form-control" id="nome" name="name" required=""
             oninvalid="this.setCustomValidity('Por favor, entre com Nome completo')"
            oninput="setCustomValidity('')">
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Email</label>
            <input type="text" class="form-control" id="email" name="email" required=""
             oninvalid="this.setCustomValidity('Por favor, entre com Email')"
            oninput="setCustomValidity('')">
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Senha</label>
            <input type="password" class="form-control" id="emaill" name="senha" required=""
             oninvalid="this.setCustomValidity('Por favor, entre com Senha')"
            oninput="setCustomValidity('')">
          </div>
          
          <div class="form-group">
            <label for="clientMenssagem">Confirma senha</label>
            <input type="password" class="form-control" id="confSenha" name="confiSenha" 
            required=""
             oninvalid="this.setCustomValidity('Por favor, confirma seu senha')"
            oninput="setCustomValidity('')">
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
            <textarea class="form-control"  rows="4" name="biografia" required=""
             oninvalid="this.setCustomValidity('Por favor, entre com sua Biografia')"
            oninput="setCustomValidity('')">  </textarea>
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



