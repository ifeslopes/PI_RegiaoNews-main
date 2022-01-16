<?php

if (!isset($_SESSION['idAdminApoiado'])) {


  header("location:/PI_RegiaoNews-main/RGnews/home");
  exit;
}
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
            <input type="text"
             class="form-control" name="name" required=""
             oninvalid="this.setCustomValidity('Por favor, entre com titulo da noticias')"
            oninput="setCustomValidity('')" >
          </div>

          <div class="form-group">
            <label for="clientMenssagem">Noticia</label>
            <textarea class="form-control"  rows="12" name="textocompleto" required=""
             oninvalid="this.setCustomValidity('Por favor, entre com Nóticia')"
            oninput="setCustomValidity('')"></textarea>
          </div>
          
          <div class="form-group">
            <label for="clientMenssagem">Texo Destaque</label>
            <textarea class="form-control"  rows="6" name="textodestaque" required=""
             oninvalid="this.setCustomValidity('Por favor, entre com texto destaque')"
            oninput="setCustomValidity('')"></textarea>
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


