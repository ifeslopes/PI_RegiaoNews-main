
<?php 



if (isset($_POST["name"])) {
    $titulo = addslashes( $_POST["name"]);
    $textoDestaque = addslashes( $_POST["textodestaque"]);
    $textoCompleto = addslashes($_POST["textocompleto"]);

    $dataLocal = date("y-m-d");
    $idadminApioadoFK = $adminApoiadoFK;

    if(!empty($_FILES['foto']['name'])){
    $imgobjeto = new RetornoImage($_FILES["foto"]);
    $fotoLocal = $imgobjeto->getNomeimage();
    }else{
        $fotoLocal = $fotont;
    }
   
    $noticia = new Noticias(
        $titulo,
        $textoDestaque,
        $textoCompleto,
        $fotoLocal,
        $dataLocal,
        $idadminApioadoFK
    );
    $inserido = new ServicoNoticia();
   $msg = $inserido->editar($noticia, $idnoticias);
}

?>





<section class="container ">

    <div class="my-5 text-center">

      <h2 class="display-4 text-primary ">Cadastra novo usuario</h2>
    </div>
    <div class="row justify-content-md-center">

    <a href="<?php echo '/PI_RegiaoNews-main/RGnews/adminApoiado/newsapoiado/' . $_SESSION['idAdminApoiado']; ?>">
        <button type="submit" class="btn btn-success">Voltar</button>
    </a>
    
      <div class="col-md-7 mb-4 ">

      <? if(isset($msg)){ echo $msg; }   ?>
      
        <form method="post" enctype="multipart/form-data" class="bg-light rounded p-4 box-shadow ">
          <div class="form-group">
            <label for="clientEmail">Título da notícia</label>
            <input type="text" class="form-control" name="name" value="<?php echo $titulo ;?>">
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Noticia</label>
            <textarea class="form-control"  rows="12" name="textocompleto"> <?php echo $texto_completo;?></textarea>
          </div>
          <div class="form-group">
            <label for="clientMenssagem">Texo Destaque</label>
            <textarea class="form-control"  rows="6" name="textodestaque"> <?php echo $texto_destaque; ?> </textarea>
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

