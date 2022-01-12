<?php

//bloco que  limita usuario ter acesso as areas restrita 

$tipoUsuario = 1;

if (!isset($_SESSION['idAdminApoiado'])) {


  header("location:/PI_RegiaoNews-main/RGnews/home");
  exit;
}

if (count($this->dados) > 0) {        //aqui testa se usuario tem notcias cadasrada

  if (!$_SESSION['tipoUsuario'] == $tipoUsuario) {  //se usuario é um Administradro

    if ($_SESSION['idAdminApoiado'] != $this->dados[0]['adminApoiadoFK']) { //testa se usuário  dono da sessão e dono da noticia

      header("location:/PI_RegiaoNews-main/RGnews/home");
      exit;
    }
  }
} else {

  if (!$_SESSION['tipoUsuario'] == $tipoUsuario) {         //se usuario é um Administradro

    if ($_SESSION['idAdminApoiado'] != $this->dados2['idAdminApoiado']) {      //testa se usuário  dono da sessão e dono da noticia
      header("location:/PI_RegiaoNews-main/RGnews/home");
      exit;
    }
  }
}

?>



<section class=" py-5 bg-light text-center">
  <div class="container">
    <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/inserindonews'; ?>" class="button">
      <button type="button" class="btn btn-success">Nova Notícia +</button>
    </a>
    <div class="my-5">
      <div style="height: 100px" class="d-flex justify-content-center ">
        <img src=" /PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2['foto']; ?>" class="rounded-circle" style=" width:100px; height:100px">
      </div>

      <h2 class="display-4 text-dark ">Notícias Publicadas</h2>
        <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
    </div>
    <div class="row box-shadow">

      <?php
      if (count($this->dados) > 0) {

        for ($i = 0; $i < count($this->dados); $i++) {
      ?>

          <a class="text-dark " href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/news/' . $this->dados[$i]['idnoticias']; ?>">
            <div class="col-xl-4 col-md-6">
              <div style="height: 100px" class="d-flex justify-content-center">
                <img src=" /PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados[$i]['fotont']; ?>" alt="passaporte">
              </div>
              <h3> <? echo $this->dados[$i]['titulo']; ?></h3>
              
          </a>

          <div>

            <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/editandonews/' . $this->dados[$i]['idnoticias']; ?> ">
              <button type="button" class="btn btn-info ">Editar</button>
            </a>


            <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/deletandonews/' . $this->dados[$i]['idnoticias']; ?>
          " data-href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/deletandonews/' . $this->dados[$i]['idnoticias']; ?>" data-toggle="modal" data-target="#confirm-delete">
              <button type="button" class="btn btn-danger">Deletar</button>

            </a>
          </div>
    </div>

<?php
        }
      } else {
        echo '<h1>SEM NOTICIAS CADASTRADA!!</h1>';
      }
?>


<footer>
</footer>
</blockquote>
</section>