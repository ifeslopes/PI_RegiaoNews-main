
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
    <h1>inserindonews teste</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>NOME</label>
        <input type="text" name="name">
        <label>Texto Destaque</label>
        <input type="text" name="textodestaque">
        <label>Texto Completo</label>
        <input type="text" name="textocompleto">
        <input type="file" name="foto">
        
        <input type="submit" >
    </form>
</div>
    
</body>
</html> -->

<?php


if (isset($_POST["name"])) {
    $titulo = addslashes( $_POST["name"]);
    $textoDestaque = addslashes( $_POST["textodestaque"]);
    $textoCompleto = addslashes($_POST["textocompleto"]);

    $data = date("Y/m/d");
    $idadminApioadoFK = $_SESSION['idAdminApoiado'];

    $imgobjeto = new RetornoImage($_FILES["foto"]);
    $foto = $imgobjeto->getNomeimage();
    $noticia = new Noticias(
        $titulo,
        $textoDestaque,
        $textoCompleto,
        $foto,
        $data,
        $idadminApioadoFK
    );
    $inserido = new ServicoNoticia();
   $msg = $inserido->salvar($noticia);
}

?>

  <section class="container ">

    <div class="my-5 text-center">

      <h2 class="display-4 text-primary ">Cadastra Nova Notícias</h2>
    </div>
    
    <div class="row justify-content-md-center">

     <a href="<?php echo '/PI_RegiaoNews-main/RGnews/adminApoiado/newsapoiado/' . $_SESSION['idAdminApoiado']; ?>">
        <button type="submit" class="btn btn-success">Voltar</button>
    </a>

      <div class="col-md-7 mb-4 ">

         <?php if(isset($msg)){ echo $msg; }   ?>

        <form method="post" enctype="multipart/form-data" class="bg-light rounded p-4 box-shadow ">
          <div class="form-group">
            <label for="clientEmail">Título da notícia</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Noticia</label>
            <textarea class="form-control"  rows="12" name="textocompleto"></textarea>
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Texo Destaque</label>
            <textarea class="form-control"  rows="6" name="textodestaque"></textarea>
          </div>


          <div class="form-group">
            <label for="clientMenssagem">Adicionar foto</label><br>
               <input  name="foto" type="file" class="file" data-browse-on-zone-click="true">
            
          </div>



          <button type="submit" class="btn btn-primary">Salvar noticia</button>
        </form>
      </div>

    </div>
  </section>


