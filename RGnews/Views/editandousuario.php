
<?php 

if (!isset($_SESSION['idAdminApoiado'])) {
  header("location:/PI_RegiaoNews-main/RGnews/home");
  exit;
}
if (isset($_POST["name"])) {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $senhaLocal = $_POST["senha"];
    $tipoUsuario = $_POST["tipoUsuario"];
    $biografia = $_POST["biografia"];

     if(!empty($_FILES['foto']['name'])){
    $imgobjeto = new RetornoImage($_FILES["foto"]);
    $fotoLocal = $imgobjeto->getNomeimage();
    }else{
        $fotoLocal = $foto;
    }

    if(empty($_POST["senha"])){
      $senhaLocal = $senha;
    

    }

    $noticia = new AdminApoiado(
        $nome,
        $senhaLocal,
        $email,
        $tipoUsuario,
        $biografia,
        $fotoLocal
    );
    $inserido = new ServicoAdminApoiado();
    $msg = $inserido->editar($noticia, $idAdminApoiado);
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

        <?php if(isset($msg)){ echo $msg; }   ?>

        <form  method="post" enctype="multipart/form-data" class="bg-light rounded p-4 box-shadow  ">
          <div class="form-group">
            <label for="clientEmail">Nome</label>
            <input type="text" class="form-control" id="nome" name="name" value="<?php echo $nomeCompleto;?>" 
            required=""
             oninvalid="this.setCustomValidity('Por favor, entre com seu nome completo')"
            oninput="setCustomValidity('')"
            >
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>">
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

               <?php
            if($email!='admin@admin.com'){

              echo'
              <option value="0">Apoiador</option>
              <option value="1">Administrador</option>';
            }else{
                echo'
                <option value="1">Administrador</option>
                ';

              }
            ?>
            </select>
          </div>

            <div class="form-group">
            <label for="clientMenssagem">Biografia</label>
            <textarea class="form-control"  rows="4" name="biografia" > <?php echo $resumoBio;?>  </textarea>
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

    



</body>
</html>


